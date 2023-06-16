<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function subcribe(Request $request)
    {
        DB::table('newsletter_subcribers')->updateOrInsert(
            ['email' => $request->get('email'), 'status' => 1],
            ['email' => $request->get('email'), 'status' => 1, 'updated_at' => Carbon::now()]
        );
        return json_encode(['data' => ['message' => 'Đăng ký nhận tin thành công', 'errors' => null]]);
    }
}
