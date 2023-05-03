<?php

namespace App\Http\Controllers;

use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Enums\ImageSizeEnum;
use App\Core\Models\Category;
use App\Core\Models\Comment;
use App\Core\Repositories\Mysql\TableMysql;
use App\Core\Repositories\Redis\CommentRedis;
use App\Helpers\Activity;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public $limit = 50;

    /**
     * DiseaseController constructor.
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
        $comments = Comment::select('id', 'content', 'status')->orderBy('id', 'DESC')->paginate($this->limit);
        $categories = Category::select('id', 'name', 'parent_id')->where('parent_id', 0)->get();
        return view('admin.comment.index', compact('comments', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'author_name' => 'required',
                'content' => 'required'
            ]);
            $author_avatar = $request->author_avatar;
            TableMysql::resetAutoIncrement('comments');
            $data = array(
                'author_name' => $request->get('author_name'),
                'author_address' => $request->get('author_address'),
                'author_avatar' => ($author_avatar) ? '/' . date('Y') . '/' . date('m') . '/' . date('d') . '/' . $author_avatar->getClientOriginalName() : null,
                'content' => $request->get('content'),
                'status' => $request->get('status'),
                'published_at' => strtotime($request->get('published_at')),
                'user_id' => $request->get('user_id')
            );
            $comment = new Comment($data);
            if ($author_avatar) {
                UploadFileBusiness::uploadFileToFolder($author_avatar);
            }
            // Save mysql data
            $comment->save();
            Activity::addLog('Tạo mới comment', 'Tài khoản ' . auth()->user()->email . ' tạo mới comment ID = ' . $comment->id . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            // Get query string
            $queryString = $request->getQueryString();
            if ($queryString != '')
                $queryString = '?' . $queryString;
            return redirect('cms/comment/edit/' . $comment->id . $queryString)->with('message', 'Tạo mới bình luận thành công');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::select('id', 'author_name', 'user_id', 'author_address', 'author_avatar', 'content', 'status', 'published_at')->where('id', $id)->first();
        $comments = Comment::select('id', 'content', 'status')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.comment.form', compact('comment', 'comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'author_name' => 'required',
                'content' => 'required'
            ]);
            $author_avatar = $request->author_avatar;
            $comment = Comment::find($id);
            $comment->author_name = $request->get('author_name');
            $comment->author_address = $request->get('author_address');
            $comment->content = $request->get('content');
            $comment->status = $request->get('status');
            $comment->published_at = strtotime($request->get('published_at'));
            $comment->user_id = $request->get('user_id');
            if ($author_avatar) {
                $path_avatar = UploadFileBusiness::uploadFileToFolder($author_avatar);
                $comment->author_avatar = $path_avatar;
            }
            // Save mysql data
            $comment->save();
            Activity::addLog('Sửa comment', 'Tài khoản ' . auth()->user()->email . ' sửa comment ID = ' . $comment->id . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            return redirect()->back()->with('message', 'Sửa bình luận thành công');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $comment = Comment::find($id);
            Activity::addLog('Xóa comment', 'Tài khoản ' . auth()->user()->email . ' xóa comment ID = ' . $comment->id . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            // Delete mysql data
            $comment->delete(); // Xóa vĩnh viễn
            // Get query string
            $queryString = $request->getQueryString();
            if ($queryString != '')
                $queryString = '?' . $queryString;
            return redirect('cms/comment' . $queryString)->with('message', 'Xóa bình luận ID = ' . $id . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/comment' . $queryString)->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
