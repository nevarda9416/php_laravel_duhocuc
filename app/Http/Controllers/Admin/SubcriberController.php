<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Core\Models\Subcriber;
use Illuminate\Http\Request;
use Exception;

class SubcriberController extends Controller
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
        $action = 'index';
        $subcribers = DB::table('newsletter_subcribers')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.subcriber.index', compact('action','subcribers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $subcriber = Subcriber::find($id);
        $subcribers = DB::table('newsletter_subcribers')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.subcriber.index', compact('action', 'subcriber', 'subcribers'));
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
                'email' => 'required|email|unique:newsletter_subcribers,email,'.$id
            ]);
            $subcriber = Subcriber::find($id);
            // Not ok thì redirect với thông báo email đăng ký không tồn tại
            if (Subcriber::where('id', '=', $id)->exists()) {
                $subcriber->email = $request->get('email');
                $subcriber->status = $request->get('status');
                $subcriber->save();
                return redirect()->back()->with('message', 'Sửa email đăng ký ' . $request->get('email') . ' thành công');
            } else {
                return redirect()->back()->with('error', 'Email đăng ký ' . $subcriber->email . ' không tồn tại');
            }
        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $subcriber = Subcriber::find($id);
            $subcriber->delete();
            return redirect('cms/subcribers')->with('message', 'Xóa email đăng ký ' . $subcriber->email . ' thành công');
        } catch (Exception $exception) {
            return redirect('cms/subcribers')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function download()
    {
        $subcribers = DB::table('newsletter_subcribers')->select('email')->orderBy('id', 'DESC')->get();
        $subcribers = json_decode(json_encode($subcribers), true);
        return Excel::create('subcribers', function ($excel) use ($subcribers) {
            $excel->sheet('subcribers', function ($sheet) use ($subcribers) {
                $sheet->fromArray($subcribers);
            });
        })->download('xlsx');
    }
}
