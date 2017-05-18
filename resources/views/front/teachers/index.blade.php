@extends('front.layouts.master')
@section('content')

<div id="main">	
    <div class="entry-header clearfix" style="background-color: #cecccc;">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title">
                    <h1 style="color: #000000;">GIẢNG VIÊN</h1>
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
                <!-- Breadcrumb NavXT 5.6.0 -->
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to BIMhanoi." href="/" class="home">
                        <span property="name">BIMhanoi</span>
                    </a>
                    <meta property="position" content="1">
                </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">GIẢNG VIÊN</span><meta property="position" content="2"></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">

                        <?php $stt = 0; ?>
                        @foreach ($teachers as $teacher)
                        <?php $stt ++ ?>
                        <?= $stt % 4 == 1 ? '<div class="row">' : null ?>
                        <div class="col-md-3 col-sm-4 col-xs-6 teacher-col">
                            <div class="teacher_content">
                                <div class="teacher_img">
                                    <a href="{{ route('teachers.show', $teacher->slug) }}" title="Watch teacher page">
                                        <img src="{{ $teacher->image ? asset($teacher->image) : asset(config('custom.no_image')) }}" class="img-responsive wp-post-image" alt="Giảng viên {{ $teacher->full_name }}">
                                    </a>
                                    <div class="expert_socials clearfix text-center">
                                        <div class="display_inline_block">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('teachers.show', $teacher->slug) }}" title="Watch teacher page">
                                    <h4 class="title">Giảng viên {{ $teacher->full_name }}</h4>
                                </a>
                                <div class="job heading_font">{{ $teacher->cateProd }}</div>

                                <div class="content">
                                    {!! $teacher->slogan !!}
                                </div>
                            </div>
                            <div class="multiseparator"></div>
                        </div>
                        <?= $stt % 4 == 0 ? '</div>' : null ?>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix">
        </div>
    </div>
</div>

@endsection