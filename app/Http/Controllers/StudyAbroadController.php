<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Page;

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
    public function detail($slug)
    {
        $study_abroad = Page::where('slug', $slug)->first();
        if (empty($study_abroad)) {
            //return redirect('/');
        }
        $lastUri = last(request()->segments());
        $metaData['meta_title'] = $study_abroad->meta_title ?? '';
        $metaData['meta_keyword'] = $study_abroad->meta_keyword ?? '';
        $metaData['meta_description'] = $study_abroad->meta_description ?? '';
        $metaData['meta_image'] = $study_abroad->thumbnail_url ?? '';
        return view('study_abroad.detail', compact('study_abroad', 'lastUri', 'metaData'));
    }
}
