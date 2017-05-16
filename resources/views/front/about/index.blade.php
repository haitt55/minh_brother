@extends('front.layouts.master')
@section('content')
<div class="entry-header clearfix" style="background-color: #cecccc;">
    <div class="container">
        <div class="entry-title-left">
            <div class="entry-title">
                <h1 style="color: #000000;">Về chúng tôi</h1>
                <div class="stm_colored_separator">
                    <div class="triangled_colored_separator" style="background-color:#1e478d; ">
                        <div class="triangle" style="border-bottom-color:#1e478d;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="entry-title-right">
        </div>
        <style type="text/css">
            .entry-header .entry-title h1.h2:before {
                background: #1e478d;
            }
        </style>
    </div>
</div>

<!-- Breads -->
<div class="stm_breadcrumbs_unit">
    <div class="container">
        <div class="navxtBreads">
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to BIMhanoi." href="http://bim.edu.vn" class="home"><span property="name">BIMhanoi</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Về chúng tôi</span><meta property="position" content="2"></span>   
        </div>
    </div>
</div>

<div class="container">
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1435816078010">
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  vc_custom_1460521512346">
                        <div class="wpb_wrapper">
                            {!! $about->intro !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                    <div class="stm_video_wrapper">
                        <div class="wpb_video_widget wpb_content_element">
                            <div class="wpb_wrapper">
                                <div class="stm_theme_wpb_video_wrapper">
                                    <div class="stm_video_preview video_preloader_hidden" style="background-image:url(http://bim.edu.vn/wp-content/uploads/2015/07/Backdrop.png)"></div>
                                    <div class="wpb_video_wrapper  video_autoplay_true"><iframe width="1170" height="658" src="https://www.youtube.com/embed/hsLwr-ZfBMc?feature=oembed&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="multiseparator vc_custom_1437475130947"></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">

                    <div class="experts_main_wrapper simple_carousel_wrapper">
                        <div class="clearfix experts_control_bar_top">
                            <div class="pull-left">
                                <h2 class="experts_main_title">Giảng viên</h2>
                            </div>
                            <div class="pull-right experts_control_bar">
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                        <div class="experts_list_unit">
                            <div class="experts_list">
                                <div class="expert-carousel-init ">
                                    <div class="row">


                                        <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide">
                                            <div class="st_experts experts_list">
                                                <div class="media">
                                                    <div class="media-left expert-media">
                                                        <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-129x129.jpg" class="img-responsive wp-post-image" alt="Giảng viên tekla Hoàng Văn Cường" srcset="http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-129x129.jpg 129w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-150x150.jpg 150w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-300x300.jpg 300w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-180x180.jpg 180w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-75x75.jpg 75w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-69x69.jpg 69w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1-50x50.jpg 50w, http://bim.edu.vn/wp-content/uploads/2016/08/avatar-1.jpg 427w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a class="expert_inner_title_link" href="http://bim.edu.vn/teachers/giang-vien-hoang-van-cuong-2/" title="Xem trang giảng viên">
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
                                        </div> <!-- col -->


                                        <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide">
                                            <div class="st_experts experts_list">
                                                <div class="media">
                                                    <div class="media-left expert-media">
                                                        <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-129x129.png" class="img-responsive wp-post-image" alt="Giảng viên Nguyễn Đức Hóa" srcset="http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-129x129.png 129w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-150x150.png 150w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-300x300.png 300w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-768x768.png 768w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-180x180.png 180w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-600x600.png 600w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-470x470.png 470w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-75x75.png 75w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-69x69.png 69w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1-50x50.png 50w, http://bim.edu.vn/wp-content/uploads/2016/08/anh-Hóa-1.png 800w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a class="expert_inner_title_link" href="http://bim.edu.vn/teachers/giang-vien-nguyen-duc-hoa/" title="Xem trang giảng viên">
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
                                        </div> <!-- col -->
                                    </div> <!-- close row to prevent blocks mixing -->
                                    <div class="row"> <!-- open new row in loop -->


                                        <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide">
                                            <div class="st_experts experts_list">
                                                <div class="media">
                                                    <div class="media-left expert-media">
                                                        <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-129x129.jpg" class="img-responsive wp-post-image" alt="Giangviên Revit Bùi Quang Huy" srcset="http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-129x129.jpg 129w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-150x150.jpg 150w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-300x300.jpg 300w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-768x768.jpg 768w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-1024x1024.jpg 1024w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-180x180.jpg 180w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-600x600.jpg 600w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-470x470.jpg 470w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-75x75.jpg 75w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-69x69.jpg 69w, http://bim.edu.vn/wp-content/uploads/2015/06/IMG_6163-50x50.jpg 50w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a class="expert_inner_title_link" href="http://bim.edu.vn/teachers/bui-quang-huy/" title="Xem trang giảng viên">
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
                                        </div> <!-- col -->


                                        <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide">
                                            <div class="st_experts experts_list">
                                                <div class="media">
                                                    <div class="media-left expert-media">
                                                        <img width="129" height="129" src="http://bim.edu.vn/wp-content/uploads/2015/05/anh-129x129.jpg" class="img-responsive wp-post-image" alt="Giang-vien-Civil-3D-Ngo-Quoc-Viet" srcset="http://bim.edu.vn/wp-content/uploads/2015/05/anh-129x129.jpg 129w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-150x150.jpg 150w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-300x300.jpg 300w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-768x768.jpg 768w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-180x180.jpg 180w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-600x600.jpg 600w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-470x470.jpg 470w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-75x75.jpg 75w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-69x69.jpg 69w, http://bim.edu.vn/wp-content/uploads/2015/05/anh-50x50.jpg 50w, http://bim.edu.vn/wp-content/uploads/2015/05/anh.jpg 960w" sizes="(max-width: 129px) 100vw, 129px">																						<div class="expert_socials clearfix">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a class="expert_inner_title_link" href="http://bim.edu.vn/teachers/ngo-quoc-viet/" title="Xem trang giảng viên">
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
                                        </div> <!-- col -->
                                    </div> <!-- close row to prevent blocks mixing -->
                                    <div class="row"> <!-- open new row in loop -->
                                    </div> <!-- row if style = list -->
                                </div>	<!-- init carousel -->
                            </div> <!-- style output -->
                        </div> <!-- unit -->
                    </div> <!-- experts main wrapper -->

                    <!-- If styled as carousel add inline script in footer -->
                </div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="multiseparator vc_custom_1435819083449"></div><div class="vc_custom_heading vc_custom_1459841840140"><h2 style="text-align: left">Chứng nhận</h2></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                    <div class="certificate ">
                                        <div class="certificate-frame">
                                            <div class="certificate-holder">
                                                <img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2015/07/0-Mr.Huy-certification-1024x624-1-470x282.png">
                                            </div>
                                        </div>
                                        <div class="h4 title text-center">Autodesk Certified Professional</div>
                                    </div>
                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                    <div class="certificate ">
                                        <div class="certificate-frame">
                                            <div class="certificate-holder">
                                                <img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2015/07/civil-470x352.png">
                                            </div>
                                        </div>
                                        <div class="h4 title text-center">Autodesk Certified Professional</div>
                                    </div>
                                </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                    <div class="certificate ">
                                        <div class="certificate-frame">
                                            <div class="certificate-holder">
                                                <img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2015/07/Chứng-chỉ-tekla-1-470x742.png" style="">
                                            </div>
                                        </div>
                                        <div class="h4 title text-center">Tekla Certified Trainer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="multiseparator vc_custom_1435819083449"></div><div class="vc_custom_heading"><h2 style="text-align: left">Phòng đào tạo</h2></div>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: justify;">Phòng đào tạo của BIMhanoi được thiết kế vuông vắn, không gian sắp đặt cho 1&nbsp;lớp học 12 học viên.</p>
                            <p style="text-align: justify;"><img class="aligncenter wp-image-2375 " src="http://ebim.edu.vn/wp-content/uploads/2015/07/DSCN1213.jpg" alt="" width="499" height="375" srcset="http://bim.edu.vn/wp-content/uploads/2015/07/DSCN1213.jpg 900w, http://bim.edu.vn/wp-content/uploads/2015/07/DSCN1213-300x225.jpg 300w, http://bim.edu.vn/wp-content/uploads/2015/07/DSCN1213-768x576.jpg 768w, http://bim.edu.vn/wp-content/uploads/2015/07/DSCN1213-470x353.jpg 470w" sizes="(max-width: 499px) 100vw, 499px"></p>
                            <p style="text-align: justify;">Phòng đã được trang bị giàn 6 máy trạm chuyên dụng cho thiết kế xây dựng (các máy này phục vụ cho các học viên không tiện sử dụng máy tính cá nhân do cấu hình máy không đủ để cài đặt phần mềm thiết kế). Kèm theo đó là hệ thống máy chiếu, âm thanh phục vụ tốt nhất yêu cầu giảng dạy.</p>
                            <p>Đăng ký <a href="http://ebim.edu.vn/khoa-hoc/" target="_blank">khóa học</a>&nbsp;tại BIMhanoi để khám phá bí mật BIM ngay hôm nay!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="clearfix">
    </div>
</div>
@endsection


<script type="text/javascript">
    (function ($) {
      "use strict";

      $(document).ready(function ($) {
        stmPlayIframeVideo();
        $('.stm_video_preview').trigger('click');
      });

      /* Custom func */
      function stmPlayIframeVideo() {
        $('.stm_video_preview').click(function () {
          $(this).addClass('video_preloader_hidden');
          var addPlay = $(this).closest('.stm_video_wrapper').find('iframe').attr('src');
          $(this).closest('.stm_video_wrapper').find('.wpb_video_wrapper').addClass('video_autoplay_true');
          $(this).closest('.stm_video_wrapper').find('iframe').attr('src', addPlay + '&autoplay=1');
        });
      }
      ;

    })(jQuery);
</script>