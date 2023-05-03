<?php

namespace App\Http\Controllers\Auth;

use App\Core\Controllers\Controller;
use App\Core\Models\Customer;
use App\Core\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

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
        return view('auth.passwords.forgot');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetLinkEmail(Request $request)
    {
        $customer = Customer::select('email')->where('email', $request->email)->first();
        if ($customer) {
            $passwordReset = PasswordReset::updateOrCreate([
                'email' => $customer->email
            ], ['token' => Str::random(60)]);
            if ($passwordReset) {
                return redirect('password/reset/' . $passwordReset->token);
            }
        } else {
            return redirect()->back()->with('error',
                'Email không tồn tại trong hệ thống!');
        }
    }
}
