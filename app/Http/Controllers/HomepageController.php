<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Category;
use App\Core\Models\Country;
use App\Core\Models\Location;
use App\Core\Models\Media;
use App\Core\Models\Partner;
use App\Core\Models\Posts;
use App\Core\Models\Setting;
use App\Core\Models\Widget;

class HomepageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->get('s') != '') {
            $keyword = request()->get('s');
            $listPosts = Posts::query()->where('content', 'LIKE', '%' . $keyword . '%')->where('status', Posts::STATUS_PUBLISH)->take(10)->skip(0)->orderBy('id', 'DESC')->get();
            $widget_recruitment_right_banner = Widget::select('content')->where('key', 'widget.recruitment.right_banner')->first();
            return view('search.index', compact('keyword', 'listPosts', 'widget_recruitment_right_banner'));
        } else {
            $pictures = Media::query()->where('media_type', 'picture')->where('category_id', Category::CATEGORY_ID_HOMEPAGE)->take(15)->get();
            $videos = Media::query()->where('media_type', 'video')->take(4)->get();
            $countries = Country::query()->orderBy('id', 'DESC')->get();
            $partners = Partner::query()->orderBy('id', 'DESC')->get();
            $setting = Setting::where('key', '=', 'footer_info')->first();
            $widget_criteria = Widget::select('content')->where('key', 'widget.homepage.criteria')->first();
            $listEvents = Posts::query()->where('category_id', Posts::CATEGORY_ID_SUKIEN)->where('status', Posts::STATUS_PUBLISH)->take(5)->skip(0)->orderBy('date', 'ASC')->get();
            $metaData['meta_title'] = $setting->meta_title;
            $metaData['meta_keyword'] = $setting->meta_keyword;
            $metaData['meta_description'] = $setting->meta_description;
            $metaData['meta_image'] = $setting->meta_image;
            return view('homepage.index', compact('pictures', 'videos', 'countries', 'partners', 'widget_criteria', 'listEvents', 'metaData'));
        }
    }
}
