<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use App\Core\Models\Country;
use App\Core\Models\Customer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        $customers = DB::table('customers')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.customer.index', compact('action', 'customers'));
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
        $customer = Customer::find($id);
        $customers = DB::table('customers')->orderBy('id', 'DESC')->paginate($this->limit);
        $countries = Country::query()->orderBy('id', 'DESC')->get();
        return view('admin.customer.index', compact('action', 'customer', 'customers', 'countries'));
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
                'email' => 'required|email|unique:customers,email,'.$id
            ]);
            $customer = Customer::find($id);
            // Not ok thì redirect với thông báo người dùng đăng ký không tồn tại
            if (Customer::where('id', '=', $id)->exists()) {
                $customer->fullname = $request->get('fullname');
                $customer->email = $request->get('email');
                $customer->telephone = $request->get('telephone');
                $customer->country = $request->get('country');
                $customer->note = $request->get('note');
                $customer->save();
                return redirect()->back()->with('message', 'Sửa người dùng đăng ký ' . $request->get('fullname') . ' thành công');
            } else {
                return redirect()->back()->with('error', 'Người dùng đăng ký ' . $customer->email . ' không tồn tại');
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
            $customer = Customer::find($id);
            $customer->delete();
            return redirect('cms/customers')->with('message', 'Xóa người dùng đăng ký ' . $customer->fullname . ' thành công');
        } catch (Exception $exception) {
            return redirect('cms/customers')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function download()
    {
        $customers = DB::table('customers')->select('fullname', 'email', 'telephone', 'country', 'note')->orderBy('id', 'DESC')->get();
        $customers = json_decode(json_encode($customers), true);
        return Excel::create('customers', function ($excel) use ($customers) {
            $excel->sheet('customers', function ($sheet) use ($customers) {
                $sheet->fromArray($customers);
            });
        })->download('xlsx');
    }
}
