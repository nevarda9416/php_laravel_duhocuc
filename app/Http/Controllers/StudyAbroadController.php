<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Category;
use App\Core\Models\Country;
use App\Core\Models\Page;
use App\Core\Models\Posts;
use App\Core\Models\Widget;

class StudyAbroadController extends Controller
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
        $categories = Category::query()->where('language', $language)->where('parent_id', Category::CATEGORY_ID_STUDYABROAD)->where('is_actived', 1)->get();
        return view('study_abroad.index', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug = 'du-hoc-uc')
    {
        if ($slug === '') {
            return redirect('/');
        }
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::select('title', 'content', 'has_template_content', 'pages.meta_title',  'pages.meta_keyword',  'pages.meta_description',  'pages.thumbnail_url')
            ->where('pages.language', $language)
            ->join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_study_description = Widget::select('content')->where('key', 'widget.study.description' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_study_why_chosen = Widget::select('content')->where('key', 'widget.study.why_chosen' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_study_request_input = Widget::select('content')->where('key', 'widget.study.request_input' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_study_middle_banner = Widget::select('content')->where('key', 'widget.study.middle_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_study_cost = Widget::select('content')->where('key', 'widget.study.cost' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_study_why_skypacific = Widget::select('content')->where('key', 'widget.study.why_skypacific' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_study_experience= Widget::select('content')->where('key', 'widget.study.experience' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $list_posts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('country', $page->country_id)->where('status', Posts::STATUS_PUBLISH)->take(4)->skip(0)->orderBy('id', 'DESC')->get();
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        return view('study_abroad.detail', compact('page', 'countries', 'widget_study_description', 'widget_study_why_chosen', 'widget_study_request_input', 'widget_study_middle_banner', 'widget_study_cost', 'widget_study_why_skypacific', 'widget_study_experience', 'widget_scholarship_right_banner', 'list_posts', 'otherPosts', 'metaData'));
    }
}
