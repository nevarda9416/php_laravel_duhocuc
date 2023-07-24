<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Models\Country;
use Illuminate\Http\Request;
use App\Core\Models\Page;
use App\Core\Models\Category;
use Config;

class PageController extends Controller
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
    public function index()
    {
        $pages = Page::where('type', '!=', 'landing')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $countries = Country::query()->select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.page.create', compact('categories', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'status' => 'required'
            ]);
            $title = $request->get('title');
            $slug = $this->sanitize($title);
            $content = $request->get('content');
            $plain_text = strip_tags($content);
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $page = new Page([
                'title' => $title,
                'excerpt' => $request->get('excerpt'),
                'plain_text' => $plain_text,
                'content' => $content,
                'author_name' => $request->get('author_name'),
                'user_id' => $request->get('user_id'),
                'slug' => $slug,
                'status' => $request->get('status'),
                'category_id' => $request->get('category_id'),
                'country_id' => $request->get('country_id'),
                'thumbnail_url' => ($file) ? '/'. $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : '',
                'latitude' => $request->get('latitude'),
                'longitude' => $request->get('longitude'),
                'type' => 'page',
                'has_template_content' => $request->get('has_template_content'),
                'meta_title' => $request->get('meta_title'),
                'meta_keyword' => $request->get('meta_keyword'),
                'meta_description' => $request->get('meta_description')
            ]);
            // Tạo slug và check trùng slug (name)
            // Not ok thì redirect với thông báo trang tĩnh đã tồn tại
//            if (Page::where('slug', '=', $slug)->exists()) {
//                return redirect('cms/pages')->with('message', 'Trang tĩnh đã tồn tại');
//            } else {
                // Ok thì upload file và save mới
                if ($file) {
                    UploadFileBusiness::uploadFileToFolder($file);
                }
                $page->save();
                return redirect('cms/pages')->with('message', 'Tạo mới trang tĩnh thành công');
//            }
        } catch (\Exception $exception) {
            return redirect('cms/pages')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  $page_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = 'show';
        $page = Page::find($id);
        $category = Category::find($page->category_id);
        $categories = Category::all();
        $countries = Country::query()->select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.page.form', compact('action', 'page', 'category', 'categories', 'countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $page = Page::find($id);
        $category = Category::find($page->category_id);
        $categories = Category::all();
        $categoryPage = Category::where('id', $page->category_id)->pluck('id')->first();
        $countries = Country::query()->select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.page.form', compact('action', 'page', 'category', 'categories', 'categoryPage', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'slug' => 'required',
                'status' => 'required'
            ]);
            $title = $request->get('title');
            $slug = $request->get('slug');
            $content = $request->get('content');
            $plain_text = strip_tags($content);
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }

            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $page = Page::find($id);
            $page->title = $title;
            $page->excerpt = $request->get('excerpt');
            $page->plain_text = $plain_text;
            $page->content = $content;
            $page->author_name = $request->get('author_name');
            $page->user_id = $request->get('user_id');
            $page->slug = $slug;
            $page->status = $request->get('status');
            $page->category_id = $request->get('category_id');
            $page->country_id = $request->get('country_id');
            $page->latitude = $request->get('latitude');
            $page->longitude = $request->get('longitude');
            $page->type = 'page';
            $page->has_template_content = $request->get('has_template_content');
            $page->meta_title = $request->get('meta_title');
            $page->meta_keyword = $request->get('meta_keyword');
            $page->meta_description = $request->get('meta_description');
            // Ok thì upload file và save mới
            if ($file) {
                $page->thumbnail_url = ($file) ? '/'. $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : ''; // Chức năng edit lại ảnh đại diện cần xem lại cơ chế thay đổi
                UploadFileBusiness::uploadFileToFolder($file);
            }
            $page->save();
            return redirect('cms/pages')->with('message', 'Sửa trang tĩnh thành công');
        } catch (\Exception $exception) {
            return redirect('cms/pages')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $page = Page::find($id);
            $page->delete();
            return redirect('cms/pages')->with('message', 'Xóa bài viết ' . $page->title . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/pages')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    public function templateStudyAbroad()
    {
        return view('admin.page.template.study_abroad');
    }
}
