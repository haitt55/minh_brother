@extends('front.layouts.master')
@section('page_title', trans('register.title.forget'))
@section('content')
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
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <form method="post" class="lost_reset_password" action="{{ route('forget.sendlink') }}">
                        
                        @include('front.layouts.partials.errors_student')
                        {{ csrf_field() }}
                        
                        <p>Quên mật khẩu? Vui lòng nhập tên đăng nhập hoặc địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.</p>

                        <p class="form-row form-row-first">
                            <label for="user_login">Tên đăng nhập hoặc email</label>
                            <input class="input-text" type="email" name="email" id="email" value="{{ old('email') }}">
                        </p>

                        <div class="clear"></div>

                        <p class="form-row">
                            <input type="submit" class="button" value="Đặt lại mật khẩu">
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