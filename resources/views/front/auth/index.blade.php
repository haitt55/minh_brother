@extends('front.layouts.master')
@section('content')
<div id="main">	

    <!-- Breads -->
    <div class="stm_breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <!-- Breadcrumb NavXT 5.6.0 -->
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to BIMhanoi." href="/" class="home">
                        <span property="name">BIMhanoi</span>
                    </a>
                    <meta property="position" content="1">
                </span> &gt; 
                <span property="itemListElement" typeof="ListItem">
                    <span property="name">TÀI KHOẢN</span>
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="woocommerce">
            @if (count($errors) > 0)
            <ul class="woocommerce-error">
                <li>
                    <i class="fa fa-times"></i><span>Error.</span> <strong>Error:</strong>
                    {{ $errors->all()[0] }}
                </li>
            </ul>
            @endif
            <div class="row" id="customer_login">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <form method="post" class="login" action="{{ route('user.login') }}">

                        {{ csrf_field() }}

                        <h4>Đăng nhập</h4>
                        <p class="form-row form-row-wide">
                            <input type="email" class="input-text" name="email" id="email" value="" placeholder="Tên tài khoản email *">
                        </p>
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="password" name="password" id="password" placeholder="Mật khẩu *">
                        </p>
                        <p class="form-row form-row-login">
                            <input type="submit" class="button" value="Đăng nhập">
                            <label for="rememberme" class="inline">
                                <input name="rememberme" type="checkbox" id="rememberme" {{ old('remember') ? 'checked' : '' }}> Ghi nhớ mật khẩu
                            </label>
                        </p>
                        <p class="lost_password">
                            <a href="{{ route('forget.index') }}">Quên mật khẩu?</a>
                        </p>
                        <div class="clear"></div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <form method="post" class="register" action="{{ route('user.register') }}">
                        
                        {{ csrf_field() }}
                        
                        <h4>Đăng ký</h4>
                        <p class="form-row form-row-wide">
                            <input type="email" class="input-text" name="email" id="reg_email" value="{{ old('email') }}" placeholder="Địa chỉ email *">
                        </p>
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="password" name="password" id="password" placeholder="Mật khẩu *">
                        </p>
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="password" name="password_confirmation" id="password_confirmation" placeholder="Xác nhận mật khẩu *">
                        </p>
                        <p class="form-row">
                            <input type="submit" class="button" value="Đăng ký">
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix">
        </div>
    </div>

</div>
@endsection