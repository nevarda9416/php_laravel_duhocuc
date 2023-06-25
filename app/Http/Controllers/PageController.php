<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Business\UploadFileBusiness;
use App\Core\Models\Country;
use App\Core\Models\Partner;
use App\Core\Models\Widget;
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
        $partners = Partner::query()->orderBy('id', 'DESC')->get();
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('page.about', compact('page', 'partners', 'metaData'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function seminar()
    {
        $widget_seminar_middle_banner = Widget::select('content')->where('key', 'widget.seminar.middle_banner')->first();
        return view('page.seminar', compact('widget_seminar_middle_banner'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function consultation()
    {
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_consultation_right_banner = Widget::select('content')->where('key', 'widget.consultation.right_banner')->first();
        return view('page.consultation', compact('countries', 'widget_consultation_right_banner'));
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
    public function recruitment()
    {
        $widget_recruitment_right_banner = Widget::select('content')->where('key', 'widget.recruitment.right_banner')->first();
        return view('page.recruitment', compact('widget_recruitment_right_banner'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_contact_right_banner = Widget::select('content')->where('key', 'widget.contact.right_banner')->first();
        return view('page.contact', compact('countries', 'widget_contact_right_banner'));
    }
}
