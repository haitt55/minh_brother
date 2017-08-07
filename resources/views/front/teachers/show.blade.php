@extends('front.layouts.master')
@section('content')

<div id="main">
    <div class="stm_single_post">
        <!-- Breads -->
        <div class="stm_breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                    <!-- Breadcrumb NavXT 5.6.0 -->
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to BIMhanoi." href="/" class="home">
                            <span property="name">BIMhanoi</span>
                        </a>
                        <meta property="position" content="1"></span> &gt; 
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to Teachers." href="{{ route('teachers.index') }}" class="post post-teachers-archive">
                            <span property="name">Teachers</span>
                        </a>
                        <meta property="position" content="2">
                    </span> &gt; 
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Giảng viên {{ strtoupper($teacher->full_name) }}</span>
                        <meta property="position" content="3">
                    </span>
                </div>
            </div>
        </div>

        <article id="post-2784" class="post-2784 teachers type-teachers status-publish has-post-thumbnail hentry">
            <div class="container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="stm_icon_box_responsive wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner "><div class="wpb_wrapper">
                                <div class="stm_teacher_single_featured_image">
                                    <div class="display_inline_block">
                                        <img width="800" height="400" src="{{ $teacher->image ? asset($teacher->image) : asset(config('custom.no_image')) }}" class="img-responsive wp-post-image" alt="Giảng viên {{ $teacher->full_name }}">
                                        <div class="stm_teacher_single_socials text-center">
                                            <div class="display_inline_block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6" style="margin-top: -23px">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1459996584994">
                                    <h2 style="color: #000000;text-align: left">GIỚI THIỆU</h2>
                                </div>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1472292791269">
                                    <div class="wpb_wrapper">
                                        <p>{!! $teacher->intro !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1435151391468">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1435151386302">
                            <div class="wpb_wrapper">
                                <div class="vc_separator wpb_content_element vc_sep_width_100 type_1  vc_separator_no_text">
                                    <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#1e478d;" class="vc_sep_line"></span></span>
                                    <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:#1e478d;" class="vc_sep_line"></span></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                @if($teacher->products->toArray())
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading">
                                    <h2 style="color: #000000;text-align: left">Khóa học</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="stm_featured_products_unit featured_products_carousel">
                                    <div class="simple_carousel_with_bullets">
                                        <div class="caroufredsel_wrapper">
                                            <div class="simple_carousel_bullets_init clearfix">

                                                @foreach($products as $product)
                                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                    <div class="stm_featured_product_single_unit heading_font">
                                                        <div class="stm_featured_product_single_unit_centered">
                                                            <div class="stm_featured_product_image">
                                                                <a href="{{ route('products.show', $product->slug) }}" title="{{ $product->name }}">
                                                                    <img width="270" height="283" src="{{ $product->image ? asset($product->image) : asset(config('custom.no_image')) }}" class="img-responsive wp-post-image" alt="BIMhanoi - {{ $product->name }}">
                                                                </a>
                                                            </div>

                                                            <div class="stm_featured_product_body">
                                                                <a href="{{ route('products.show', $product->slug) }}" title="{{ $product->name }}">
                                                                    <div class="title">Khóa học Revit Architecture Standard</div>
                                                                </a>
                                                                <div class="expert">Giảng viên {{ $teacher->full_name }}</div>
                                                            </div>

                                                            <div class="stm_featured_product_footer">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">

                                                                        <div class="stm_featured_product_comments">
                                                                            <i class="fa-icon-stm_icon_comment_o"></i><span>{{ number_format($product->comment_count) }}</span>
                                                                        </div>

                                                                        <div class="stm_featured_product_stock">
                                                                            <i class="fa-icon-stm_icon_user"></i><span>{{ number_format($product->register_count) }}</span>
                                                                        </div>

                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <span class="price">
                                                                            <span class="woocommerce-Price-amount amount">{{ number_format($product->price) }}
                                                                                <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="stm_featured_product_show_more">
                                                                    <a href="{{ route('products.show', $product->slug) }}" onclick="__gaTracker('send', 'event', 'outbound-article', '{{ route('products.show', $product->slug) }}', 'Đọc tiếp');" class="btn btn-default" title="Đọc tiếp">Đọc tiếp</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach

                                            </div> <!-- simple_carousel_with_bullets_init -->
                                            <div class="simple-carousel-bullets" >
                                            </div>
                                        </div> <!-- simple_carousel_with_bullets -->

                                    </div> <!-- stm_featured_products_unit -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1435151391468">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1435151386302">
                                <div class="wpb_wrapper">
                                    <div class="vc_separator wpb_content_element vc_sep_width_100 type_1  vc_separator_no_text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">

                                    <div class="experts_main_wrapper simple_carousel_wrapper">
                                        <div class="clearfix experts_control_bar_top">
                                            <div class="pull-left">
                                                <h2 class="experts_main_title">GIẢNG VIÊN</h2>
                                            </div>
                                            <div class="pull-right experts_control_bar">
                                                <div class="clearfix">
                                                    <div class="pull-right">
                                                        <a href="#" class="btn-carousel-control simple_carousel_prev" title="Scroll Carousel left" >
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                        <a href="#" class="btn-carousel-control simple_carousel_next" title="Scroll Carousel right">
                                                            <i class="fa fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="pull-right btn-experts-all">
                                                        <a href="{{ route('teachers.index') }}" onclick="__gaTracker('send', 'event', 'outbound-article', {{ route('teachers.index') }}, '\n');" class="btn btn-primary btn-sm" title="Xem tất cả giảng viên">
                                                            <span class="icon-stm_icon_brain"></span>Xem tất cả
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="experts_carousel_unit">
                                            <div class="experts_carousel">
                                                <div class="caroufredsel_wrapper" >
                                                    <div class="expert-carousel-init simple_carousel_init">

                                                        @foreach ($teachers as $data)

                                                        <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide">
                                                            <div class="st_experts experts_carousel">
                                                                <div class="media">
                                                                    <div class="media-left expert-media">
                                                                        <img width="129" height="129" src="{{ $data->image ? asset($data->image) : asset(config('custom.no_image')) }}" class="img-responsive wp-post-image" alt="Giảng viên {{ $data->full_name }}">
                                                                        <div class="expert_socials clearfix">
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="{{ route('teachers.show', $data->slug) }}" onclick="__gaTracker('send', 'event', 'outbound-article', '{{ route('teachers.show', $data->slug) }}', '\nGiảng viên {{ $data->full_name }}\n');" class="expert_inner_title_link" title="Xem trang giảng viên">
                                                                            <h3 class="expert_inner_title">Giảng viên {{ $data->full_name }}</h3>
                                                                        </a>
                                                                        <div class="expert_job">{{ $data->cateProd }}</div>
                                                                        <hr>
                                                                        <div class="expert_excerpt">
                                                                            {{ $data->slogan }}
                                                                        </div>
                                                                        @if(!empty($data->certified))
                                                                        <div class="expert_certified" style="padding-top: 10px">Certified by <span class="orange">{{ $data->certified }}</span></div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- col -->

                                                        @endforeach

                                                    </div>
                                                </div>	<!-- init carousel -->
                                            </div> <!-- style output -->
                                        </div> <!-- unit -->
                                    </div> <!-- experts main wrapper -->

                                    <!-- If styled as carousel add inline script in footer -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </div>
</div>

<script type="text/javascript">
        (function ($) {
        "use strict";
          $(document).ready(function () {
        simple_carousel_bullets_cfs();
        });
          $(window).load(function () {
        $('.simple_carousel_bullets_init').trigger('destroy');
          simple_carousel_bullets_cfs();
        });
          $(window).resize(function () {
        $('.simple_carousel_bullets_init').trigger('destroy');
          simple_carousel_bullets_cfs();
        });
          var items = 1;
          function simple_carousel_bullets_cfs() {
          $('.simple_carousel_bullets_init').carouFredSel({
          scroll: {
          items: items,
            fx: "direct",
            duration: 800,
            pauseOnHover: true
          },
            debug: false,
            auto: {
            play: true,
              timeoutDuration: 5000
            },
            swipe: {
            onTouch: true
            },
            responsive: true,
            width: "100%",
            items: {
            visible: {
            min: 1,
              max: 4},
            },
            pagination: {
            container: function () {
            return $(this).closest('.simple_carousel_with_bullets').find('.simple-carousel-bullets');
            }
            },
          });
            items = $('.simple_carousel_bullets_init').triggerHandler("currentVisible");
          };
        })(jQuery);</script>
<script type="text/javascript">
        (function($) {
        "use strict";
          $(document).ready(function() {
        simple_carousel_cfs();
        });
          $(window).load(function() {
        $('.simple_carousel_init').trigger('destroy');
          simple_carousel_cfs();
        });
          $(window).resize(function() {
        $('.simple_carousel_init').trigger('destroy');
          simple_carousel_cfs();
        });
          function simple_carousel_cfs(){
          $('.simple_carousel_init').carouFredSel({
          scroll   : {
          items: 1,
            fx : "direct",
            duration : 1000,
            pauseOnHover : true,
            easing: 'quadratic',
          },
            debug: true,
            auto: {
            play:false,
              timeoutDuration: 5000
            },
            swipe: {
            onTouch: true
            },
            width: "100%",
            height: "auto",
            responsive: true,
            items: {
            visible: {
            min:1,
              max:2,
            },
              height: '100%'
            },
            prev: {
            button: function() {
            return $(this).closest('.simple_carousel_wrapper').find('.simple_carousel_prev');
            }
            },
            next: {
            button: function() {
            return $(this).closest('.simple_carousel_wrapper').find('.simple_carousel_next');
            }
            }
          });
          };
        })(jQuery);
</script>
@endsection
