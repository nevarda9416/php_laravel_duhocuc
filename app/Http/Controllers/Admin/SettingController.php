<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use App\Core\Models\Setting;
use App\Core\Repositories\Mysql\TableMysql;
use App\Helpers\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $setting = Setting::where('key', '=', 'website.config')->first();
        return view('admin.setting.index', compact('setting'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function allowGetDynamicContent(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            $arrInput = $request->all();
            $arrSetting = array(
                'key' => $arrInput['key'],
                'user_id' => $arrInput['user_id']
            );
            $allow_get_dynamic_content = isset($arrInput['allow_get_dynamic_content']) && $arrInput['allow_get_dynamic_content'] !== null ? $arrInput['allow_get_dynamic_content'] : '0';
            TableMysql::resetAutoIncrement('settings'); // id bảng settings không liên quan tới bảng khác
            $setting = Setting::where('key', $arrInput['key']);
            if ($setting->exists()) { // TH setting có tồn tại ==> Update setting
                $arrSetting['value'] = json_encode(array(
                    'allow_get_dynamic_content' => (int)$allow_get_dynamic_content
                ));
                $arrSetting['updated_at'] = date('Y-m-d H:i:s');
                $setting->update($arrSetting);
                Activity::addLog('Sửa setting', 'Tài khoản ' . auth()->user()->email . ' sửa setting ' . $arrInput['key'] . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            } else { // TH setting không tồn tại ==> Tạo mới setting
                $arrSetting['value'] = json_encode(array(
                    'allow_get_dynamic_content' => (int)$allow_get_dynamic_content
                ));
                $arrSetting['created_at'] = date('Y-m-d H:i:s');
                $setting->insert($arrSetting);
                Activity::addLog('Tạo mới setting', 'Tài khoản ' . auth()->user()->email . ' tạo mới setting ' . $arrInput['key'] . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            }
            return redirect()->back()->with('message', 'Cập nhật setting ' . $arrInput['key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $setting = Setting::where('key', '=', 'footer_info')->first();
        if (!empty((array)$setting))
            $contact = json_decode($setting->value, true);
        else
            $contact = array('telephone_contact' => '', 'email_contact' => '', 'address_contact' => '', 'timer_support' => '', 'copyright_left' => '', 'copyright_right' => '');
        $allow_update_html_landingpage = Setting::select('value')->where('key', 'allow_update_html_landingpage')->orderBy('id', 'ASC')->first();
        return view('admin.setting.contact', compact('setting', 'contact', 'allow_update_html_landingpage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContact(Request $request)
    {
        try {
            $key = 'footer_info';
            $setting = Setting::where('key', '=', $key);
            if ($setting->exists()) {
                $contact = json_decode($setting->first()->value);
            } else {
                $contact = new \StdClass();
            }
            $logo_header_company = $request->logo_header_company;
            $logo_company = $request->logo_company;
            $value = array(
                'company_contact' => $request->get('company_contact'),
                'telephone_contact' => $request->get('telephone_contact'),
                'fax_contact' => $request->get('fax_contact'),
                'website_name' => $request->get('website_name'),
                'website_contact' => $request->get('website_contact'),
                'email_contact' => $request->get('email_contact'),
                'address_contact' => $request->get('address_contact'),
                'link_google_map' => $request->get('link_google_map'),
                'timer_support' => $request->get('timer_support'),
                'logo_header_company' => ($logo_header_company) ? '/public/assets/images/logo/' . $logo_header_company->getClientOriginalName() : (isset($contact->logo_header_company) ? $contact->logo_header_company : null),
                'logo_company' => ($logo_company) ? '/public/assets/images/logo/' . $logo_company->getClientOriginalName() : (isset($contact->logo_company) ? $contact->logo_company : null),
                'copyright_left' => $request->get('copyright_left'),
                'copyright_right' => $request->get('copyright_right'),
                'facebook' => $request->get('facebook'),
                'youtube' => $request->get('youtube'),
                'instagram' => $request->get('instagram'),
                'twitter' => $request->get('twitter'),
                'google' => $request->get('google'),
                'tiktok' => $request->get('tiktok'),
                'slogan_register' => $request->get('slogan_register')
            );
            if ($logo_header_company) {
                // Upload file to local server
                $logo_header_company->move('public/assets/images/logo', $logo_header_company->getClientOriginalName());
            }
            if ($logo_company) {
                // Upload file to local server
                $logo_company->move('public/assets/images/logo', $logo_company->getClientOriginalName());
            }
            /* Start thumbnail url */
            $meta_image = $request->meta_image;
            if ($meta_image) {
                // Upload file to local server
                $meta_image->move('public/assets/images', $meta_image->getClientOriginalName());
            }
            /* End thumbnail url */
            // TH setting có tồn tại ==> Update setting
            if ($setting->exists()) {
                $setting->update([
                    'key' => $key,
                    'value' => json_encode($value),
                    'meta_title' => $request->get('meta_title'),
                    'meta_keyword' => $request->get('meta_keyword'),
                    'meta_description' => $request->get('meta_description'),
                    'meta_image' => ($meta_image) ? '/public/assets/images/' . $meta_image->getClientOriginalName() : (isset($setting->first()->meta_image) ? $setting->first()->meta_image : null),
                    'user_id' => $request->get('user_id')
                ]);
                return redirect('cms/contact')->with('message', 'Sửa thông tin liên hệ thành công');
            } else { // TH setting không tồn tại ==> Tạo mới setting
                $setting = new Setting([
                    'key' => $key,
                    'value' => json_encode($value),
                    'meta_title' => $request->get('meta_title'),
                    'meta_keyword' => $request->get('meta_keyword'),
                    'meta_description' => $request->get('meta_description'),
                    'meta_image' => ($meta_image) ? '/public/assets/images/' . $meta_image->getClientOriginalName() : (isset($setting->first()->meta_image) ? $setting->first()->meta_image : null),
                    'user_id' => $request->get('user_id')
                ]);
                $setting->save();
                return redirect('cms/contact')->with('message', 'Tạo mới thông tin liên hệ thành công');
            }
        } catch (\Exception $exception) {
            return redirect('cms/contact')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
