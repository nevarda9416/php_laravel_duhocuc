<?php

namespace App\Http\Controllers\Admin;
use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Models\Country;
use App\Core\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnersController extends Controller
{
    public $limit;

    /**
     * PartnersController constructor.
     */
    public function __construct()
    {
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $action = 'store';
            $partners = $this->search($request);
            $countries = Country::query()->orderBy('id', 'DESC')->get();
            return view('admin.partner.index', compact('action','partners', 'countries'));
        } catch (\Exception $exception) {
            return redirect('cms/partners')->with('error', 'Lỗi lấy dữ liệu đối tác: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            // get vals of the form items
            $name = $request->get('name');

            // get the relative path of partner image
            $partner_file = $request->file('logo');
            $partner_url_save = isset($partner_file)?$this->upload($partner_file):'';

            // make the data from the form which save to the database
            $partner = new Partner([
                'name' => $name,
                'logo' => $partner_url_save,
                'url' => $request->get('url'),
                'type' => $request->get('type'),
                'country_id' => $request->get('country_id')
            ]);

            // check exists of name
            if (Partner::where('name', '=', $name)->exists()) {
                return redirect('cms/partners')->with('error', "Tên: '" . $name . "' đã tồn tại");
            } else {
                // Ok then save
                $partner->save();
                return redirect('cms/partners')->with('message', "Tạo mới đối tác '" . $name . "' thành công");
            }
        } catch (\Exception $exception) {
            return redirect('cms/partners')->with('error', 'Lỗi tạo mới đối tác: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        try {
            $action = 'edit';
            $partner = Partner::find($id);
            $partner->thumb_url = $partner->thumb_url != ''?$this->get_url_static_image() . $partner->thumb_url:'';
            $partner->logo = $partner->logo != ''?$this->get_url_static_image() . $partner->logo:'';
            $partners = $this->search($request);
            $countries = Country::query()->orderBy('id', 'DESC')->get();
            return view('admin.partner.form', compact('action','partner', 'partners', 'countries'));
        } catch (\Exception $exception) {
            return redirect('cms/partners')->with('error', 'Lỗi edit đối tác: ' . $exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        try {
            $action = 'edit';
            $partner = Partner::find($id);
            // get the relative path of partner image
            $partner_file = $request->file('logo');
            $partner_url_save = isset($partner_file)?$this->upload($partner_file):'';
            // get other data from the form
            $name = $request->get('name');
            $partner->name = $name;
            $partner->logo = ($partner_url_save == ''?$partner->logo:$partner_url_save);
            $partner->url = $request->get('url');
            $partner->type = $request->get('type');
            $partner->country_id = $request->get('country_id');
            // update the data
            $partner->save();
            // reload to view
            $partner->logo = $partner->logo != ''?$this->get_url_static_image() . $partner->logo:'';
            $partners = $this->search($request);
            return view('admin.partner.form', compact('action', 'partner', 'partners'));
        } catch (\Exception $exception) {
            return redirect('cms/partners/edit/' . $id)->with('error', 'Lỗi cập nhật dữ liệu: ' . $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $partner = Partner::find($id);
            $name = $partner->name;
            $partner->delete();
            return redirect('cms/partners')->with('message', 'Xóa đối tác ' . $name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/partners')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $request
     * @return array|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function search($request){
        try {
            // get para search
            $p = trim($request->get('p'));
            if($p == ''){
                $p = trim($request->get('s_name'));
            }
            // search
            if($p != ''){
                $partners = DB::table('partners')
                    ->where('name', 'LIKE', '%' . $p . '%')
                    ->orderBy('created_at', 'desc')
                    ->paginate($this->limit);
            }else{
                $partners = DB::table('partners')
                    ->orderBy('created_at', 'desc')
                    ->paginate($this->limit);
            }
            $path_imgs_url = $this->get_url_static_image();
            // get current url ext
            $url_ext = app('request')->getQueryString();
            if ($url_ext != ''){
                $url_ext = '?' . $url_ext;
            }else{
                $url_ext = ($p != '')?'?p='.$p:'';
            }
            return ['p' => $p, 'data' => $partners, 'url_ext' => $url_ext, 'path_imgs_url' => $path_imgs_url];
        } catch (\Exception $exception) {
            return redirect('cms/partners')->with('error', 'Có lỗi tìm kiếm: ' . $exception->getMessage());
        }
    }

    /**
     * @param $file
     * @return string
     */
    private function upload($file) {
        //Upload File to external server
        $path_file = UploadFileBusiness::uploadFileToFolder($file);
        return $path_file;
    }

    /**
     * @return string
     */
    private function get_url_static_image()
    {
        return config()->get('constants.STATIC_IMAGES');
    }
}
