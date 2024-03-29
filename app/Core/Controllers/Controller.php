<?php

namespace App\Core\Controllers;

use App\Core\Models\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $language = '';
        if (session()->has('locale') && session()->get('locale') === 'en') {
            $language = '_en';
        }
        view()->composer('layouts.partials.nav', function ($view) use ($language) {
            $setting = DB::table('settings')->where('key', '=', 'footer_info' . $language)->first();
            if (!empty((array)$setting))
                $setting = json_decode($setting->value, true);
            else
                $setting = array('telephone_contact' => '', 'email_contact' => '', 'copyright_left' => '', 'copyright_right' => '');
            $view->with(array('setting' => $setting));
        });
        view()->composer('layouts.partials.footer_noscript', function ($view) use ($language) {
            $banner = DB::table('banners')->orderBy('id', 'ASC')->first();
            $setting = DB::table('settings')->where('key', '=', 'footer_info' . $language)->first();
            if (!empty((array)$setting))
                $setting = json_decode($setting->value, true);
            else
                $setting = array('telephone_contact' => '', 'email_contact' => '', 'copyright_left' => '', 'copyright_right' => '');
            $view->with(array('banner' => $banner, 'setting' => $setting));
        });
        view()->composer('layouts.partials.nav', function ($view) {
            $parentMenus = DB::table('menus')->where('is_actived', 1)->where('parent_id', 0)->orderBy('order', 'ASC')->get();
            $childMenus = DB::table('menus')->where('is_actived', 1)->where('parent_id', Menu::MENU_ITEM_DU_HOC_CAC_NUOC)->orderBy('order', 'ASC')->get(); // Du học các nước
            $view->with(array('parentMenus' => $parentMenus, 'childMenus' => $childMenus));
        });
        view()->composer('widgets.banner', function ($view) {
            $banners_desktop = DB::table('banners')->where('device_type', 'desktop')->orderBy('id', 'DESC')->get();
            $banners_mobile = DB::table('banners')->where('device_type', 'mobile')->orderBy('id', 'DESC')->get();
            $view->with(array('banners_desktop' => $banners_desktop, 'banners_mobile' => $banners_mobile));
        });
    }

    function sanitize($name)
    {
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');
        $default = array(
            '/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
            '/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
            '/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
            '/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
            '/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
            '/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
            '/đ|Đ/' => 'd',
            '/ç/' => 'c',
            '/ñ/' => 'n',
            '/ä|æ/' => 'ae',
            '/ö/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/ß/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => ''
        );
        // Some URL was encode, double first
        $name = urldecode($name);
        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map), array_values($map), $name));
    }
}
