<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;

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
        return view('school.course');
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
        return view('school.scholarship');
    }
}
