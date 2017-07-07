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

            <form method="post" action="{{ route('user.update_recieve') }}">

                {{ csrf_field() }}

                <h3>Địa chỉ thanh toán</h3>

                <p class="form-row form-row-first validate-required" id="recieve_first_name_field" data-sort="10">
                    <label for="recieve_first_name" class="">Họ <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="recieve_first_name" id="recieve_first_name" placeholder="" value="{{ old('recieve_first_name', $user->recieve_first_name) }}" autocomplete="given-name" autofocus="autofocus">
                </p>

                <p class="form-row form-row-last validate-required" id="recieve_last_name_field" data-sort="20">
                    <label for="recieve_last_name" class="">Tên <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="recieve_last_name" id="recieve_last_name" placeholder="" value="{{ old('recieve_last_name', $user->recieve_last_name) }}" autocomplete="family-name">
                </p>

                <p class="form-row form-row-wide" id="recieve_company_field" data-sort="30">
                    <label for="recieve_company" class="">Tên công ty</label>
                    <input type="text" class="input-text " name="recieve_company_name" id="recieve_company_name" placeholder="" value="{{ old('recieve_company_name', $user->recieve_company_name) }}" autocomplete="organization">
                </p>

                <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="recieve_country_field" data-sort="40">
                    <label for="recieve_country" class="">Quốc gia <abbr class="required" title="bắt buộc">*</abbr></label>
                    <select name="recieve_country" id="recieve_country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                        <option value="">Chọn quốc gia…</option>
                        <option value="AF">Afghanistan</option>
                        <option value="EG">Ai Cập</option>
                        <option value="AL">Albania</option>
                        <option value="VN" selected="true">Việt Nam</option>
                    </select>
                    <noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Cập nhật quốc gia" /&gt;</noscript>
                </p>

                <p class="form-row form-row-wide address-field validate-required" id="recieve_address_field" data-sort="50">
                    <label for="recieve_address" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="recieve_address" id="recieve_address" placeholder="Street address" value="{{ old('recieve_address', $user->recieve_address) }}" autocomplete="address-line">
                </p>

                <p class="form-row form-row-wide address-field validate-required" id="recieve_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required">
                    <label for="recieve_city" class="">Tỉnh / Thành phố <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="recieve_city" id="recieve_city" placeholder="" value="{{ old('recieve_city', $user->recieve_city) }}" autocomplete="address-level2">
                </p>

                <p class="form-row form-row-wide address-field validate-postcode validate-required" id="recieve_post_code_field" data-sort="65" data-o_class="form-row form-row-wide address-field validate-postcode">
                    <label for="recieve_post_code" class="">Mã bưu điện </label>
                    <input type="text" class="input-text " name="recieve_post_code" id="recieve_post_code" placeholder="" value="{{ old('recieve_post_code', $user->recieve_post_code) }}" autocomplete="postal-code">
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
