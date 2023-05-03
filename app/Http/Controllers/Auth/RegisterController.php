<?php

namespace App\Http\Controllers\Auth;

use App\Core\Controllers\Controller;
use App\Core\Models\Customer;
use App\Core\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Auth::logout();
        parent::__construct();
        $this->middleware('guest');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        Customer::updateOrCreate(array('email' => $request->get('email')), [
            'fullname' => $request->get('fullname'),
            'email' => $request->get('email'),
            'password' => md5($request->get('password')),
            'telephone' => '',
            'organization' => '',
            'is_blocked' => 0
        ]);
        // Tạo thêm token cho customer
        PasswordReset::updateOrCreate([
            'email' => $request->get('email')
        ], ['token' => Str::random(60)]);
        return redirect()->back()->with('success', 'Đăng ký tài khoản thành công');
    }
}
