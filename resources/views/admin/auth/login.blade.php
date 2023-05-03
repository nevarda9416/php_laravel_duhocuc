@extends('layouts.auth')
@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1>Đăng nhập CMS</h1>
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ isset($message) ? $message : '' }}</strong>
                        </span>
                    </div>
                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ isset($message) ? $message : '' }}</strong>
                        </span>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">
                            Đăng nhập
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div>
                            <p>©<?php echo date('Y'); ?> All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
                @include('components.alert')
            </section>
        </div>
    </div>
</div>
@endsection
