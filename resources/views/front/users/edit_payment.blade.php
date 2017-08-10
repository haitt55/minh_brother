@extends('front.layouts.master')
@section('page_title', trans('register.title.edit_payment'))
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
                    <a property="item" typeof="WebPage" title="Go to {!! app_settings('company') !!}." href="/" class="home">
                        <span property="name">{!! app_settings('company') !!}</span>
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

            <form method="post" action="{{ route('user.update_payment') }}">

                {{ csrf_field() }}

                <h3>Địa chỉ thanh toán</h3>

                <p class="form-row form-row-first validate-required" id="payment_first_name_field" data-sort="10">
                    <label for="payment_first_name" class="">Họ <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="payment_first_name" id="payment_first_name" placeholder="" value="{{ old('payment_first_name', $user->payment_first_name) }}" autocomplete="given-name" autofocus="autofocus">
                </p>

                <p class="form-row form-row-last validate-required" id="payment_last_name_field" data-sort="20">
                    <label for="payment_last_name" class="">Tên <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="payment_last_name" id="payment_last_name" placeholder="" value="{{ old('payment_last_name', $user->payment_last_name) }}" autocomplete="family-name">
                </p>

                <p class="form-row form-row-wide" id="payment_company_field" data-sort="30">
                    <label for="payment_company" class="">Tên công ty</label>
                    <input type="text" class="input-text " name="payment_company_name" id="payment_company_name" placeholder="" value="{{ old('payment_company_name', $user->payment_company_name) }}" autocomplete="organization">
                </p>

                <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="payment_country_field" data-sort="40">
                    <label for="payment_country" class="">Quốc gia <abbr class="required" title="bắt buộc">*</abbr></label>
                    <select name="payment_country" id="payment_country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                        <option value="">Chọn quốc gia…</option>
                        <option value="AF">Afghanistan</option>
                        <option value="EG">Ai Cập</option>
                        <option value="AL">Albania</option>
                        <option value="VN" selected="true">Việt Nam</option>
                    </select>
                    <noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Cập nhật quốc gia" /&gt;</noscript>
                </p>

                <p class="form-row form-row-wide address-field validate-required" id="payment_address_field" data-sort="50">
                    <label for="payment_address" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="payment_address" id="payment_address" placeholder="Street address" value="{{ old('payment_address', $user->payment_address) }}" autocomplete="address-line">
                </p>

                <p class="form-row form-row-wide address-field validate-required" id="payment_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required">
                    <label for="payment_city" class="">Tỉnh / Thành phố <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="payment_city" id="payment_city" placeholder="" value="{{ old('payment_city', $user->payment_city) }}" autocomplete="address-level2">
                </p>

                <p class="form-row form-row-wide address-field validate-postcode validate-required" id="payment_post_code_field" data-sort="65" data-o_class="form-row form-row-wide address-field validate-postcode">
                    <label for="payment_post_code" class="">Mã bưu điện </label>
                    <input type="text" class="input-text " name="payment_post_code" id="payment_post_code" placeholder="" value="{{ old('payment_post_code', $user->payment_post_code) }}" autocomplete="postal-code">
                </p>

                <p class="form-row form-row-first validate-required validate-phone" id="payment_phone_number_field" data-sort="100">
                    <label for="payment_phone_number" class="">Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="tel" class="input-text " name="payment_phone_number" id="payment_phone_number" placeholder="" value="{{ old('payment_phone_number', $user->payment_phone_number) }}" autocomplete="tel">
                </p>

                <p class="form-row form-row-last validate-required validate-email" id="payment_email_field" data-sort="110">
                    <label for="payment_email" class="">Địa chỉ email <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="email" class="input-text " name="payment_email" id="payment_email" placeholder="" value="{{ old('payment_email', $user->payment_email ? $user->payment_email : $user->email) }}" autocomplete="email username">
                </p>

                <p>
                    <input type="submit" class="button" value="Lưu địa chỉ">
                </p>

            </form>

        </div>

        <div class="clearfix">
        </div>
    </div>

</div>
@endsection
