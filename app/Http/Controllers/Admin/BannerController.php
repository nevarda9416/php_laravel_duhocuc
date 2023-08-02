<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Models\Banner;
use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Core\Repositories\Mysql\TableMysql;

class BannerController extends Controller
{
    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action = 'create';
        $banners = DB::table('banners')->select('id', 'name', 'file')->paginate($this->limit);
        return view('admin.banner.index', compact('action', 'banners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // get vals of the form items
            $title = $request->get('title');
            /* Start avatar */
            $file = $request->file;
            if ($file) {
                $filename = $file->getClientOriginalName();
            }
            /* End avatar url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            // make the data from the form which save to the database
            $banner = new Banner([
                'title' => $title,
                'name' => $request->get('name'),
                'file' => ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $filename : null,
                'url' => $request->get('url'),
                'position' => $request->get('position'),
                'page' => $request->get('page'),
                'device_type' => $request->get('device_type'),
                'route' => $request->get('route'),
                'user_id' => $request->get('user_id')
            ]);

            // check exists of name
            if (Banner::where('title', '=', $title)->exists()) {
                return redirect('cms/banners')->with('error', "Banner '" . $title . "' đã tồn tại");
            } else {
                // Ok then save
                if ($file) {
                    UploadFileBusiness::uploadFileToFolder($file);
                }
                $banner->save();
                return redirect('cms/banners/edit/' . $banner->id)->with('message', "Tạo mới banner '" . $title . "' thành công");
            }
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi tạo mới banner: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner $pR
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $banner = DB::table('banners')->select('id', 'title', 'name', 'file', 'url', 'position', 'page', 'device_type', 'route', 'user_id')->where('id', $id)->first();
        $banners = DB::table('banners')->select('id', 'title', 'name')->paginate($this->limit);
        return view('admin.banner.form', compact('action', 'banner', 'banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Banner $pR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $banner = Banner::find($id);
            // get other data from the form
            $title = $request->get('title');
            /* Start avatar url */
            $file = $request->file;
            if ($file) {
                $filename = $file->getClientOriginalName();
            }
            /* End avatar url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $banner->title = $title;
            $banner->name = $request->get('name');
            $banner->file = ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $filename : $banner->file;
            $banner->url = $request->get('url');
            $banner->position = $request->get('position');
            $banner->page = $request->get('page');
            $banner->device_type = $request->get('device_type');
            $banner->route = $request->get('route');
            $banner->user_id = $request->get('user_id');
            // update the data
            if ($file) {
                UploadFileBusiness::uploadFileToFolder($file);
            }
            $banner->save();
            return back()->with('message', "Sửa banner '" . $title . "' thành công");
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi cập nhật dữ liệu: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner $pR
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $banner = Banner::find($id);
            $banner->delete();
            return redirect('cms/banners')->with('message', 'Xóa banner ' . $banner->title . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
