<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\CategoryBusiness;
use App\Core\Business\PostsBusiness;
use App\Core\Business\UploadFileBusiness;
use App\Core\Connection\ElasticsearchServer;
use App\Core\Controllers\Controller;
use App\Core\Enums\CommonEnum;
use App\Core\Models\Location;
use App\Core\Repositories\Redis\CategoryRedis;
use App\Core\Repositories\Elasticsearch\PostsElasticsearch;
use Illuminate\Http\Request;
use App\Core\Models\Posts;
use App\Core\Models\Category;
use App\Core\Models\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Core\Enums\ElasticsearchEnum;
use App\Helpers\Activity;

class LocationController extends Controller
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
        $locations = Location::orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.location.index', compact('locations'))->with('i', ($request->get('page', 1) - 1) * $this->limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
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
            if (Location::where('name', '=', $name)->exists()) {
                return redirect()->back()->with('error', 'Điểm đến ' . $name . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $location = new Location([
                    'name' => $name,
                    'share_url' => '/'. $this->sanitize($request->get('continent')) . '/' . $this->sanitize($request->get('country')) . '/' . $this->sanitize($request->get('city')),
                    'slug' => $this->sanitize($name),
                    'continent' => $request->get('continent'),
                    'country' => $request->get('country'),
                    'city' => $request->get('city'),
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
                $location->save();
                Activity::addLog('Tạo mới điểm đến', 'Tài khoản ' . auth()->user()->email . ' tạo mới điểm đến ' . $name . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/locations/edit/' . $location->id)->with('message', 'Tạo mới điểm đến ' . $name . ' thành công');
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
        $location = Location::find($id);
        return view('admin.location.form', compact('action', 'location'));
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
            $location = Location::find($id);
            // Not ok thì redirect với thông báo post không tồn tại
            if (Location::where('id', '=', $id)->exists()) {
                $location->name = $name;
                $location->share_url = '/'. $this->sanitize($request->get('continent')) . '/' . $this->sanitize($request->get('country')) . '/' . $this->sanitize($request->get('city'));
                $location->slug = $this->sanitize($name);
                $location->continent = $request->get('continent');
                $location->country = $request->get('country');
                $location->city = $request->get('city');
                $location->content = $request->get('content');
                $location->album = $request->get('album');
                $location->top_search = $request->get('top_search') !== null ? $request->get('top_search') : 0;
                $location->hot_location = $request->get('hot_location') !== null ? $request->get('hot_location') : 0;
                $location->popular_location = $request->get('popular_location') !== null ? $request->get('popular_location') : 0;
                $location->user_id = $request->get('user_id');
                $location->meta_title = $request->get('meta_title');
                $location->meta_keyword = $request->get('meta_keyword');
                $location->meta_description = $request->get('meta_description');
                if ($thumbnail_url) {
                    //Upload File to external serve
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                    $location->thumbnail_url = ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null;
                }
                if ($top_background_url) {
                    //Upload File to external serve
                    UploadFileBusiness::uploadFileToFolder($top_background_url);
                    $location->top_background_url = ($top_background_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $top_background_name : null;
                }
                $location->save();
                Activity::addLog('Sửa điểm đến', 'Tài khoản ' . auth()->user()->email . ' sửa điểm đến ' . $name . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/locations/edit/' . $location->id)->with('message', 'Sửa điểm đến ' . $name . ' thành công');
            } else {
                return redirect()->back()->with('error', 'Điểm đến ' . $location->name . ' không tồn tại');
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
            $location = Location::find($id);
            $location->delete();
            return redirect('cms/locations')->with('message', 'Xóa điểm đến ' . $location->name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/locations')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
