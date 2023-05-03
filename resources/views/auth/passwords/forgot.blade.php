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
                    <h1 class="name">Quên mật khẩu</h1>
                    <form method="post" action="{{ url('quen-mat-khau') }}" id="signup-form" name="signup-form" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Nhập email đăng ký, website sẽ gửi lại form đặt lại mật khẩu cho bạn!</label>
                            <input type="text" class="form-control" id="email" name="email" value="" autofocus="">
                        </div>
                        <button type="submit" class="btn btn-default">Tạo lại mật khẩu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
