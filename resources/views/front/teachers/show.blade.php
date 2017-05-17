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
                                        <img width="800" height="400" src="{{ '/' . $teacher->image }}" class="img-responsive wp-post-image" alt="Giảng viên {{ $teacher->full_name }}">
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
                                        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1020px; height: 414px; margin: 0px; overflow: hidden;">
                                            <div class="simple_carousel_bullets_init_77159 clearfix" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 5100px; height: 414px; z-index: auto;">

                                                @foreach($teacher->products as $product)
                                                <div class="col-md-3 col-sm-4 col-xs-12" style="width: 25%">
                                                    <div class="stm_featured_product_single_unit heading_font">
                                                        <div class="stm_featured_product_single_unit_centered">
                                                            <div class="stm_featured_product_image">
                                                                <a href="{{ route('products.show', $product->slug) }}" title="{{ $product->name }}">
                                                                    <img width="270" height="283" src="{{ '/' . $product->image }}" class="img-responsive wp-post-image" alt="BIMhanoi - {{ $product->name }}">
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
                                                                            <i class="fa-icon-stm_icon_comment_o"></i><span>1</span>
                                                                        </div>

                                                                        <div class="stm_featured_product_stock">
                                                                            <i class="fa-icon-stm_icon_user"></i><span>5</span>
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

                    <!--                    <div class="vc_row wpb_row vc_row-fluid">
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
                                                                            <a href="#" class="btn-carousel-control simple_carousel_prev" title="Scroll Carousel left" style="display: block;">
                                                                                <i class="fa fa-chevron-left"></i>
                                                                            </a>
                                                                            <a href="#" class="btn-carousel-control simple_carousel_next" title="Scroll Carousel right" style="display: block;">
                                                                                <i class="fa fa-chevron-right"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="pull-right btn-experts-all">
                                                                            <a href="http://bim.edu.vn/teachers/" onclick="__gaTracker('send', 'event', 'outbound-article', 'http://bim.edu.vn/teachers/', '\n								Xem tất cả							');" class="btn btn-primary btn-sm" title="Xem tất cả giảng viên">
                                                                                <span class="icon-stm_icon_brain"></span>Xem tất cả							</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="experts_carousel_unit">
                                                                <div class="experts_carousel">
                                                                    <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1020px; height: 323px; margin: 0px; overflow: hidden;"><div class="expert-carousel-init simple_carousel_init" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 5100px; height: 323px;">
                    
                    
                                                                            <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide" style="width: 510px;">
                                                                                <div class="st_experts experts_carousel">
                                                                                    <div class="media">
                                                                                        <div class="media-left expert-media">
                                                                                            <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-129x129.jpg" class="img-responsive wp-post-image" alt="Giảng viên tekla Hoàng Văn Cường" srcset="http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-129x129.jpg 129w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-150x150.jpg 150w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-300x300.jpg 300w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-180x180.jpg 180w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-75x75.jpg 75w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-69x69.jpg 69w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-50x50.jpg 50w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1.jpg 427w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="http://bim.edu.vn/teachers/giang-vien-hoang-van-cuong-2/" onclick="__gaTracker('send', 'event', 'outbound-article', 'http://bim.edu.vn/teachers/giang-vien-hoang-van-cuong-2/', '\n												Giảng viên Hoàng Văn Cường\n											');" class="expert_inner_title_link" title="Xem trang giảng viên">
                                                                                                <h3 class="expert_inner_title">Giảng viên Hoàng Văn Cường</h3>
                                                                                            </a>
                                                                                            <div class="expert_job">Tekla Structures</div>
                                                                                            <hr>
                                                                                            <div class="expert_excerpt">
                                                                                                <p>Với hơn 10 năm kinh nghiệm nghiên cứu áp dụng, tư vấn kỹ thuật triển khai ứng dụng phần mềm Tekla và BIM cho lĩnh vực xây dựng dân dụng, công nghiệp cho các công ty trong nước cũng như các doanh nghiệp đầu tư trực tiếp nước ngoài.</p>
                                                                                            </div>
                                                                                            <div class="expert_certified">Certified by <span class="orange">Tekla</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  col 
                    
                    
                                                                            <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide" style="width: 510px;">
                                                                                <div class="st_experts experts_carousel">
                                                                                    <div class="media">
                                                                                        <div class="media-left expert-media">
                                                                                            <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-129x129.png" class="img-responsive wp-post-image" alt="Giảng viên Nguyễn Đức Hóa" srcset="http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-129x129.png 129w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-150x150.png 150w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-300x300.png 300w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-768x768.png 768w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-180x180.png 180w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-600x600.png 600w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-470x470.png 470w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-75x75.png 75w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-69x69.png 69w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-50x50.png 50w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1.png 800w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="http://bim.edu.vn/teachers/giang-vien-nguyen-duc-hoa/" onclick="__gaTracker('send', 'event', 'outbound-article', 'http://bim.edu.vn/teachers/giang-vien-nguyen-duc-hoa/', '\n												Giảng viên Nguyễn Đức Hóa\n											');" class="expert_inner_title_link" title="Xem trang giảng viên">
                                                                                                <h3 class="expert_inner_title">Giảng viên Nguyễn Đức Hóa</h3>
                                                                                            </a>
                                                                                            <div class="expert_job">Tekla Structures</div>
                                                                                            <hr>
                                                                                            <div class="expert_excerpt">
                                                                                                <p>Giảng viên là kỹ sư xây dựng có trên 5 năm kinh nghiệm trong việc thi công xây dựng và gia công chế tạo kết cấu thép, từng tham gia đào tạo Tekla</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  col 
                    
                    
                                                                            <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide" style="width: 510px;">
                                                                                <div class="st_experts experts_carousel">
                                                                                    <div class="media">
                                                                                        <div class="media-left expert-media">
                                                                                            <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-129x129.jpg" class="img-responsive wp-post-image" alt="Giangviên Revit Bùi Quang Huy" srcset="http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-129x129.jpg 129w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-150x150.jpg 150w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-300x300.jpg 300w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-768x768.jpg 768w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-1024x1024.jpg 1024w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-180x180.jpg 180w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-600x600.jpg 600w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-470x470.jpg 470w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-75x75.jpg 75w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-69x69.jpg 69w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-50x50.jpg 50w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="http://bim.edu.vn/teachers/bui-quang-huy/" onclick="__gaTracker('send', 'event', 'outbound-article', 'http://bim.edu.vn/teachers/bui-quang-huy/', '\n												Giảng viên Bùi Quang Huy\n											');" class="expert_inner_title_link" title="Xem trang giảng viên">
                                                                                                <h3 class="expert_inner_title">Giảng viên Bùi Quang Huy</h3>
                                                                                            </a>
                                                                                            <div class="expert_job">Revit MEP - Architecture - Structure</div>
                                                                                            <hr>
                                                                                            <div class="expert_excerpt">
                                                                                                <p>Xây dựng cộng đồng BIM bằng cách chia sẻ kiến thức, đào tạo, nâng cao năng lực kỹ sư, kiến trúc sư, kết cấu sư là phát triển ngành xây dựng Việt Nam bền, mạnh.</p>
                                                                                            </div>
                                                                                            <div class="expert_certified">Certified by <span class="orange">Autodesk</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  col 
                    
                    
                                                                            <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide" style="width: 510px;">
                                                                                <div class="st_experts experts_carousel">
                                                                                    <div class="media">
                                                                                        <div class="media-left expert-media">
                                                                                            <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2015/05/anh-129x129.jpg" class="img-responsive wp-post-image" alt="Giang-vien-Civil-3D-Ngo-Quoc-Viet" srcset="http://bim.edu.vn/wp-content/uploads/2015/05/anh-129x129.jpg 129w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-150x150.jpg 150w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-300x300.jpg 300w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-768x768.jpg 768w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-180x180.jpg 180w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-600x600.jpg 600w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-470x470.jpg 470w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-75x75.jpg 75w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-69x69.jpg 69w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-50x50.jpg 50w, http://bim.edu.vn/wp-content/uploads/2015/05/anh.jpg 960w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="http://bim.edu.vn/teachers/ngo-quoc-viet/" onclick="__gaTracker('send', 'event', 'outbound-article', 'http://bim.edu.vn/teachers/ngo-quoc-viet/', '\n												Giảng viên Ngô Quốc Việt\n											');" class="expert_inner_title_link" title="Xem trang giảng viên">
                                                                                                <h3 class="expert_inner_title">Giảng viên Ngô Quốc Việt</h3>
                                                                                            </a>
                                                                                            <div class="expert_job">Civil 3D - Infraworks</div>
                                                                                            <hr>
                                                                                            <div class="expert_excerpt">
                                                                                                <p>Tôi mong muốn giúp nhiều người biết đến, hiểu và có thể phổ biến ứng dụng Civil 3D vào các dự án thi công xây dựng thực tế tại Việt Nam</p>
                                                                                            </div>
                                                                                            <div class="expert_certified">Certified by <span class="orange">Autodesk</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  col 
                                                                        </div></div>	 init carousel 
                                                                </div>  style output 
                                                            </div>  unit 
                                                        </div>  experts main wrapper 
                    
                                                         If styled as carousel add inline script in footer 
                                                    </div></div></div></div>-->
                </div>
        </article>

    </div>
</div>
@endsection
<script type="text/javascript">
      (function ($) {
      "use strict";
        $(document).ready(function () {
      simple_carousel_bullets_cfs();
      });
        $(window).load(function () {
      $('.simple_carousel_bullets_init_54029').trigger('destroy');
        simple_carousel_bullets_cfs();
      });
        $(window).resize(function () {
      $('.simple_carousel_bullets_init_54029').trigger('destroy');
        simple_carousel_bullets_cfs();
      });
        var items = 1;
        function simple_carousel_bullets_cfs() {
        $('.simple_carousel_bullets_init_54029').carouFredSel({
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
          items = $('.simple_carousel_bullets_init_54029').triggerHandler("currentVisible");
        }
      ;
      })(jQuery);</script>

<script type="text/javascript">
      (function ($) {
      "use strict";
        $(document).ready(function () {
      simple_carousel_bullets_cfs();
      });
        $(window).load(function () {
      $('.simple_carousel_bullets_init_77159').trigger('destroy');
        simple_carousel_bullets_cfs();
      });
        $(window).resize(function () {
      $('.simple_carousel_bullets_init_77159').trigger('destroy');
        simple_carousel_bullets_cfs();
      });
        var items = 1;
        function simple_carousel_bullets_cfs() {
        $('.simple_carousel_bullets_init_77159').carouFredSel({
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
          items = $('.simple_carousel_bullets_init_77159').triggerHandler("currentVisible");
        }
      ;
      })(jQuery);
</script>