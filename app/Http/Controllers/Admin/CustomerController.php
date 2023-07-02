<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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
        $customers = DB::table('customers')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * @return mixed
     */
    public function downloadCustomers()
    {
        $customers = DB::table('customers')->select('fullname', 'email', 'telephone', 'country', 'note')->orderBy('id', 'DESC')->get();
        $customers = json_decode(json_encode($customers), true);
        return Excel::create('customers', function ($excel) use ($customers) {
            $excel->sheet('customers', function ($sheet) use ($customers) {
                $sheet->fromArray($customers);
            });
        })->download('xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subcriber()
    {
        $customers = DB::table('newsletter_subcribers')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.customer.subcriber', compact('customers'));
    }

    /**
     * @return mixed
     */
    public function downloadSubcribers()
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
