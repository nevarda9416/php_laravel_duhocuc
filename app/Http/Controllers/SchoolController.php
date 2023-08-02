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
    public function index()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'truong-hoc')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $categories = Category::where('category_type', Category::CATEGORY_TYPE_SCHOOL)->where('language', $language)->where('parent_id', Category::CATEGORY_ID_SCHOOL)->get();
        return view('school.index', compact('metaData', 'categories'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function course()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'khoa-hoc-ngon-ngu')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $categories = Category::where('category_type', Category::CATEGORY_TYPE_COURSE)->where('language', $language)->where('parent_id', '!=', 0)->get();
        $widget_course_description = Widget::select('content')->where('key', 'widget.course.description' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('school.course', compact('metaData', 'categories', 'widget_course_description'));
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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug)
            ->where('pages.language', $language)
            ->where(function ($query) {
                $query->where('categories.category_type', Category::CATEGORY_TYPE_SCHOOL)
                    ->orWhere('categories.category_type', Category::CATEGORY_TYPE_MAJOR);
            })->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $categoryParent = Category::where('slug', $slug)->where('language', $language)->where('parent_id', '!=', 0)->first();
        $categories = Category::where('parent_id', $categoryParent->id)->where('language', $language)->where('category_type', Category::CATEGORY_TYPE_SCHOOL)->get();
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('school.detail', compact('slug', 'page', 'categories', 'metaData'));
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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')
            ->where('pages.language', $language)->where('pages.slug', '=', $slug2)->where('categories.category_type', Category::CATEGORY_TYPE_SCHOOL)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('school.detail2', compact('page', 'otherPosts', 'widget_scholarship_right_banner', 'metaData'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function major()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'nganh-hoc')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $categories = Category::where('category_type', Category::CATEGORY_TYPE_MAJOR)->where('language', $language)->where('parent_id', '!=', 0)->get();
        $widget_major_description = Widget::select('content')->where('key', 'widget.major.description' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('school.major', compact('metaData', 'categories', 'widget_major_description'));
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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')
            ->where('pages.language', $language)
            ->where('pages.slug', '=', $slug)->where('categories.category_type', Category::CATEGORY_TYPE_MAJOR)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('school.detail2', compact('page', 'metaData', 'otherPosts', 'widget_scholarship_right_banner'));
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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')
            ->where('pages.language', $language)
            ->where('pages.slug', '=', $slug2)->where('categories.category_type', Category::CATEGORY_TYPE_MAJOR)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('school.major_detail2', compact('page', 'metaData', 'otherPosts', 'widget_scholarship_right_banner'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function scholarship()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'hoc-bong')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $listPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_HOCBONG)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('id', 'DESC')->get();
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('school.scholarship', compact('metaData', 'widget_scholarship_right_banner', 'listPosts', 'otherPosts', 'countries'));
    }
}
