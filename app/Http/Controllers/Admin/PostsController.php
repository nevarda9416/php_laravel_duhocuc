<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\CategoryBusiness;
use App\Core\Business\PostsBusiness;
use App\Core\Business\UploadFileBusiness;
use App\Core\Connection\ElasticsearchServer;
use App\Core\Controllers\Controller;
use App\Core\Enums\CommonEnum;
use App\Core\Models\Country;
use App\Core\Repositories\Redis\CategoryRedis;
use App\Core\Repositories\Elasticsearch\PostsElasticsearch;
use Illuminate\Http\Request;
use App\Core\Models\Posts;
use App\Core\Models\Category;
use App\Core\Models\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Core\Enums\ElasticsearchEnum;
use App\Helpers\Activity;

class PostsController extends Controller
{

    public $limit;

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countPublishPosts = Posts::where([
            'status' => 'publish'
        ]);
        $posts = Posts::orderBy('id', 'DESC')->paginate($this->limit);
        $categories = Category::all();
        $countPublishPosts = $countPublishPosts->count();
        return view('admin.posts.index', compact('posts', 'categories', 'countPublishPosts'))->with('i', ($request->get('page', 1) - 1) * $this->limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $categories = Category::select('id', 'name', 'parent_id')->where('is_actived', 1)->get();
        $countries = Country::query()->select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.posts.create', compact('type', 'categories', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type)
    {
        $title = $request->get('title');
        $slug = $this->sanitize($title);
        $content = $request->get('content');
        $plain_text = strip_tags($content);

        /* Start thumbnail url */
        $thumbnail_url = $request->thumbnail_url;
        $thumbnail_name = '';
        if ($thumbnail_url) {
            $thumbnail_name = $thumbnail_url->getClientOriginalName();
        }
        /* End thumbnail url */

        $yearDir = date('Y');
        $monthDir = date('m');
        $dayDir = date('d');

        try {
            $this->validate($request, [
                'title' => 'required',
                'content' => 'required',
                'status' => 'required'
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Posts::where('slug', '=', $slug)->exists()) {
                return redirect()->back()->with('error', 'Bài viết ' . $title . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $post = new Posts([
                    'title' => $title,
                    'slug' => $slug,
                    'excerpt' => $request->get('excerpt'),
                    'plain_text' => $plain_text,
                    'content' => $content,
                    'author_name' => $request->get('author_name'),
                    'user_id' => $request->get('user_id'),
                    'status' => $request->get('preview') == true ? 'draft' : $request->get('status'), // Chế độ xem trước là bài nháp
                    'published_at' => $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at')),
                    'post_type' => $type,
                    'category_type' => $request->get('category_type'),
                    'price' => $request->get('price'),
                    'address' => $request->get('address'),
                    'province' => $request->get('province'),
                    'district' => $request->get('district'),
                    'subdistrict' => $request->get('subdistrict'),
                    'category_id' => $request->get('category_id'),
                    'country' => $request->get('country'),
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null,
                    'date' => $request->get('date') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('date')),
                    'time' => $request->get('time'),
                    'place' => $request->get('place'),
                    'meta_title' => $request->get('meta_title'),
                    'meta_keyword' => $request->get('meta_keyword'),
                    'meta_description' => $request->get('meta_description'),
                    'language' => $request->get('language')
                ]);

                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                $post->save();

                // update share url post
                $category = Category::find($request->get('category_id'));
                if ($category->parent_id == 0) {
                    switch ($request->get('category_id')) {
                        default:
                            $slugParent = 'bai-viet';
                            break;
                    }
                } else {
                    $parentCategory = Category::find($category->parent_id);
                    $slugParent = $parentCategory->slug;
                }
                $share_url = '/' . $slugParent . '/' . $slug . '.html';
                $post = Posts::find($post->id);
                $post->share_url = $share_url;
                $post->save();

                // insert vào bảng trung gian
                DB::table('category_has_posts')->insert(
                    [
                        'category_id' => $request->get('category_id'),
                        'disease_id' =>(int)$request->get('disease_id'),
                        'post_id' => $post->id,
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                );
                // Xử lý tags
                $list_tags = str_replace(array('[', ']', '"'), array('', '', ''), $request->get('tags'));
                $list_tags = explode(',', $list_tags);
                foreach ($list_tags as $tag) {
                    if ($tag !== '') {
                        $slug_tag = $this->sanitize($tag);
                        if (!Tags::where('slug', $slug_tag)->exists()) {
                            $nt = new Tags([
                                'name' => $tag,
                                'slug' => $slug_tag,
                                'description' => $tag,
                                'meta_title' => $tag,
                                'meta_keyword' => $tag,
                                'meta_description' => $tag
                            ]);
                            $nt->save();
                        } else {
                            $nt = Tags::where('slug', $slug_tag)->first();
                        }
                        $postTag = DB::table('post_has_tags')->where([
                            'post_id' => $post->id,
                            'tag_id' => $nt->id
                        ]);
                        if (!$postTag->exists()) {
                            DB::table('post_has_tags')->insert([
                                'post_id' => $post->id,
                                'tag_id' => $nt->id,
                                'created_at' => date('Y-m-d H:i:s'), // Thời gian tạo
                                'updated_at' => date('Y-m-d H:i:s') // Thời gian sửa
                            ]);
                        } else {
                            $postTag->update([
                                'updated_at' => date('Y-m-d H:i:s') // Thời gian sửa
                            ]);
                        }
                    }
                }

                Activity::addLog('Tạo mới bài viết', 'Tài khoản ' . auth()->user()->email . ' tạo mới bài viết ' . $title . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/posts/edit/' . $post->id)->with('message', 'Tạo mới bài viết ' . $title . ' thành công');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $post = Posts::find($id);
        $categories = Category::select('id', 'name', 'parent_id')->where('is_actived', 1)->get();
        $categoryPost = DB::table('categories')
            ->where('id', $post->category_id)
            ->pluck('categories.id')
            ->first();
        $tagPost = DB::table('tags')
            ->join('post_has_tags', 'tags.id', '=', 'post_has_tags.tag_id')
            ->where('post_has_tags.post_id', '=', $id)
            ->pluck('tags.name')
            ->all();
        $countries = Country::query()->select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.posts.form', compact('action', 'post', 'categories', 'categoryPost', 'tagPost', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->get('title');
        $slug = $request->get('slug');
        $content = $request->get('content');
        $plain_text = strip_tags($content);

        /* Start thumbnail url */
        $thumbnail_url = $request->thumbnail_url;
        $thumbnail_name = '';
        if ($thumbnail_url) {
            $thumbnail_name = $thumbnail_url->getClientOriginalName();
        }
        /* End thumbnail url */

        $yearDir = date('Y');
        $monthDir = date('m');
        $dayDir = date('d');

        try {
            $this->validate($request, [
                'title' => 'required',
                'slug' => 'required',
                'content' => 'required',
                'status' => 'required'
            ]);
            $post = Posts::find($id);
            // Not ok thì redirect với thông báo post không tồn tại
            if (Posts::where('id', '=', $id)->exists()) {
                $post->title = $title;
                $post->slug = $slug;
                $post->excerpt = $request->get('excerpt');
                $post->plain_text = $plain_text;
                $post->content = $content;
                $post->author_name = $request->get('author_name');
                $post->user_id = $request->get('user_id');
                $post->status = $request->get('mode') == 'unpublish' ? 'unpublish' : $request->get('status');
                $post->published_at = $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at'));
                $post->post_type = $post->post_type;
                $post->category_type = $request->get('category_type');
                $post->price = $request->get('price');
                $post->address = $request->get('address');
                $post->province = $request->get('province');
                $post->district = $request->get('district');
                $post->subdistrict = $request->get('subdistrict');
                $post->category_id = $request->get('category_id');
                $post->country = $request->get('country');
                $post->date = $request->get('date') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('date'));
                $post->time = $request->get('time');
                $post->place = $request->get('place');
                $post->meta_title = $request->get('meta_title');
                $post->meta_keyword = $request->get('meta_keyword');
                $post->meta_description = $request->get('meta_description');
                $post->language = $request->get('language');
                // update share url post
                $category = Category::find($request->get('category_id'));
                if ($category->parent_id == 0) {
                    switch ($request->get('category_id')) {
                        default:
                            $slugParent = 'bai-viet';
                            break;
                    }
                } else {
                    $parentCategory = Category::find($category->parent_id);
                    $slugParent = $parentCategory->slug;
                }
                $share_url = '/' . $slugParent . '/' . $slug . '.html';
                $post->share_url = $share_url;

                if ($thumbnail_url) {
                    //Upload File to external serve
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                    $post->thumbnail_url = ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null;
                }
                $post->save();

                if ($request->get('category_id') !== $post->category_id) {
                    // delete trước rồi mới insert lại
                    DB::table('category_has_posts')->where(
                        [
                            'post_id' => $post->id,
                        ]
                    )->delete();
                    // insert vào bảng trung gian
                    DB::table('category_has_posts')->insert(
                        [
                            'category_id' => $request->get('category_id'),
                            'disease_id' => (int)$request->get('disease_id'),
                            'post_id' => $post->id,
                            'created_at' => date('Y-m-d H:i:s')
                        ]
                    );
                } else {
                    // update vào bảng trung gian
                    DB::table('category_has_posts')->where([
                        'category_id' => $request->get('category_id'),
                        'disease_id' => (int)$request->get('disease_id'),
                        'post_id' => $post->id
                    ])->update(
                        [
                            'updated_at' => date('Y-m-d H:i:s')
                        ]
                    );
                }

                // Xử lý tags
                $list_tags = str_replace(array('[', ']', '"'), array('', '', ''), $request->get('tags'));
                $list_tags = explode(',', $list_tags);
                foreach ($list_tags as $tag) {
                    if ($tag !== '') {
                        $slug_tag = $this->sanitize($tag);
                        if (!Tags::where('slug', $slug_tag)->exists()) {
                            $nt = new Tags([
                                'name' => $tag,
                                'slug' => $slug_tag,
                                'description' => $tag,
                                'meta_title' => $tag,
                                'meta_keyword' => $tag,
                                'meta_description' => $tag
                            ]);
                            $nt->save();
                        } else {
                            $nt = Tags::where('slug', $slug_tag)->first();
                        }
                        $postTag = DB::table('post_has_tags')->where([
                            'post_id' => $post->id,
                            'tag_id' => $nt->id
                        ]);
                        if (!$postTag->exists()) {
                            DB::table('post_has_tags')->insert([
                                'post_id' => $post->id,
                                'tag_id' => $nt->id,
                                'created_at' => date('Y-m-d H:i:s'), // Thời gian tạo
                                'updated_at' => date('Y-m-d H:i:s') // Thời gian sửa
                            ]);
                        } else {
                            $postTag->update([
                                'updated_at' => date('Y-m-d H:i:s') // Thời gian sửa
                            ]);
                        }
                    }
                }

                Activity::addLog('Sửa bài viết', 'Tài khoản ' . auth()->user()->email . ' sửa bài viết ' . $title . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));

                if ($request->get('mode') == 'unpublish')
                    return json_encode(array('postId' => $post->id, 'message' => 'Hạ bài viết thành công'));
                else
                    return redirect('cms/posts/edit/' . $post->id)->with('message', 'Sửa bài viết ' . $title . ' thành công');
            } else {
                return redirect()->back()->with('error', 'Bài viết ' . $post->title . ' không tồn tại');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $post = Posts::find($id);
            $post->delete();
            return redirect('cms/posts')->with('message', 'Xóa bài viết ' . $post->title . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/posts')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function preview($id)
    {
        $post = Posts::find($id);
        $category = Category::where('id', $post->category_id)->first();
        $disease = Disease::where('id', $post->disease_id)->first();
        $relatedPost = Posts::where([
            ['category_id', '=', $post->category_id],
            ['disease_id', '=', $post->disease_id],
        ])->orderBy('id', 'DESC')->take(3)->get();
        $tagPost = DB::table('tags')
            ->join('post_has_tags', 'tags.id', '=', 'post_has_tags.tag_id')
            ->where('post_has_tags.post_id', '=', $id)
            ->pluck('tags.name')
            ->all();
        $metaTitle = $post->title;
        return view('admin.posts.preview', compact('category', 'disease', 'post', 'relatedPost', 'tagPost', 'metaTitle'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function highlight($category_id = '')
    {
        if ($category_id == '') {
            $posts = Posts::where([
                ['status', '=', 'publish'],
                ['is_highlight', '!=', 1]
            ])->orderBy('id', 'DESC')->paginate($this->limit);
            $highlightPosts = DB::table('highlights')
                ->join('posts', 'highlights.post_id', '=', 'posts.id')->where([
                    'posts.is_highlight' => 1
                ])->orderBy('order')->get();
        } else {
            $posts = Posts::where([
                ['status', '=', 'publish'],
                ['category_id', '=', $category_id],
                ['is_highlight', '!=', 1]
            ])->orderBy('id', 'DESC')->paginate($this->limit);
            $highlightPosts = DB::table('highlights')
                ->join('posts', 'highlights.post_id', '=', 'posts.id')->where([
                    'highlights.category_id' => $category_id,
                    'posts.is_highlight' => 1
                ])->orderBy('order')->get();
        }
        $categories = Category::whereIn('category_type', ['suc-khoe', 'hoi-dap', 'tin-tuc', 'uu-dai'])->get();
        return view('admin.posts.highlight', compact('category_id', 'posts', 'highlightPosts', 'categories'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function addHighlight(Request $request)
    {
        $postId = $request->get('postId');
        $categoryId = $request->get('categoryId');
        $highlight_post = DB::table('highlights')->where([
            ['post_id', '=', $postId],
            ['category_id', '=', $categoryId]
        ]);
        if (!$highlight_post->exists()) {
            DB::table('highlights')->insert([
                'post_id' => $postId,
                'category_id' => $categoryId,
                'order' => $postId,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            Posts::where('id', $postId)->update([
                'is_highlight' => 1
            ]);
        }
        // Xử lý lưu lại id bài viết vào danh mục highlight được set trên cache (redis)
        CategoryRedis::setListPostsHighlightByCategory($categoryId);
        // End xử lý lưu cache (redis)
        return json_encode(array('error' => 0, 'message' => 'Thao tác thành công bài viết: ' . $postId . ' - danh mục: ' . $categoryId));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function removeHighlight(Request $request)
    {
        $postId = $request->get('postId');
        $categoryId = $request->get('categoryId');
        $highlight_post = DB::table('highlights')->where([
            ['post_id', '=', $postId],
            ['category_id', '=', $categoryId]
        ]);
        if ($highlight_post->exists()) {
            $highlight_post->delete();
            Posts::where('id', $postId)->update([
                'is_highlight' => 0
            ]);
        }
        // Xử lý lưu lại id bài viết vào danh mục highlight được set trên cache (redis)
        CategoryRedis::setListPostsHighlightByCategory($categoryId);
        // End xử lý lưu cache (redis)
        return json_encode(array('error' => 0, 'message' => 'Thao tác thành công'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function orderHighlight(Request $request)
    {
        $postId = $request->get('postId');
        $order = $request->get('order');
        $categoryId = $request->get('categoryId');
        DB::table('highlights')->where('post_id', $postId
        )->update([
            'order' => $order
        ]);
        // Xử lý lưu lại id bài viết vào danh mục highlight được set trên cache (redis)
        CategoryRedis::setListPostsHighlightByCategory($categoryId);
        // End xử lý lưu cache (redis)
        return json_encode(array('error' => 0, 'message' => 'Thao tác thành công'));
    }

    /**
     * Cache all posts to redis
     */
    public function cacheAllPostsToRedis()
    {
        $listCategories = array(CommonEnum::CATEGORY_ID_SOTAYBENHHOC, CommonEnum::CATEGORY_ID_CAUCHUYENBENHNHAN, CommonEnum::CATEGORY_ID_DEBANLUONKHOE, CommonEnum::CATEGORY_ID_HOIDAPCHUYENGIA, CommonEnum::CATEGORY_ID_TINTUCNOIBO, CommonEnum::CATEGORY_ID_UUDAI);
        CategoryBusiness::setListPostsByAllCategory($listCategories);
        PostsBusiness::setPostBasicDetail($listCategories);
        PostsBusiness::setPostFullDetail($listCategories);
        echo 'Done cache all posts (basic & full) to redis.';
    }

    /**
     * Index all posts to elasticsearch
     */
    public function InsertAllPostElastic() {
        $client = ElasticsearchServer::getConnection();
        $sql = "SELECT `posts`.`id`, `posts`.`title`, `posts`.`excerpt`, `posts`.`slug`, `posts`.`share_url`, `posts`.`thumbnail_url`, `posts`.`published_at`, `posts`.`content`, `posts`.`category_id`, `posts`.`disease_id`, GROUP_CONCAT(`tags`.`name`) as tag_name
			FROM `posts`
			LEFT JOIN `post_has_tags` on `post_has_tags`.`post_id` = `posts`.`id`
			LEFT JOIN `tags` on `post_has_tags`.`tag_id` = `tags`.`id`
			GROUP BY `posts`.`id`
			ORDER BY `posts`.`id` DESC
		";
        $result = DB::select($sql);
        if(count($result) > 0) {
            try {
                $client->indices()->delete(['index' => ElasticsearchEnum::GET_POSTS_INDEX]);
            } catch (\Exception $exception) {
                Log::warning($exception->getMessage());
            }
            foreach ($result as $post) {
                $data['index'] = ElasticsearchEnum::GET_POSTS_INDEX;
                $data['type'] = ElasticsearchEnum::POSTS_TYPE;
                $data['id'] = ElasticsearchEnum::_PREFIX_POST . $post->id;
                $post = (array)$post;
                $post['published_at'] = (int)$post['published_at'];
                $post['category_id'] = (int)$post['category_id'];
                $post['disease_id'] = (int)$post['disease_id'];
                $data['body'] = (array)$post;
                $client->index($data);
            }
        }
        echo 'Done index all posts to elasticsearch.';
    }

    /**
     * @param $dataPost
     */
    private function InsertPostElastic($dataPost) {
        $data['index'] = ElasticsearchEnum::GET_POSTS_INDEX;
        $data['type'] = ElasticsearchEnum::POSTS_TYPE;
        $data['id'] = $dataPost['id'];
        $data['body'] = [
            'id' => $dataPost['id'],
            'slug' => $dataPost['slug'],
            'title' => $dataPost['title'],
            'excerpt' => $dataPost['excerpt'],
            'share_url' => $dataPost['share_url'],
            'thumbnail_url' => $dataPost['thumbnail_url'],
            'published_at' => (int)$dataPost['published_at'],
            'content' => $dataPost['content'],
            'tag_name' => $dataPost['tag_name'],
            'category_id' => (int)$dataPost['category_id'],
            'disease_id' => (int)$dataPost['disease_id']
        ];
        PostsElasticsearch::postIndex($data['id'], $data['body']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request, $categoryId)
    {
        $categories = Category::all();
        $dataSearch = array(
            'title' => trim($request->get('title')),
            'category_id' => trim($request->get('category_id')),
            'tags' => trim($request->get('tags')),
            'author' => trim($request->get('author'))
        );
        /*
        $posts = PostsElasticsearch::search($dataSearch);
        $posts = GenerateUtility::arrayToObject($posts);
        */
        $posts = Posts::where([
            ['title', 'LIKE', '%' . trim($request->get('title')) . '%'],
            ['author_name', 'LIKE', '%' . trim($request->get('author')) . '%']
        ])->paginate($this->limit);
        return view('admin.posts.index', compact('categoryId', 'categories', 'dataSearch', 'posts'))->with('i', ($request->get('page', 1) - 1) * $this->limit);
    }
}
