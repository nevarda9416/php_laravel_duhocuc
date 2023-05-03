<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Models\Widget;
use App\Core\Repositories\Mysql\TableMysql;
use App\Core\Repositories\Redis\WidgetRedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class WidgetController extends Controller
{
    /**
     * WidgetController constructor.
     */
    public function __construct()
    {
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    public function getPosition($page, $position, $id = '')
    {
        if ($page == 'activity_detail') $page = 'activity.detail';
        $widget = Widget::select('content')->where('key', 'widget.' . $page . '.' . $position . ($id !== '' ? '.' . $id : ''))->first();
        return view('admin.widgets.' . $page . '.' . $position . ($id !== '' ? '.' . $id : ''), compact('page', 'position', 'widget'));
    }

    public function postPosition(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            $arrInput = $request->all();
            $position = $arrInput['position'];
            $arrWidget = array(
                'name' => $arrInput['page'],
                'position' => $arrInput['position'],
                'key' => $arrInput['key'],
                'user_id' => $arrInput['user_id'],
                'type' => $arrInput['type'],
                'content' => $arrInput[$position],
                'updated_at' => date('Y-m-d H:i:s')
            );//echo '<pre/>';print_r($arrWidget);die();
            //TableMysql::resetAutoIncrement('widgets'); // id bảng settings không liên quan tới bảng khác
            $widget = Widget::where('key', $arrInput['key']);
            if ($widget->exists()) { // TH setting có tồn tại ==> Update setting
                $widget->update($arrWidget);
            } else { // TH setting không tồn tại ==> Tạo mới setting
                $arrWidget['created_at'] = date('Y-m-d H:i:s'); // Bắt buộc phải có nếu không created_at sẽ NULL
                $widget->insert($arrWidget);
            }
            return redirect()->back()->with('message', 'Cập nhật widget ' . $arrInput['page'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $year
     * @param $landingpage
     * @param $position
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function position($year = 2020, $landingpage = 'lenka', $position = 'info')
    {
        $template = Template::select('id')->where('key', 'landingpage_' . $landingpage . '_' . $year)->first();
        $widget = Widget::select('content')->where('key', 'landingpage.' . $year . '.' . $landingpage . '.' . $position)->first();
        $setting = Setting::select('value')->where('key', 'landingpage.' . $year . '.' . $landingpage . '.' . $position)->first();
        $allow_get_dynamic_content = WidgetRedis::getKey('landingpage.' . $year . '.' . $landingpage . '.setting');
        return view('admin.widgets.' . 'landingpage.' . $year . '.' . $landingpage . '.' . $position, compact('year', 'landingpage', 'position', 'template', 'widget', 'setting', 'allow_get_dynamic_content'));
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
                    'allow_get_dynamic_content' => $allow_get_dynamic_content
                ));
                $arrSetting['updated_at'] = date('Y-m-d H:i:s');
                $setting->update($arrSetting);
            } else { // TH setting không tồn tại ==> Tạo mới setting
                $arrSetting['value'] = json_encode(array(
                    'allow_get_dynamic_content' => $allow_get_dynamic_content
                ));
                $arrSetting['created_at'] = date('Y-m-d H:i:s');
                $arrSetting['updated_at'] = date('Y-m-d H:i:s');
                $setting->insert($arrSetting);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['key'], $arrSetting['value']);
            return redirect()->back()->with('message', 'Cập nhật setting ' . $arrInput['key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeInfoSEO(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            $arrInput = $request->all();
            $arrSetting = array(
                'key' => $arrInput['key'],
                'user_id' => $arrInput['user_id']
            );
            if ($request->meta_image) {
                $meta_image = UploadFileBusiness::compress_no_resize($request->meta_image, 'uploads/tmp/' . $request->meta_image->getClientOriginalName());
            }
            TableMysql::resetAutoIncrement('settings'); // id bảng settings không liên quan tới bảng khác
            $setting = Setting::where('key', $arrInput['key']);
            if ($setting->exists()) { // TH setting có tồn tại ==> Update setting
                $arrSetting['value'] = json_encode(array(
                    'company_name' => $arrInput['company_name'],
                    'address_contact' => $arrInput['address_contact'],
                    'hotline_contact' => $arrInput['hotline_contact'],
                    'meta_title' => $arrInput['meta_title'],
                    'meta_keyword' => $arrInput['meta_keyword'],
                    'meta_description' => $arrInput['meta_description'],
                    'meta_image' => ($request->meta_image) ? $meta_image : json_decode($setting->first()->value, true)['meta_image']
                ));
                $arrSetting['updated_at'] = date('Y-m-d H:i:s');
                $setting->update($arrSetting);
            } else { // TH setting không tồn tại ==> Tạo mới setting
                $arrSetting['value'] = json_encode(array(
                    'company_name' => $arrInput['company_name'],
                    'address_contact' => $arrInput['address_contact'],
                    'hotline_contact' => $arrInput['hotline_contact'],
                    'meta_title' => $arrInput['meta_title'],
                    'meta_keyword' => $arrInput['meta_keyword'],
                    'meta_description' => $arrInput['meta_description'],
                    'meta_image' => ($request->meta_image) ? $meta_image : ''
                ));
                $arrSetting['created_at'] = date('Y-m-d H:i:s');
                $arrSetting['updated_at'] = date('Y-m-d H:i:s');
                $setting->insert($arrSetting);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['key'], $arrSetting['value']);
            return redirect()->back()->with('message', 'Cập nhật setting ' . $arrInput['key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateBanner(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            if ($request->banner_image_desktop) {
                $banner_image_desktop = UploadFileBusiness::compress_no_resize($request->banner_image_desktop, 'uploads/tmp/' . $request->banner_image_desktop->getClientOriginalName());
            }
            if ($request->banner_image_mobile) {
                $banner_image_mobile = UploadFileBusiness::compress_no_resize($request->banner_image_mobile, 'uploads/tmp/' . $request->banner_image_mobile->getClientOriginalName());
            }
            $arrInput = $request->all();
            $arrWidget = array(
                'user_id' => $arrInput['user_id'],
                'name' => $arrInput['banner_name'],
                'template_id' => $arrInput['template_id'],
                'description' => $arrInput['banner_name'],
                'position' => $arrInput['position'],
                'key' => $arrInput['banner_key'],
                'type' => $arrInput['type']
            );
            TableMysql::resetAutoIncrement('widgets'); // id bảng widgets không liên quan tới bảng khác
            $widget = Widget::where('key', $arrInput['banner_key']);
            if ($widget->exists()) { // TH widget có tồn tại ==> Update widget
                $arrWidget['content'] = json_encode(array(
                    'banner_name' => $arrInput['banner_name'],
                    'banner_image_desktop' => ($request->banner_image_desktop) ? $banner_image_desktop : json_decode($widget->first()->content, true)['banner_image_desktop'],
                    'banner_image_mobile' => ($request->banner_image_mobile) ? $banner_image_mobile : json_decode($widget->first()->content, true)['banner_image_mobile']
                ));
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->update($arrWidget);
            } else { // TH widget không tồn tại ==> Tạo mới widget
                $arrWidget['content'] = json_encode(array(
                    'banner_name' => $arrInput['banner_name'],
                    'banner_image_desktop' => ($request->banner_image_desktop) ? $banner_image_desktop : '',
                    'banner_image_mobile' => ($request->banner_image_mobile) ? $banner_image_mobile : ''
                ));
                $arrWidget['created_at'] = date('Y-m-d H:i:s');
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->insert($arrWidget);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['banner_key'], $arrWidget['content']);
            return redirect()->back()->with('message', 'Cập nhật widget ' . $arrInput['banner_key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $year
     * @param $landingpage
     * @param $position
     * @param $action
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function action($year, $landingpage, $position, $action, $id = 0)
    {
        if ($action == 'delete')
            return \App::call('App\Http\Controllers\WidgetController@destroy', ['id' => $id]);
        $template = Template::select('id')->where('key', 'landingpage_' . $landingpage . '_' . $year)->first();
        $widget = Widget::select('key', 'content')->where('id', $id)->first();
        // List widgets lấy theo position (giống trong wordpress)
        $widgets = Widget::select('id', 'content')->where([['template_id', $template->id], ['position', $position]])->paginate($this->limit);
        return view('admin.widgets.' . 'landingpage.' . $year . '.' . $landingpage . '.' . $position, compact('year', 'landingpage', 'position', 'action', 'template', 'widget', 'widgets'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $widget = Widget::find($id);
            $widget->delete();
            // Delete redis data
            WidgetRedis::deleteKey($widget->key);
            return redirect()->back()->with('message', 'Xóa widget ' . $widget->name . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateCertificate(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            if ($request->product_image) {
                $product_image = UploadFileBusiness::no_compress($request->product_image);
            }
            $arrInput = $request->all();
            $arrWidget = array(
                'user_id' => $arrInput['user_id'],
                'name' => $arrInput['certificate_title'],
                'template_id' => $arrInput['template_id'],
                'description' => $arrInput['certificate_title'],
                'position' => $arrInput['position'],
                'key' => $arrInput['key'],
                'type' => $arrInput['type']
            );
            TableMysql::resetAutoIncrement('widgets'); // id bảng widgets không liên quan tới bảng khác
            $widget = Widget::where('key', $arrInput['key']);
            if ($widget->exists()) { // TH widget có tồn tại ==> Update widget
                $arrWidget['content'] = json_encode(array(
                    'certificate_title' => $arrInput['certificate_title'],
                    'certificate_content' => $arrInput['certificate_content'],
                    'product_image' => ($request->product_image) ? $product_image : json_decode($widget->first()->content, true)['product_image'],
                    'product_price' => $arrInput['product_price'],
                    'product_capacity' => $arrInput['product_capacity']
                ));
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->update($arrWidget);
            } else { // TH widget không tồn tại ==> Tạo mới widget
                $arrWidget['content'] = json_encode(array(
                    'certificate_title' => $arrInput['certificate_title'],
                    'certificate_content' => $arrInput['certificate_content'],
                    'product_image' => ($request->product_image) ? $product_image : '',
                    'product_price' => $arrInput['product_price'],
                    'product_capacity' => $arrInput['product_capacity']
                ));
                $arrWidget['created_at'] = date('Y-m-d H:i:s');
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->insert($arrWidget);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['key'], $arrWidget['content']);
            return redirect()->back()->with('message', 'Cập nhật widget ' . $arrInput['key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSpecialist(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            if ($request->specialist_avatar_desktop) {
                $specialist_avatar_desktop = UploadFileBusiness::no_compress($request->specialist_avatar_desktop);
            }
            if ($request->specialist_avatar_mobile) {
                $specialist_avatar_mobile = UploadFileBusiness::no_compress($request->specialist_avatar_mobile);
            }
            $arrInput = $request->all();
            $arrWidget = array(
                'user_id' => $arrInput['user_id'],
                'name' => $arrInput['specialist_name'],
                'template_id' => $arrInput['template_id'],
                'description' => $arrInput['specialist_name'],
                'position' => $arrInput['position'],
                'key' => $arrInput['key'],
                'type' => $arrInput['type']
            );
            TableMysql::resetAutoIncrement('widgets'); // id bảng widgets không liên quan tới bảng khác
            $widget = Widget::where('key', $arrInput['key']);
            if ($widget->exists()) { // TH widget có tồn tại ==> Update widget
                $arrWidget['content'] = json_encode(array(
                    'specialist_name' => $arrInput['specialist_name'],
                    'specialist_career' => $arrInput['specialist_career'],
                    //'specialist_advice' => $arrInput['specialist_advice'],
                    'specialist_avatar_desktop' => ($request->specialist_avatar_desktop) ? $specialist_avatar_desktop : json_decode($widget->first()->content, true)['specialist_avatar_desktop'],
                    'specialist_avatar_mobile' => ($request->specialist_avatar_mobile) ? $specialist_avatar_mobile : json_decode($widget->first()->content, true)['specialist_avatar_mobile']
                ));
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->update($arrWidget);
            } else { // TH widget không tồn tại ==> Tạo mới widget
                $arrWidget['content'] = json_encode(array(
                    'specialist_name' => $arrInput['specialist_name'],
                    'specialist_career' => $arrInput['specialist_career'],
                    //'specialist_advice' => $arrInput['specialist_advice'],
                    'specialist_avatar_desktop' => ($request->specialist_avatar_desktop) ? $specialist_avatar_desktop : '',
                    'specialist_avatar_mobile' => ($request->specialist_avatar_mobile) ? $specialist_avatar_mobile : ''
                ));
                $arrWidget['created_at'] = date('Y-m-d H:i:s');
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->insert($arrWidget);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['key'], $arrWidget['content']);
            return redirect()->back()->with('message', 'Cập nhật widget ' . $arrInput['key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateFunction(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            if ($request->function_video) {
                $function_video = UploadFileBusiness::no_compress($request->function_video);
            }
            $arrInput = $request->all();
            $arrWidget = array(
                'user_id' => $arrInput['user_id'],
                'name' => 'Công dụng',
                'template_id' => $arrInput['template_id'],
                'description' => 'Công dụng',
                'position' => $arrInput['position'],
                'key' => $arrInput['key'],
                'type' => $arrInput['type']
            );
            TableMysql::resetAutoIncrement('widgets'); // id bảng widgets không liên quan tới bảng khác
            $widget = Widget::where('key', $arrInput['key']);
            if ($widget->exists()) { // TH widget có tồn tại ==> Update widget
                $arrWidget['content'] = json_encode(array(
                    'function_content' => $arrInput['function_content'],
                    'function_video' => ($request->function_video) ? $function_video : json_decode($widget->first()->content, true)['function_video'],
                    'function_link' => $arrInput['function_link'],
                    'function_width' => $arrInput['function_width'],
                    'function_height' => $arrInput['function_height']
                ));
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->update($arrWidget);
            } else { // TH widget không tồn tại ==> Tạo mới widget
                $arrWidget['content'] = json_encode(array(
                    'function_content' => $arrInput['function_content'],
                    'function_video' => ($request->function_video) ? $function_video : '',
                    'function_link' => $arrInput['function_link'],
                    'function_width' => $arrInput['function_width'],
                    'function_height' => $arrInput['function_height']
                ));
                $arrWidget['created_at'] = date('Y-m-d H:i:s');
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->insert($arrWidget);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['key'], $arrWidget['content']);
            return redirect()->back()->with('message', 'Cập nhật widget ' . $arrInput['key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateInstruction(Request $request)
    {
        try {
            // Tạm thời bỏ qua validate input đầu server (do đã validate đầu form html), rút ngắn quá trình code
            if ($request->instruction_image) {
                $instruction_image = UploadFileBusiness::compress_no_resize($request->instruction_image, 'uploads/tmp/' . $request->instruction_image->getClientOriginalName());
            }
            if ($request->instruction_video) {
                $instruction_video = UploadFileBusiness::no_compress($request->instruction_video);
            }
            $arrInput = $request->all();
            $arrWidget = array(
                'user_id' => $arrInput['user_id'],
                'name' => $arrInput['instruction_title'],
                'template_id' => $arrInput['template_id'],
                'description' => $arrInput['instruction_title'],
                'position' => $arrInput['position'],
                'key' => $arrInput['instruction_key'],
                'type' => $arrInput['type']
            );
            TableMysql::resetAutoIncrement('widgets'); // id bảng widgets không liên quan tới bảng khác
            $widget = Widget::where('key', $arrInput['instruction_key']);
            if ($widget->exists()) { // TH widget có tồn tại ==> Update widget
                $arrWidget['content'] = json_encode(array(
                    'instruction_title' => $arrInput['instruction_title'],
                    'instruction_subtitle' => $arrInput['instruction_subtitle'],
                    'instruction_content' => $arrInput['instruction_content'],
                    'instruction_image' => ($request->instruction_image) ? $instruction_image : json_decode($widget->first()->content, true)['instruction_image'],
                    'instruction_video' => ($request->instruction_video) ? $instruction_video : json_decode($widget->first()->content, true)['instruction_video'],
                    'instruction_link' => $arrInput['instruction_link'],
                    'instruction_width' => $arrInput['instruction_width'],
                    'instruction_height' => $arrInput['instruction_height']
                ));
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->update($arrWidget);
            } else { // TH widget không tồn tại ==> Tạo mới widget
                $arrWidget['content'] = json_encode(array(
                    'instruction_title' => $arrInput['instruction_title'],
                    'instruction_subtitle' => $arrInput['instruction_subtitle'],
                    'instruction_content' => $arrInput['instruction_content'],
                    'instruction_image' => ($request->instruction_image) ? $instruction_image : '',
                    'instruction_video' => ($request->instruction_video) ? $instruction_video : '',
                    'instruction_link' => $arrInput['instruction_link'],
                    'instruction_width' => $arrInput['instruction_width'],
                    'instruction_height' => $arrInput['instruction_height']
                ));
                $arrWidget['created_at'] = date('Y-m-d H:i:s');
                $arrWidget['updated_at'] = date('Y-m-d H:i:s');
                $widget->insert($arrWidget);
            }
            // Set redis data
            WidgetRedis::setKey($arrInput['instruction_key'], $arrWidget['content']);
            return redirect()->back()->with('message', 'Cập nhật widget ' . $arrInput['instruction_key'] . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
