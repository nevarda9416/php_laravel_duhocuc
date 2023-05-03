@extends('layouts.default')
@section('content')
<style>
    .register-wrapper{background: url(https://gody.vn/public/v3/images/bg/br-register.jpg) no-repeat;background-size: cover;min-height: 660px; background-position: center}
    .register-wrapper .register-form{width: 360px;margin: 0 auto;padding: 20px 20px;background: rgba(255,255,255,0.7);}
    .register-wrapper .register-form .name{margin-top: 0;}
    .register-wrapper .register-form .form-control{ border-radius: 0; -moz-border-radius: 0; -webkit-border-radius: 0; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none; height: 35px;}
    .register-wrapper .register-form input[type="checkbox"]{position: relative; box-shadow: none; width: 15px;}
    .error{color: #EF0E0E; display: block}
</style>
@include('components.alert')
<div id="app-root" class="register-wrapper ff-sans">
    <div class="container ps-relative">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6"></div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 70px 0px;">
                <div class="register-form"><h1 class="name">Đăng ký</h1> <!---->
                    <form method="post" action="{{ url('dang-ky') }}" id="signup-form" name="signup-form" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-group ps-relative"><label for="fullname">Họ tên <span class="text-danger">*</span></label> <span class=""></span> <input type="text" id="fullname" name="fullname" class="form-control"></div>
                        <div class="form-group ps-relative"><label for="email">Email <span class="text-danger">*</span></label> <span class=""></span> <input type="text" id="email" name="email" class="form-control"></div>
                        <div class="form-group"><label for="password">Mật khẩu <span class="text-danger">*</span></label> <span class=""></span> <input type="password" id="password" name="password" class="form-control"></div>
                        <div class="form-group"><label for="re_password" class="">Nhập lại mật khẩu <span class="text-danger">*</span></label> <span class=""></span> <input type="password" id="re_password" name="re_password" class="form-control"></div>
                        <span class=" mb-12 fs-16 fw-bold"></span> <input type="hidden" id="g-recaptcha-response" name="captcha"
                                                                                    value="03AL8dmw_oiy8jgTgmgWmF1llQwy_GG5m2uLtmlsTcBrVZhM2hQxJVzeh4EiUNkvOpPbHgIrq9Tdi0Lw63KsTsX3JUkNm9wjxU65NjdYaMJJVbqMvRiwXnGWcpRHzs-FURftKxTlf8MbuVy3Uswq4GITDvIxX1xvxeGIht7ir71IdmNGaei9QrbakegZFzGuk1aVTA5zg2aAtDwZuaJt12BLgU_DUhIZP_wLnsFFKxHGuM-r8D2BAq5PENLOlWz5cBi9oaeV3iayOPE4gvEGHUOswBL-RaKM_fT6s8gNrJ8CQ_P3XYeQNeh8sSz_n9oF3ugfNjT3Pa7tU3brF6MH_v08aCnA8ZVUXO7OmagVs7RT5e_G9Pu5LK3PqsVTwzbpFMra3jzLiNnCWzT98SvX8gfvBU8KzpAEixUiC7T0Ug4b0fjQWO1RR2UoCve_0qnqrYIrSISv5-YCUWMVDMF3Y7rAcWdNFN7EKXZKBx2BcY7PMmdnPre7r26jzqPPcArFvAvT0I4yr_mYPNA4wAkwpBClust5BfqcInEQ">
                        <button type="button" id="sign-up-submit" class="btn btn-default">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
@endsection
