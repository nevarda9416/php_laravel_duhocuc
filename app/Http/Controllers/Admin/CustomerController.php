<?php

namespace App\Http\Controllers\Admin;

use App\Core\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subcriber()
    {
        $customers = DB::table('newsletter_subcribers')->orderBy('id', 'DESC')->paginate($this->limit);
        return view('admin.customer.subcriber', compact('customers'));
    }
}
