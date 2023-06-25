<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\UploadFileBusiness;
use App\Core\Controllers\Controller;
use App\Core\Models\Country;
use Illuminate\Http\Request;
use App\Core\Models\Category;
use App\Core\Connection\RedisServer;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public $limit;

    /**
     * CategoryController constructor.
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
        $categories = Category::all();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('categories', 'countries'));
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
                'name' => 'required',
                'parent_id' => 'required'
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
            // Tạo slug và check trùng slug (name)
            $slug = $this->sanitize($name);
            $category = new Category([
                'name' => $name,
                'slug' => $slug,
                'description' => $request->get('description'),
                'parent_id' => $request->get('parent_id'),
                'category_type' => $request->get('category_type'),
                'country_id' => $request->get('country_id') ? $request->get('country_id') : 0,
                'thumbnail_url' => ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : '',
                'is_actived' => $request->get('is_actived'),
                'meta_title' => $request->get('meta_title'),
                'meta_keyword' => $request->get('meta_keyword'),
                'meta_description' => $request->get('meta_description')
            ]);
            // Not ok thì redirect với thông báo category đã tồn tại
            if (Category::where('slug', '=', $slug)->exists()) {
                return redirect('/cms/categories')->with('error', 'Danh mục ' . $name . ' đã tồn tại');
            } else {
                // Ok thì save mới
                if ($file) {
                    UploadFileBusiness::uploadFileToFolder($file);
                }
                $category->save();
                if ($request->get('parent_id') > 0) { // Có danh mục cha, mới dừng lại ở menu cấp 2
                    $slug_parent = DB::table('categories')->select('slug')->where('id', $category->parent_id)->first();
                    $share_url = '/' . $slug_parent->slug . '/' . $slug;
                } else { // Không có danh mục cha
                    $share_url = '/' . $slug;
                }
                DB::table('categories')->where('id', $category->id)->update([
                    'share_url' => $share_url
                ]);
                return redirect('/cms/categories')->with('message', 'Tạo mới danh mục ' . $name . ' thành công');
            }
        } catch (\Exception $exception) {
            return redirect('/cms/categories')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = 'show';
        $category = Category::find($id);
        $categoryParent = Category::find($category->parent_id);
        $categories = Category::all();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        return view('admin.category.form', compact('action', 'category', 'categoryParent', 'categories', 'countries'));
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
        $category = Category::find($id);
        $categoryParent = Category::find($category->parent_id);
        $categories = Category::all();
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        return view('admin.category.form', compact('action', 'category', 'categoryParent', 'categories', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'parent_id' => 'required'
            ]);
            $category = Category::find($id);
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            if ($file) {
                UploadFileBusiness::uploadFileToFolder($file);
                $category->thumbnail_url = ($file) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : null;
            }
            $name = $request->get('name');
            $slug = $this->sanitize($name);
            $category->name = $name;
            $category->slug = $slug;
            $category->description = $request->get('description');
            $parent_id = $request->get('parent_id');
            $category->parent_id = $parent_id;
            if ($request->get('parent_id') > 0) { // Có danh mục cha, mới dừng lại ở menu cấp 2
                $slug_parent = DB::table('categories')->select('slug')->where('id', $parent_id)->first();
                $share_url = '/' . $slug_parent->slug . '/' . $slug;
            } else { // Không có danh mục cha
                $share_url = '/' . $slug;
            }
            $category->category_type = $request->get('category_type');
            $category->country_id = $request->get('country_id') ? $request->get('country_id') : 0;
            $category->share_url = $share_url;
            $category->is_actived = $request->get('is_actived');
            $category->meta_title = $request->get('meta_title');
            $category->meta_keyword = $request->get('meta_keyword');
            $category->meta_description = $request->get('meta_description');
            $category->save();
            return redirect('/cms/categories/edit/' . $id)->with('message', 'Sửa danh mục ' . $name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('/cms/categories/edit/' . $id)->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
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
            $category = Category::find($id);
            $category->delete();
            return redirect('/cms/categories')->with('message', 'Xóa danh mục ' . $category->name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('/cms/categories')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
