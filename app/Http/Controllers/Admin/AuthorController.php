<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Models\Author;
use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Core\Repositories\Mysql\TableMysql;

class AuthorController extends Controller
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
        $authors = DB::table('authors')->select('id', 'name', 'avatar')->paginate($this->limit);
        return view('admin.author.index', compact('action', 'authors'));
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
            /* Start avatar */
            $avatar = $request->avatar;
            if ($avatar) {
                $avatar_name = $avatar->getClientOriginalName();
            }
            /* End avatar url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            // make the data from the form which save to the database
            $author = new Author([
                'name' => $name,
                'slug' => $slug,
                'avatar' => ($avatar) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $avatar_name : null,
                'share_url' => '/ve-chung-toi/' . $slug,
                'content' => $request->get('content'),
                'user_id' => $request->get('user_id')
            ]);

            // check exists of name
            if (Author::where('name', '=', $name)->exists()) {
                return redirect('founder')->with('error', "Tác giả '" . $name . "' đã tồn tại");
            } else {
                // Ok then save
                if ($avatar) {
                    UploadFileBusiness::uploadFileToFolder($avatar);
                }
                TableMysql::resetAutoIncrement('authors'); // id bảng authors không liên quan tới bảng khác
                $author->save();
                return redirect('founder/edit/' . $author->id)->with('message', "Tạo mới tác giả '" . $name . "' thành công");
            }
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi tạo mới tác giả: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $pR
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $author = DB::table('authors')->select('id', 'name', 'avatar', 'share_url', 'content')->where('id', $id)->first();
        $authors = DB::table('authors')->select('id', 'name', 'avatar')->paginate($this->limit);
        return view('author.form', compact('action', 'author', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $pR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $author = Author::find($id);
            // get other data from the form
            $name = $request->get('name');
            /* Start avatar url */
            $avatar = $request->avatar;
            if ($avatar) {
                $avatar_name = $avatar->getClientOriginalName();
            }
            /* End avatar url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $author->name = $name;
            $author->avatar = ($avatar) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $avatar_name : $author->avatar;
            $author->share_url = $request->get('share_url');
            $author->updated_at = date('Y-m-d H:i:s');
            $author->content = $request->get('content');
            $author->user_id = $request->get('user_id');
            // update the data
            if ($avatar) {
                UploadFileBusiness::uploadFileToFolder($avatar);
            }
            $author->save();
            return back()->with('message', "Sửa tác giả '" . $name . "' thành công");
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi cập nhật dữ liệu: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $pR
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $author = Author::find($id);
            $author->delete();
            return redirect('founder')->with('message', 'Xóa tác giả ' . $author->name . ' thành công');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
