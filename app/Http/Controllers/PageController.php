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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::select('content', 'pages.meta_title',  'pages.meta_keyword',  'pages.meta_description',  'pages.thumbnail_url')
            //->where('pages.language', $language)
            ->join('categories', 'categories.id', '=', 'pages.category_id')
            ->where('pages.slug', '=', $slug)
            ->where('categories.category_type', Category::CATEGORY_TYPE_COURSE)
            ->where('pages.status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $list_posts = Posts::query()->where('language', $language)->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('status', Posts::STATUS_PUBLISH)->take(4)->skip(0)->orderBy('id', 'DESC')->get();
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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'gioi-thieu')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        if (empty($page)) {
            return redirect('/');
        }
        $leaderFounders = Author::select('name', 'avatar', 'position', 'dictum')->where('language', $language)->where('team', 'leader')->get();
        $otherFounders = Author::select('name', 'avatar', 'position')->where('language', $language)->where('team', 'teacher')->orWhere('team', 'staff')->get();
        $partners = Partner::query()->orderBy('id', 'DESC')->get();
        $widget_about_description = Widget::select('content')->where('key', 'widget.about.description' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_about_why_skypacific = Widget::select('content')->where('key', 'widget.about.why_skypacific' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_about_picture = Widget::select('content')->where('key', 'widget.about.picture' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
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
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'hoi-thao')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $videos = Media::query()->where('media_type', 'video')->take(4)->get();
        $widget_seminar_middle_banner = Widget::select('content', 'link')->where('key', 'widget.seminar.middle_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $listSeminars = Posts::query()->where('category_id', Posts::CATEGORY_ID_HOITHAO)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(3)->skip(0)->orderBy('date', 'ASC')->get();
        $listEvents = Posts::query()->where('category_id', Posts::CATEGORY_ID_SUKIEN)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('date', 'ASC')->get();
        return view('page.seminar', compact('metaData', 'videos', 'widget_seminar_middle_banner', 'listSeminars', 'listEvents'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function consultation()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'goc-tu-van')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $listPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_HOCBONG)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('id', 'DESC')->get();
        $otherPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TINTUC)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(7)->skip(0)->orderBy('id', 'DESC')->get();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_consultation_right_banner = Widget::select('content')->where('key', 'widget.consultation.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        $widget_scholarship_right_banner = Widget::select('content')->where('key', 'widget.scholarship.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('page.consultation', compact('metaData', 'listPosts', 'otherPosts', 'countries', 'widget_consultation_right_banner', 'widget_scholarship_right_banner'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function partner()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'doi-tac')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $partners = Partner::query()->orderBy('id', 'DESC')->get();
        return view('page.partner', compact('metaData', 'countries', 'partners'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recruitment()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'tuyen-dung')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $listPosts = Posts::query()->where('category_id', Posts::CATEGORY_ID_TUYENDUNG)->where('language', $language)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('id', 'DESC')->get();
        $widget_recruitment_right_banner = Widget::select('content')->where('key', 'widget.recruitment.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('page.recruitment', compact('metaData', 'widget_recruitment_right_banner', 'listPosts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        if (session()->has('locale')) {
            $language = session()->get('locale');
        } else {
            $language = null;
        }
        $page = Page::where('slug', '=', 'lien-he')->where('language', $language)->where('status', Page::STATUS_PUBLISH)->first();
        $metaData['meta_title'] = $page->meta_title ?? '';
        $metaData['meta_keyword'] = $page->meta_keyword ?? '';
        $metaData['meta_description'] = $page->meta_description ?? '';
        $metaData['meta_image'] = $page->thumbnail_url ?? '';
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        $widget_contact_right_banner = Widget::select('content')->where('key', 'widget.contact.right_banner' . (!is_null($language) && $language !== 'vi' ? '.' . $language : ''))->first();
        return view('page.contact', compact('metaData', 'countries', 'widget_contact_right_banner'));
    }
}
