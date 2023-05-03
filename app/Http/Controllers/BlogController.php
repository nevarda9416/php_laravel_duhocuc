<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Business\CategoryBusiness;
use App\Core\Business\PostsBusiness;
use App\Core\Business\UploadFileBusiness;
use App\Core\Connection\ElasticsearchServer;
use App\Core\Enums\CommonEnum;
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

class BlogController extends Controller
{

    public $limit;

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($slug)
    {
        $blog = DB::table('posts')->select('title', 'excerpt', 'content', 'author_name', 'published_at', 'meta_title', 'meta_keyword', 'meta_description')->where('slug', str_replace('.html', '', $slug))->first();
        if (empty($blog)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $blog->meta_title;
        $metaData['meta_keyword'] = $blog->meta_keyword;
        $metaData['meta_description'] = $blog->meta_description;
        return view('blog.detail', compact('blog', 'metaData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $categories = Category::select('id', 'name', 'parent_id')->where('is_actived', 1)->get();
        return view('posts.create', compact('type', 'categories'));
    }

    function sanitize($name)
    {
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');
        $default = array(
            '/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
            '/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
            '/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
            '/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
            '/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
            '/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
            '/đ|Đ/' => 'd',
            '/ç/' => 'c',
            '/ñ/' => 'n',
            '/ä|æ/' => 'ae',
            '/ö/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/ß/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => ''
        );
        // Some URL was encode, double first
        $name = urldecode($name);
        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map), array_values($map), $name));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function collaborator() {
        return view('blog.collaborator');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function note() {
        return view('blog.note');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postNote(Request $request)
    {
        try {
            $title = $request->get('title');
            $slug = $this->sanitize($title);
            $content = $request->get('content');
            $plain_text = strip_tags($content);
            $type = 'text';
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
            $this->validate($request, [
                'title' => 'required',
                'excerpt' => 'required'
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Posts::where('slug', '=', $slug)->exists()) {
                return redirect()->back()->with('error', 'Bài viết ' . $title . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $post = new Posts([
                    'title' => $title,
                    'slug' => $slug,
                    'excerpt' => $request->get('excerpt') != null ? $request->get('excerpt') : '',
                    'plain_text' => $plain_text,
                    'content' => $content,
                    'author_name' => $request->get('author_name') != null ? $request->get('author_name') : '',
                    'user_id' => $request->get('user_id') != null ? $request->get('user_id') : 0,
                    'status' => 'draft', // Chế độ xem trước là bài nháp
                    'published_at' => $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at')),
                    'post_type' => $type,
                    'category_type' => 'blog',
                    'category_id' => CategoryBusiness::CATEGORY_ID_BLOG_DULICH, // blog du lịch
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null
                ]);
                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                $post->save();
                return redirect()->back()->with('message', 'Tạo mới bài viết ' . $title . ' thành công. Bài viết của bạn sẽ được xét duyệt trước khi xuất bản');
            }
        } catch (\Exception $exception) {
            //print_r($exception->getMessage());die();
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photo() {
        return view('blog.photo');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postPhoto(Request $request)
    {
        try {
            $title = $request->get('title');
            $slug = $this->sanitize($title);
            $content = $request->get('excerpt');
            $plain_text = strip_tags($content);
            $type = 'photo';
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
            $this->validate($request, [
                'title' => 'required',
                'excerpt' => 'required'
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Posts::where('slug', '=', $slug)->exists()) {
                return redirect()->back()->with('error', 'Bài viết ' . $title . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $album = '';
                $albums = $request->album;
                if (!empty($albums)) {
                    foreach ($albums as $album) {
                        $album_name = $album->getClientOriginalName();
                        if ($album) {
                            UploadFileBusiness::uploadFileToFolder($album);
                        }
                        $album .= $album_name . ',';
                    }
                }
                $post = new Posts([
                    'title' => $title,
                    'slug' => $slug,
                    'excerpt' => $request->get('excerpt') != null ? $request->get('excerpt') : '',
                    'plain_text' => $plain_text,
                    'content' => $content,
                    'album' => $album,
                    'author_name' => $request->get('author_name') != null ? $request->get('author_name') : '',
                    'user_id' => $request->get('user_id') != null ? $request->get('user_id') : 0,
                    'status' => 'draft', // Chế độ xem trước là bài nháp
                    'published_at' => $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at')),
                    'post_type' => $type,
                    'category_type' => 'blog',
                    'category_id' => CategoryBusiness::CATEGORY_ID_BLOG_DULICH, // blog du lịch
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null,
                    'has_tags' => $request->get('tags')
                ]);
                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                $post->save();
                return redirect()->back()->with('message', 'Tạo mới bài viết ' . $title . ' thành công. Bài viết của bạn sẽ được xét duyệt trước khi xuất bản');
            }
        } catch (\Exception $exception) {
            //print_r($exception->getMessage());die();
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FEPosts  $posts
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
        return view('posts.form', compact('action', 'post', 'categories', 'categoryPost', 'tagPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FEPosts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->get('title');
        $slug = sanitize($title);
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
            $request->validate([
                'title' => 'required',
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
                $post->meta_title = $request->get('meta_title');
                $post->meta_keyword = $request->get('meta_keyword');
                $post->meta_description = $request->get('meta_description');

                // update share url post
                $category = Category::find($request->get('category_id'));
                if ($category->parent_id == 0) {
                    switch ($request->get('category_id')) {
                        default:
                            $slugParent = 'hoat-dong';
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
                        $slug_tag = sanitize($tag);
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
                    return redirect('/posts/edit/' . $post->id)->with('message', 'Sửa bài viết ' . $title . ' thành công');
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
     * @param  \App\FEPosts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $post = Posts::find($id);
            $post->delete();
            return redirect('/posts')->with('message', 'Xóa bài viết ' . $post->title . ' thành công');
        } catch (\Exception $exception) {
            return redirect('/posts')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
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
        return view('posts.preview', compact('category', 'disease', 'post', 'relatedPost', 'tagPost', 'metaTitle'));
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
        return view('posts.highlight', compact('category_id', 'posts', 'highlightPosts', 'categories'));
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
        return view('posts.index', compact('categoryId', 'categories', 'dataSearch', 'posts'))->with('i', ($request->get('page', 1) - 1) * $this->limit);
    }
}
