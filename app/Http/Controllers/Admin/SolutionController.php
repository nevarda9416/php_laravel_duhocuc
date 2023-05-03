<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Models\Solution;
use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Core\Repositories\Mysql\TableMysql;

class SolutionController extends Controller
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
        $solutions = DB::table('solutions')->select('id', 'name')->paginate($this->limit);
        return view('admin.solution.index', compact('action', 'solutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // get vals of the form items
            $name = $request->get('name');
            $slug = sanitize($name);
            /* Start icon */
            $icon = $request->icon;
            if ($icon) {
                $icon_name = $icon->getClientOriginalName();
            }
            /* End icon url */
            /* Start banner */
            $banner = $request->banner;
            if ($banner) {
                $banner_name = $banner->getClientOriginalName();
            }
            /* End banner url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            // make the data from the form which save to the database
            $solution = new Solution([
                'name' => $name,
                'slug' => $slug,
                'icon' => ($icon) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $icon_name : null,
                'banner' => ($banner) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $banner_name : null,
                'share_url' => '/giai-phap/' . $slug . '.html',
                'excerpt' => $request->get('excerpt'),
                'content' => $request->get('content'),
                'user_id' => $request->get('user_id')
            ]);

            // check exists of name
            if (Solution::where('name', '=', $name)->exists()) {
                return redirect('solution')->with('error', "Tác giả '" . $name . "' đã tồn tại");
            } else {
                // Ok then save
                if ($icon) {
                    UploadFileBusiness::uploadFileToFolder($icon);
                }
                if ($banner) {
                    UploadFileBusiness::uploadFileToFolder($banner);
                }
                TableMysql::resetAutoIncrement('solutions'); // id bảng solutions không liên quan tới bảng khác
                $solution->save();
                return redirect('cms/solution/edit/' . $solution->id)->with('message', "Tạo mới giải pháp '" . $name . "' thành công");
            }
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi tạo mới giải pháp: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $pR
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $solution = DB::table('solutions')->select('id', 'name', 'icon', 'banner', 'share_url', 'excerpt', 'content')->where('id', $id)->first();
        $solutions = DB::table('solutions')->select('id', 'name')->paginate($this->limit);
        return view('admin.solution.form', compact('action', 'solution', 'solutions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solution  $pR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $solution = Solution::find($id);
            // get other data from the form
            $name = $request->get('name');
            $slug = sanitize($name);
            /* Start icon url */
            $icon = $request->icon;
            if ($icon) {
                $icon_name = $icon->getClientOriginalName();
            }
            /* End icon url */
            /* Start banner url */
            $banner = $request->banner;
            if ($banner) {
                $banner_name = $banner->getClientOriginalName();
            }
            /* End banner url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $solution->name = $name;
            $solution->icon = ($icon) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $icon_name : $solution->icon;
            $solution->banner = ($banner) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $banner_name : $solution->banner;
            $solution->share_url = '/giai-phap/' . $slug . '.html';
            $solution->updated_at = date('Y-m-d H:i:s');
            $solution->excerpt = $request->get('excerpt');
            $solution->content = $request->get('content');
            $solution->user_id = $request->get('user_id');
            // update the data
            if ($icon) {
                UploadFileBusiness::uploadFileToFolder($icon);
            }
            if ($banner) {
                UploadFileBusiness::uploadFileToFolder($banner);
            }
            $solution->save();
            return back()->with('message', "Sửa giải pháp '" . $name . "' thành công");
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi cập nhật dữ liệu: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $pR
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $solution = Solution::find($id);
            $solution->delete();
            return redirect('cms/solution')->with('message', 'Xóa giải pháp ' . $solution->name . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
