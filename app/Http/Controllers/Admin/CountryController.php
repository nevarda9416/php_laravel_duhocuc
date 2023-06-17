<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use App\Core\Business\UploadFileBusiness;
use App\Core\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public $limit;

    /**
     * CountryController constructor.
     */
    public function __construct()
    {
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $countries = DB::table('countries')->select('id', 'name')->paginate($this->limit);
        return view('admin.country.index', compact('countries'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'thumbnail_url' => 'required'
            ]);
            $name = $request->get('name');
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $country = new Country([
                'name' => $request->get('name'),
                'thumbnail_url' => ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : '',
            ]);
            // Not ok thì redirect với thông báo category đã tồn tại
            if (Country::where('name', '=', $name)->exists()) {
                return redirect('cms/countries')->with('error', 'Quốc gia ' . $name . ' đã tồn tại');
            } else {
                // Ok thì save mới
                $country->save();
                return redirect('cms/countries')->with('message', 'Tạo mới quốc gia ' . $name . ' thành công');
            }
        } catch (\Exception $exception) {
            return redirect('cms/countries')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $action = 'edit';
        $country = Country::find($id);
        $countries = DB::table('countries')->select('id', 'name')->paginate($this->limit);
        return view('admin.country.form', compact('action', 'country', 'countries'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required'
            ]);
            $name = $request->get('name');
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $country = Country::find($id);
            $country->name = $name;
            // Ok thì upload file và save mới
            if ($file) {
                $country->thumbnail_url = ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : '';
                UploadFileBusiness::uploadFileToFolder($file);
            }
            $country->save();
            return redirect('cms/countries')->with('message', 'Sửa quốc gia thành công');
        } catch (\Exception $exception) {
            return redirect('cms/countries')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $country = Country::find($id);
            $name = $country->name;
            $country->delete();
            return redirect('cms/countries')->with('message', 'Xóa quốc gia ' . $name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/countries')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
