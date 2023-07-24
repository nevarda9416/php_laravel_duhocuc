<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Business\UploadFileBusiness;
use App\Core\Models\Author;
use App\Core\Models\Country;
use App\Core\Models\Media;
use App\Core\Models\Partner;
use App\Core\Models\Posts;
use App\Core\Models\Widget;
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
        $page = Page::join('categories', 'categories.id', '=', 'pages.category_id')->where('pages.slug', '=', $slug)->where('categories.category_type', Category::CATEGORY_TYPE_COURSE)->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $list_posts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('status', Posts::STATUS_PUBLISH)->take(4)->skip(0)->orderBy('id', 'DESC')->get();
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('page.detail', compact('page', 'countries', 'list_posts', 'metaData'));
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
        $leaderFounders = Author::select('name', 'avatar', 'position', 'dictum')->where('team', 'leader')->get();
        $otherFounders = Author::select('name', 'avatar', 'position')->where('team', 'teacher')->orWhere('team', 'staff')->get();
        $partners = Partner::query()->orderBy('id', 'DESC')->get();
        $widget_about_description = Widget::select('content')->where('key', 'widget.about.description')->first();
        $widget_about_why_skypacific = Widget::select('content')->where('key', 'widget.about.why_skypacific')->first();
        $widget_about_picture = Widget::select('content')->where('key', 'widget.about.picture')->first();
        $metaData['meta_title'] = $page->meta_title;
        $metaData['meta_keyword'] = $page->meta_keyword;
        $metaData['meta_description'] = $page->meta_description;
        $metaData['meta_image'] = $page->thumbnail_url;
        return view('page.about', compact('page', 'leaderFounders', 'otherFounders', 'partners', 'widget_about_description', 'widget_about_why_skypacific', 'widget_about_picture', 'metaData'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function seminar()
    {
        $videos = Media::query()->where('media_type', 'video')->take(4)->get();
        $widget_seminar_middle_banner = Widget::select('content', 'link')->where('key', 'widget.seminar.middle_banner')->first();
        $listSeminars = Posts::query()->where('category_id', Posts::CATEGORY_ID_HOITHAO)->where('status', Posts::STATUS_PUBLISH)->take(3)->skip(0)->orderBy('date', 'ASC')->get();
        $listEvents = Posts::query()->where('category_id', Posts::CATEGORY_ID_SUKIEN)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('date', 'ASC')->get();
        return view('page.seminar', compact('videos', 'widget_seminar_middle_banner', 'listSeminars', 'listEvents'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function consultation()
    {
        $listPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_HOCBONG)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('id', 'DESC')->get();
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_consultation_right_banner = Widget::select('content')->where('key', 'widget.consultation.right_banner')->first();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner')->first();
        return view('page.consultation', compact('listPosts', 'otherPosts', 'countries', 'widget_consultation_right_banner', 'widget_scholarship_right_banner'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function partner()
    {
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $partners = Partner::query()->orderBy('id', 'DESC')->get();
        return view('page.partner', compact('countries', 'partners'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recruitment()
    {
        $listPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TUYENDUNG)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('id', 'DESC')->get();
        $widget_recruitment_right_banner = Widget::select('content')->where('key', 'widget.recruitment.right_banner')->first();
        return view('page.recruitment', compact('widget_recruitment_right_banner', 'listPosts'));
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
