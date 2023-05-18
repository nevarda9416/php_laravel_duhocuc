<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Models\Media;
use File;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public $limit;

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
        $medias = Media::paginate($this->limit);
        return view('admin.media.index', compact('medias'))->with('i', ($request->get('page', 1) - 1) * $this->limit);
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
     * @param  \Illuminate\Http\Request $request
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
                'url' => $request->get('url'),
                'quality' => $request->get('quality'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'type' => $request->get('type'),
                'alt' => $request->get('alt'),
                'caption' => $request->get('caption'),
                'description' => $request->get('description'),
                'copyright' => $request->get('copyright'),
                'uploaded_by' => $request->get('uploaded_by'),
                'meta_title' => $request->get('meta_title'),
                'meta_keyword' => $request->get('meta_keyword'),
                'meta_description' => $request->get('meta_description'),
                'user_id' => $request->get('user_id')
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
     * @param  \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $media = Media::find($id);
            $fileMedia = base_path("cms/public/uploads$media->file");
            if (File::exists($fileMedia)) {
                $media = Media::find($id);
                $media->delete();
                File::delete($fileMedia);
            }
            return redirect('cms/media')->with('message', 'Xóa file ' . $media->title . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/media')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
