@extends('front.layouts.master')
@section('content')
    <!-- Breads -->
    <div class="stm_breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <!-- Breadcrumb NavXT 5.6.0 -->
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to BIMhanoi." href="#" class="home">
                        <span property="name">Trang chu</span>
                    </a>
                    <meta property="position" content="1">
                </span> &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name">Tìm kiếm cho: {!! Request::get('search') !!}</span><meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>
    <div class="container blog_main_layout_list">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="blog_layout_list sidebar_position_right">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-12">
                                <div class="post_list_content_unit">
                                    <h2 class="post_list_item_title">
                                        <a href="{!! route('products.show', $product->slug) !!}" title="Hiển thị đẩy đủ">{!! $product->name !!}</a>
                                    </h2>
                                    <div class="post_list_meta_unit">
                                        <div class="date-d">{!! rebuild_date('d', $product->updated_at->timestamp) !!}</div>
                                        <div class="date-m">{!! rebuild_date('M', $product->updated_at->timestamp) !!}</div>
                                    </div>
                                    <div class="post_list_inner_content_unit post_list_inner_content_unit_left">
                                        <a href="{!! route('products.show', $product->slug) !!}" title="Read more">
                                            <div class="post_list_featured_image">
                                                <img width="770" height="300" src="/{!! $product->image !!}" class="img-responsive wp-post-image" alt="{!! $product->name !!}" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post_list_btn_more" style="margin-top:0;" >
                                            <a href="{!! route('products.show', $product->slug) !!}" class="btn btn-default" title="Đọc tiếp">Đọc tiếp</a>
                                        </div>
                                </div>
                            </div> <!-- col -->
                        @endforeach
                    </div>
                    <ul class='page-numbers'>
                        <li><span class='page-numbers current'>1</span></li>
                        <li><a class='page-numbers' href='page/2/index.html'>2</a></li>
                        <li><a class='page-numbers' href='page/3/index.html'>3</a></li>
                        <li><a class="next page-numbers" href="page/2/index.html"><span class="pagi_label">Tiếp theo</span><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div> <!-- blog_layout -->
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="sidebar-area sidebar-area-right">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_widgetised_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            @include('front.layouts.blog_recent')
                                            @include('front.layouts.search_form')
                                            @include('front.layouts.popular_product')
                                            @include('front.layouts.search_time')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
