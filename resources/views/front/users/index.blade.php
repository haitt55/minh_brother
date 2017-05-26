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
                        <span property="name">BIMhanoi</span></a><meta property="position" content="1">
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
            
            @include('front.layouts.partials.errors_student')
            @if(!session()->has('message'))
                <p class="myaccount_user">
                    Hello <strong>{{ show_username(Auth::user()->email) }}</strong> (not {{ show_username(Auth::user()->email) }}? 
                    <a href="{{ route('user.logout') }}">Sign out</a>).
                    From your account dashboard you can view your recent orders, manage your shipping and billing addresses and 
                    <a href="{{ route('user.edit_info') }}">edit your password and account details</a>.
                </p>
            @endif
            
            <div class="multiseparator"></div>

            <h3>My Addresses</h3>
            <div class="stm_colored_separator">
                <div class="triangled_colored_separator left">
                    <div class="triangle"></div>
                </div>
            </div>

            <p class="myaccount_address">
                Các địa chỉ bên dưới mặc định sẽ được sử dụng ở trang thanh toán sản phẩm.</p>

            <div class="row addresses">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 address">
                        <header class="title">
                            <h3>Địa chỉ thanh toán</h3>
                        </header>
                        <address>
                            <div class="table-responsive">
                                <table class="table table-stripped address-table">
                                    <tbody>
                                        <tr>
                                            <th>First Name</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </address>
                        <footer>
                            <a href="{{ route('user.edit_payment') }}" class="button edit edit-billing-address">Sửa</a>
                        </footer>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 address">
                        <header class="title">
                            <h3>Địa chỉ nhận hàng</h3>
                        </header>
                        <address>
                            <div class="table-responsive">
                                <table class="table table-stripped address-table">
                                    <tbody>
                                        <tr>
                                            <th>First Name</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </address>
                        <footer>
                            <a href="{{ route('user.edit_recieve') }}" class="button edit edit-billing-address">Sửa</a>
                        </footer>
                    </div>

                </div> <!-- row -->
            </div>
        </div>


        <div class="clearfix">
        </div>
    </div>

</div>
@endsection
