<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Models\Destination;
use App\Core\Models\Location;
use Illuminate\Http\Request;
use App\Helpers\Activity;

class DestinationController extends Controller
{

    public $limit;

    /**
     * PostsController constructor.
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
        $destinations = Destination::orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.destination.index', compact('destinations'))->with('i', ($request->get('page', 1) - 1) * $this->limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::select('id', 'name')->orderBy('id', 'DESC')->get();
        return view('admin.destination.create', compact('locations'));
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
            $name = $request->get('name');
            /* Start thumbnail url */
            $thumbnail_url = $request->thumbnail_url;
            $thumbnail_name = '';
            if ($thumbnail_url) {
                $thumbnail_name = $thumbnail_url->getClientOriginalName();
            }
            $top_background_url = $request->top_background_url;
            $top_background_name = '';
            if ($top_background_url) {
                $top_background_name = $top_background_url->getClientOriginalName();
            }
            /* End thumbnail url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $this->validate($request, [
                'name' => 'required',
                'content' => 'required',
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Destination::where('name', '=', $name)->exists()) {
                return redirect()->back()->with('error', 'Điểm du lịch ' . $name . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $destination = new Destination([
                    'name' => $name,
                    'slug' => $this->sanitize($name),
                    'location_id' => $request->get('location_id'),
                    'content' => $request->get('content'),
                    'album' => $request->get('album'),
                    'top_search' => $request->get('top_search') !== null ? $request->get('top_search') : 0,
                    'hot_location' => $request->get('hot_location') !== null ? $request->get('hot_location') : 0,
                    'popular_location' => $request->get('popular_location') !== null ? $request->get('popular_location') : 0,
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null,
                    'top_background_url' => ($top_background_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $top_background_name : null,
                    'user_id' => auth()->user()->id,
                    'meta_title' => $request->get('meta_title'),
                    'meta_keyword' => $request->get('meta_keyword'),
                    'meta_description' => $request->get('meta_description')
                ]);
                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                if ($top_background_url) {
                    UploadFileBusiness::uploadFileToFolder($top_background_url);
                }
                $destination->save();
                Activity::addLog('Tạo mới điểm du lịch', 'Tài khoản ' . auth()->user()->email . ' tạo mới điểm du lịch ' . $name . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/destinations/edit/' . $destination->id)->with('message', 'Tạo mới điểm du lịch ' . $name . ' thành công');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $locations = Location::select('id', 'name')->orderBy('id', 'DESC')->get();
        $destination = Destination::find($id);
        return view('admin.destination.form', compact('action', 'locations', 'destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $name = $request->get('name');
            /* Start thumbnail url */
            $thumbnail_url = $request->thumbnail_url;
            $thumbnail_name = '';
            if ($thumbnail_url) {
                $thumbnail_name = $thumbnail_url->getClientOriginalName();
            }
            $top_background_url = $request->top_background_url;
            $top_background_name = '';
            if ($top_background_url) {
                $top_background_name = $top_background_url->getClientOriginalName();
            }
            /* End thumbnail url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $this->validate($request, [
                'name' => 'required',
                'content' => 'required'
            ]);
            $destination = Destination::find($id);
            // Not ok thì redirect với thông báo post không tồn tại
            if (Destination::where('id', '=', $id)->exists()) {
                $destination->name = $name;
                $destination->slug = $this->sanitize($name);
                $destination->location_id = $request->get('location_id');
                $destination->content = $request->get('content');
                $destination->album = $request->get('album');
                $destination->top_search = $request->get('top_search') !== null ? $request->get('top_search') : 0;
                $destination->hot_location = $request->get('hot_location') !== null ? $request->get('hot_location') : 0;
                $destination->popular_location = $request->get('popular_location') !== null ? $request->get('popular_location') : 0;
                $destination->user_id = $request->get('user_id');
                $destination->meta_title = $request->get('meta_title');
                $destination->meta_keyword = $request->get('meta_keyword');
                $destination->meta_description = $request->get('meta_description');
                if ($thumbnail_url) {
                    //Upload File to external serve
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                    $destination->thumbnail_url = ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null;
                }
                if ($top_background_url) {
                    //Upload File to external serve
                    UploadFileBusiness::uploadFileToFolder($top_background_url);
                    $destination->top_background_url = ($top_background_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $top_background_name : null;
                }
                $destination->save();
                Activity::addLog('Sửa điểm du lịch', 'Tài khoản ' . auth()->user()->email . ' sửa điểm du lịch ' . $name . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/destinations/edit/' . $destination->id)->with('message', 'Sửa điểm du lịch ' . $name . ' thành công');
            } else {
                return redirect()->back()->with('error', 'Điểm du lịch ' . $destination->name . ' không tồn tại');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $destination = Destination::find($id);
            $destination->delete();
            return redirect('cms/destinations')->with('message', 'Xóa điểm du lịch ' . $destination->name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/destinations')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
