@extends('layouts.default')
@section('content')
<style>
    .register-wrapper{background: url(https://gody.vn/public/v3/images/bg/bg-password-forget.jpg) no-repeat;background-size: cover;min-height: 500px; background-position: center}
    .register-wrapper .register-form{width: 450px;margin: 0 auto;padding: 20px 20px;background: rgba(255,255,255,0.7);}
    .register-wrapper .register-form .name{margin-top: 0;}
    .register-wrapper .register-form .form-control{ border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none; height: 35px;}
    .register-wrapper .register-form input[type="checkbox"]{position: relative; box-shadow: none; width: 15px;}
    .error{color: #EF0E0E; display: block}
</style>
@include('components.alert')
<div class="register-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 70px 0;">
                <div class="register-form">
                    <h1 class="name">Đặt lại mật khẩu</h1>
                    <form method="post" action="{{ url('dat-lai-mat-khau') }}" id="reset-form" name="reset-form" novalidate="novalidate">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ request()->segment(3) }}">
                        <div class="form-group">
                            <div class="form-group"><label for="password">Mật khẩu cũ<span class="text-danger">*</span></label> <span class=""></span> <input type="password" id="old_password" name="old_password" class="form-control"></div>
                            <div class="form-group"><label for="password">Mật khẩu mới<span class="text-danger">*</span></label> <span class=""></span> <input type="password" id="new_password" name="new_password" class="form-control"></div>
                            <div class="form-group"><label for="re_password" class="">Nhập lại mật khẩu mới<span class="text-danger">*</span></label> <span class=""></span> <input type="password" id="renew_password" name="renew_password" class="form-control"></div>
                        </div>
                        <button type="submit" class="btn btn-default">Tạo lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
