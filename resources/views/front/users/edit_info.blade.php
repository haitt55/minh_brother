@extends('front.layouts.master')

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
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to {{ config('custom.company_name') }}." href="/" class="home">
                        <span property="name">{{ config('custom.company_name') }}</span>
                    </a>
                    <meta property="position" content="1">
                </span> &gt; 
                <span property="itemListElement" typeof="ListItem">
                    <span property="name">TÀI KHOẢN</span><meta property="position" content="2"></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="woocommerce">

            @include('front.layouts.partials.errors_student')

            <form action="{{ route('user.update_info') }}" method="post">

                {{ csrf_field() }}

                <p class="form-row form-row-first">
                    <label for="account_first_name">Họ <span class="required">*</span></label>
                    <input type="text" class="input-text" name="first_name" id="account_first_name" value="{{ old('first_name', $user->first_name) }}">
                </p>
                <p class="form-row form-row-last">
                    <label for="account_last_name">Tên <span class="required">*</span></label>
                    <input type="text" class="input-text" name="last_name" id="account_last_name" value="{{ old('last_name', $user->last_name) }}">
                </p>
                <div class="clear"></div>

                <p class="form-row form-row-wide">
                    <label for="account_email">Địa chỉ email <span class="required">*</span></label>
                    <input type="email" class="input-text" name="email" id="account_email" value="{{ old('email', $user->email) }}">
                </p>

                <fieldset>
                    <legend>Thay đổi mật khẩu</legend>

                    <p class="form-row form-row-wide">
                        <label for="password_current">Mật khẩu hiện tại (bỏ trống nếu không thay đổi)</label>
                        <input type="password" class="input-text" name="password_current" id="password_current">
                    </p>
                    <p class="form-row form-row-wide">
                        <label for="password">Mật khẩu mới (bỏ trống nếu không thay đổi)</label>
                        <input type="password" class="input-text" name="password" id="password">
                    </p>
                    <p class="form-row form-row-wide">
                        <label for="password_confirmation">Xác nhận mật khẩu mới</label>
                        <input type="password" class="input-text" name="password_confirmation" id="password_confirmation">
                    </p>
                </fieldset>
                <div class="clear"></div>

                <p>
                    <input type="submit" class="button" value="Lưu thay đổi">
                </p>

            </form>
        </div>

        <div class="clearfix">
        </div>
    </div>

</div>
@endsection
