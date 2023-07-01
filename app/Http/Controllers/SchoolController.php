<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Country;
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
        $widget_course_description = Widget::select('content')->where('key', 'widget.course.description')->first();
        return view('school.course', compact('widget_course_description'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('school.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail()
    {
        return view('school.detail');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function major()
    {
        return view('school.major');
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
