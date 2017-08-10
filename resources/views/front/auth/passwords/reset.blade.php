@extends('front.layouts.master')
@section('page_title', trans('register.title.reset'))
@section('content')
<style type="text/css">
    .woocommerce label {
        font-weight: 400;
    }
</style>
<div id="main">	

    <!-- Breads -->
    <div class="stm_breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <!-- Breadcrumb NavXT 5.6.0 -->
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to BIMhanoi." href="/" class="home"><span property="name">BIMhanoi</span></a><meta property="position" content="1"></span>
                &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name">TÀI KHOẢN</span>
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="woocommerce">
            
            @include('front.layouts.partials.errors_student')
            
            <form method="post" class="woocommerce-ResetPassword lost_reset_password" action="{{ route('lostpass.reset') }}">
                {{ csrf_field() }}

                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <p>Nhập mật khẩu mới bên dưới.</p>

                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                    <label for="password">Mật khẩu mới <span class="required">*</span></label>
                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="password">
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                    <label for="password_confirmation">Nhập lại mật khẩu mới <span class="required">*</span></label>
                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_confirmation" id="password_confirmation">
                </p>

                <div class="clear"></div>

                <p class="woocommerce-form-row form-row">
                    <input type="submit" class="woocommerce-Button button" value="Lưu">
                </p>

            </form>
        </div>

        <div class="clearfix">
        </div>
    </div>
</div>
@endsection    