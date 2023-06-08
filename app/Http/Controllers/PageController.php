<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Business\UploadFileBusiness;
use Illuminate\Http\Request;
use App\Core\Models\Page;
use App\Core\Models\Category;

class PageController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug = 'gioi-thieu')
    {
        if ($slug === '') {
            return redirect('/');
        }
        $page = Page::where('slug', '=', $slug)->where('status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('page.detail', compact('page', 'metaData'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function about()
    {
        $page = Page::where('slug', '=', 'gioi-thieu')->where('status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('page.about', compact('page', 'metaData'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recruitment()
    {
        /*
        $page = Page::where('slug', '=', 'tuyen-dung')->where('status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        */
        return view('page.recruitment');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function partner()
    {
        return view('page.partner');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function seminar()
    {
        return view('page.seminar');
    }
}
