<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Category;
use App\Core\Models\Country;
use App\Core\Models\Page;
use App\Core\Models\Posts;
use App\Core\Models\Widget;

class SchoolController extends Controller
{

    public $limit;

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function course()
    {
        $categories = Category::where('category_type', Category::CATEGORY_TYPE_COURSE)->where('parent_id', '!=', 0)->get();
        $widget_course_description = Widget::select('content')->where('key', 'widget.course.description')->first();
        return view('school.course', compact('categories', 'widget_course_description'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::where('category_type', Category::CATEGORY_TYPE_SCHOOL)->where('parent_id', Category::CATEGORY_ID_SCHOOL)->get();
        return view('school.index', compact('categories'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function detail($slug)
    {
        if ($slug === '') {
            return redirect('/');
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug)->where('categories.category_type', Category::CATEGORY_TYPE_SCHOOL)->orWhere('categories.category_type', Category::CATEGORY_TYPE_MAJOR)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $categoryParent = Category::where('slug', $slug)->where('parent_id', '!=', 0)->first();
        $categories = Category::where('parent_id', $categoryParent->id)->where('category_type', Category::CATEGORY_TYPE_SCHOOL)->get();
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('school.detail', compact('slug', 'page', 'categories'));
    }

    /**
     * @param $slug1
     * @param $slug2
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function detail2($slug1, $slug2)
    {
        if ($slug2 === '') {
            return redirect('/');
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug2)->where('categories.category_type', Category::CATEGORY_TYPE_SCHOOL)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('school.detail2', compact('page'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function major()
    {
        $categories = Category::where('category_type', Category::CATEGORY_TYPE_SCHOOL)->where('parent_id', Category::CATEGORY_ID_SCHOOL)->get();
        return view('school.major', compact('categories'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function majorDetail($slug)
    {
        if ($slug === '') {
            return redirect('/');
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug)->where('categories.category_type', Category::CATEGORY_TYPE_SCHOOL)->orWhere('categories.category_type', Category::CATEGORY_TYPE_MAJOR)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $categoryParent = Category::where('slug', $slug)->where('parent_id', '!=', 0)->first();
        $categories = Category::where('parent_id', $categoryParent->id)->where('category_type', Category::CATEGORY_TYPE_MAJOR)->get();
        $country = Country::find($categoryParent->country_id);
        return view('school.major_detail', compact('slug', 'categories', 'country'));
    }

    /**
     * @param $slug1
     * @param $slug2
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function majorDetail2($slug1, $slug2)
    {
        if ($slug2 === '') {
            return redirect('/');
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug2)->where('categories.category_type', Category::CATEGORY_TYPE_MAJOR)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('school.major_detail2', compact('page'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function scholarship()
    {
        $listPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_HOCBONG)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('id', 'DESC')->get();
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner')->first();
        return view('school.scholarship', compact('widget_scholarship_right_banner', 'listPosts', 'otherPosts', 'countries'));
    }
}
