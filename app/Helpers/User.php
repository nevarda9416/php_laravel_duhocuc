<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('get_role_user')) {
    function get_role_user()
    {
        $employeeCode = 'n2cms.admin';
        try {
            $myn2cms_user = json_decode($_COOKIE[config()->get('constants.myn2cms_user')]);
            $employeeCode = $myn2cms_user->employeeCode;
        } catch (Exception $exception) {
        }
        $role = DB::table('roles')->join('model_has_roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('model_has_roles.model_id', $employeeCode)
            ->select('name')->first(); // 1 role
        return $role;
    }
}

if (!function_exists('get_user_code')) {
    function get_user_code()
    {
        $employeeCode = 'n2cms.admin';
        try {
            $myn2cms_user = json_decode($_COOKIE[config()->get('constants.myn2cms_user')]);
            $employeeCode = $myn2cms_user->employeeCode;
        } catch (Exception $exception) {
        }
        return $employeeCode;
    }
}

if (!function_exists('get_user_email')) {
    function get_user_email()
    {
        $email = 'n2cms@gmail.com';
        try {
            $myn2cms_user = json_decode($_COOKIE[config()->get('constants.myn2cms_user')]);
            $email = $myn2cms_user->email;
        } catch (Exception $exception) {
        }
        return $email;
    }
}

if (!function_exists('get_user_name')) {
    function get_user_name()
    {
        $name = 'Admin';
        try {
            $myn2cms_user = json_decode($_COOKIE[config()->get('constants.myn2cms_user')]);
            $name = $myn2cms_user->fullName;
        } catch (Exception $exception) {
        }
        return $name;
    }
}

if (!function_exists('get_user_avatar')) {
    function get_user_avatar()
    {
        $avatar = null;
        try {
            $myn2cms_user = json_decode($_COOKIE[config()->get('constants.myn2cms_user')]);
            $avatar = config()->get('constants.API_BACKEND') . '/img/'. $myn2cms_user->imgUrl;
        } catch (Exception $exception) {
        }
        return $avatar;
    }
}
