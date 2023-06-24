<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpseclib\Crypt\Hash;

class FormController extends Controller
{
    /**
     * @param Request $request
     * @return false|string
     */
    public function subcribe(Request $request)
    {
        if (!empty($request->get('form_fields'))) {
            $form_fields = $request->get('form_fields');
            DB::table('customers')->updateOrInsert(
                ['email' => $form_fields['email']],
                [
                    'fullname' => $form_fields['fullname'],
                    'email' => $form_fields['email'],
                    'password' => bcrypt($form_fields['telephone']),
                    'telephone' => $form_fields['telephone'],
                    'organization' => '',
                    'is_blocked' => 0,
                    'country' => $form_fields['country'],
                    'note' => $form_fields['note'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            );
            return json_encode(['data' => ['message' => 'Đăng ký tư vấn thành công', 'errors' => null]]);
        } else {
            DB::table('newsletter_subcribers')->updateOrInsert(
                ['email' => $request->get('email'), 'status' => 1],
                ['email' => $request->get('email'), 'status' => 1, 'updated_at' => Carbon::now()]
            );
            return json_encode(['data' => ['message' => 'Đăng ký nhận tin thành công', 'errors' => null]]);
        }
    }
}
