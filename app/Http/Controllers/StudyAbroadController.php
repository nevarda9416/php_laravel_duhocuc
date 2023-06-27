<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
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
        return view('destination.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug = 'du-hoc-uc')
    {
        $study_abroad = Page::where('slug', $slug)->first();
        if (empty($study_abroad)) {
            //return redirect('/');
        }
        $lastUri = last(request()->segments());
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_study_description = Widget::select('content')->where('key', 'widget.study.description')->first();
        $widget_study_why_chosen = Widget::select('content')->where('key', 'widget.study.why_chosen')->first();
        $widget_study_request_input = Widget::select('content')->where('key', 'widget.study.request_input')->first();
        $widget_study_middle_banner = Widget::select('content')->where('key', 'widget.study.middle_banner')->first();
        $widget_study_cost = Widget::select('content')->where('key', 'widget.study.cost')->first();
        $widget_study_why_skypacific = Widget::select('content')->where('key', 'widget.study.why_skypacific')->first();
        $widget_study_experience= Widget::select('content')->where('key', 'widget.study.experience')->first();
        $list_posts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('status', Posts::STATUS_PUBLISH)->take(4)->skip(0)->orderBy('id', 'DESC')->get();
        $metaData['meta_title'] = $study_abroad->meta_title ?? '';
        $metaData['meta_keyword'] = $study_abroad->meta_keyword ?? '';
        $metaData['meta_description'] = $study_abroad->meta_description ?? '';
        $metaData['meta_image'] = $study_abroad->thumbnail_url ?? '';
        return view('study_abroad.detail', compact('study_abroad', 'lastUri', 'countries', 'widget_study_description', 'widget_study_why_chosen', 'widget_study_request_input', 'widget_study_middle_banner', 'widget_study_cost', 'widget_study_why_skypacific', 'widget_study_experience', 'list_posts', 'metaData'));
    }
}
