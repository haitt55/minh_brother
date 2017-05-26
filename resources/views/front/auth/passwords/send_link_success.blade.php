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
                    <meta property="position" content="2"></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="woocommerce">
            <div class="woocommerce-message"><i class="fa fa-check"></i><span>Success.</span>Email khôi phục mật khẩu đã được gửi.</div>

            <p>Một thư email khôi phục mật khẩu đã được gửi cho địa chỉ email tài khoản của bạn, nhưng có thể sẽ mất vài phút để hiển thị trong Inbox của hộp thư. Vui lòng đợi ít nhất 10 phút trước khi gửi một yêu cầu khôi phục mật khẩu khác.</p>
        </div>

        <div class="clearfix">
        </div>
    </div>

</div>
@endsection