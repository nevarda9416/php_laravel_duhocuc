<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use App\Core\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * MediaController constructor.
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
    public function index(Request $request)
    {
        return view('admin.media.index')->with('i', ($request->get('page', 1) - 1) * $this->limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            $this->validate($request, [
                'title' => 'required',
                'file' => 'required'
            ]);
            /* Start get file name */
            $file = $request->file;
            if ($file) {
                $fileName = $file->getClientOriginalName();
            }
            /* End get file name */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            // make the data from the form which save to the database
            $media = new Media([
                'title' => $request->get('title'),
                'file' => ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $fileName : null,

                'user_id' => $request->get('user_id') // Chưa có field này trong table
            ]);
            // check exists of name
            if (Media::where('file', '=', '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $fileName)->exists()) {
                return redirect('cms/media')->with('error', "Ảnh / video đã tồn tại");
            } else {
                // Ok then save
                if ($file) {
                    UploadFileBusiness::uploadFileToFolder($file);
                }
                $media->save();
                return redirect('cms/media')->with('message', "Thêm mới ảnh / video thành công");
            }
        } catch (\Exception $exception) {
            return back()->with('error', 'Lỗi thêm mới ảnh / video: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
