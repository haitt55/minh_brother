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
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to {{ config('custom.company_name') }}" href="/" class="home"><span property="name">{{ config('custom.company_name') }}</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Về chúng tôi</span><meta property="position" content="2"></span>
        </div>
    </div>
</div>

<div class="container">
    @if($about->intro)
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1435816078010">
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div class="vc_custom_heading vc_custom_1459846942543">
                        <h2 style="text-align: left">{!! $about->title !!}</h2>
                    </div><br>
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
                                    <div class="wpb_video_wrapper  video_autoplay_true"><iframe width="1170" height="658" src="https://www.youtube.com/embed/{{ $about->id_youtube }}?feature=oembed&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="multiseparator vc_custom_1437475130947">

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(!empty($teachers))
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
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
                                <div class="expert-carousel-init">

                                    <?php $stt = 0;?>
                                    @foreach ($teachers as $teacher)
                                    <?php $stt ++ ?>
                                    <?= $stt % 2 != 0 ? '<div class="row">' : null ?>
                                    <div class="col-md-6 col-sm-12 col-xs-12 expert-single-slide">
                                        <div class="st_experts experts_list">
                                            <div class="media">
                                                <div class="media-left expert-media">
                                                    <img width="129" height="129" src="{{ $teacher->image ? asset($teacher->image) : asset(config('custom.no_image')) }}" class="img-responsive wp-post-image" alt="Giảng viên {{ $teacher->full_name }}">
                                                    <div class="expert_socials clearfix">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <a class="expert_inner_title_link" href="{{ route('teachers.show', $teacher->slug) }}" title="Xem trang giảng viên">
                                                        <h3 class="expert_inner_title">Giảng viên {{ $teacher->full_name }}</h3>
                                                    </a>
                                                    <div class="expert_job">{{ $teacher->cateProd }}</div>
                                                    <hr>
                                                    <div class="expert_excerpt">
                                                        <p>{{ $teacher->slogan }}</p>
                                                    </div>
                                                    @if(!empty($teacher->certified))
                                                        <div class="expert_certified">Certified by <span class="orange">{{ $teacher->certified }}</span></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- col -->
                                    <?= ($stt % 2 == 0) || ($stt == count($teachers)) ? '</div>' : null ?>
                                    @endforeach
                                    <div class="row"> <!-- open new row in loop -->
                                    </div> <!-- row if style = list -->
                                </div>	<!-- init carousel -->
                            </div> <!-- style output -->
                        </div> <!-- unit -->
                    </div> <!-- experts main wrapper -->
                    <!-- If styled as carousel add inline script in footer -->
                </div>
            </div>
        </div>
    </div>
    @endif

    @if($about->certificate)
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    {!! $about->certificate !!}
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($about->intro_edu)
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="multiseparator vc_custom_1435819083449"></div>
                    {!! $about->intro_edu !!}
                </div>
            </div>
        </div>
    </div>
    @endif

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
      };

    })(jQuery);
</script>
