@extends('front.layouts.master')
@section('content')

    <div class="entry-header clearfix small" style="">
        <div class="container">
            <div class="entry-title-left">
                <div class="entry-title">
                    <h1 style="">{{ $category->name }}</h1>
                </div>
            </div>
            <div class="entry-title-right">
            </div>
        </div>
    </div>

    <!-- Breads -->
    <nav class="woocommerce-breadcrumb">
        <div class="container">
            <a href="http://bim.edu.vn">Trang chủ</a><i class="fa fa-chevron-right"></i>{{ $category->name }}</div>

    </nav>
    <div class="container">


        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="sidebar_position_right"><h2 class="archive-course-title">{{ $category->name }}</h2>

                    <div class="term-description">
                        {!!html_entity_decode($category->description)!!}
                        <blockquote>
                            {!!html_entity_decode($category->note)!!}
                        </blockquote>
                    </div>
                    <div class="stm_woo_helpbar clearfix">
                        <div class="pull-left">
                            <form role="search" method="get" class="woocommerce-product-search" action="">
                                <label class="screen-reader-text" for="s">Tìm kiếm:</label>
                                <input type="search" class="search-field" placeholder="Search the Courses" value=""
                                       name="s" title="Tìm kiếm:">
                                <input class="heading_font" type="submit" value="Tìm kiếm">
                                <input type="hidden" name="post_type" value="product">
                            </form>
                        </div>
                        <div class="pull-right xs-right-help">
                            <div class="clearfix">
                                <div class="pull-right">
                                    <div class="view_type_switcher">
                                        <a class="view_grid active_grid" href="?view_type=grid">
                                            <i class="fa fa-th-large"></i>
                                        </a>
                                        <a class="view_list active_grid" href="?view_type=list">
                                            <i class="fa fa-th-list"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="pull-right select-xs-left">
                                    <select id="product_categories_filter" tabindex="-1"
                                            class="select2-hidden-accessible" aria-hidden="true">
                                        <option value="http://bim.edu.vn/shop/">All courses</option>
                                        <option value="http://bim.edu.vn/danh-muc/civil-3d/">AUTOCAD CIVIL 3D</option>
                                        <option value="http://bim.edu.vn/danh-muc/infraworks/">INFRAWORKS 360</option>
                                        <option value="http://bim.edu.vn/danh-muc/navisworks-manage/">NAVISWORKS
                                            MANAGE
                                        </option>
                                        <option value="http://bim.edu.vn/danh-muc/revit-architecture/">REVIT
                                            ARCHITECTURE
                                        </option>
                                        <option value="http://bim.edu.vn/danh-muc/revit-building/">Revit Building
                                        </option>
                                        <option value="http://bim.edu.vn/danh-muc/revit-mep/"
                                                selected="">{{ $category->name }}</option>
                                        <option value="http://bim.edu.vn/danh-muc/revit-structure/">REVIT STRUCTURE
                                        </option>
                                        <option value="http://bim.edu.vn/danh-muc/tekla-structures/">TEKLA STRUCTURES
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stm_archive_product_inner_grid_content">

                        <ul class="stm-courses row list-unstyled">
                            <!-- Custom Meta -->
                            @include('front.layouts.list_products', ['items' => $listProducts])

                        </ul>
                        <div class="multiseparator grid"></div>


                    </div>
                    <!-- stm_product_inner_grid_content -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="sidebar-area sidebar-area-right">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_widgetised_column wpb_content_element">
                                        <div class="wpb_wrapper">

                                            <aside id="stm_widget_top_rated_products-2"
                                                   class="widget stm_widget_top_rated_products">
                                                <div class="widget_title"><h3>BÀI VIẾT KHÁC</h3></div>
                                                <ul class="stm_product_list_widget widget_woo_stm_style_2">
                                                    @include('front.layouts.other_products', ['items' => $otherProducts])
                                                </ul>
                                            </aside>
                                            <aside id="archives-3" class="widget widget_archive">
                                                <div class="widget_title"><h3>TÌM THEO THỜI GIAN</h3></div>
                                                <label class="screen-reader-text" for="archives-dropdown-3">TÌM THEO
                                                    THỜI GIAN</label>
                                                <select id="archives-dropdown-3" name="archive-dropdown"
                                                        onchange="document.location.href=this.options[this.selectedIndex].value;"
                                                        tabindex="-1" class="select2-hidden-accessible"
                                                        aria-hidden="true">

                                                    <option value="">Chọn tháng</option>
                                                    <option value="http://bim.edu.vn/2017/03/"> Tháng Ba 2017</option>
                                                    <option value="http://bim.edu.vn/2017/02/"> Tháng Hai 2017</option>
                                                    <option value="http://bim.edu.vn/2016/08/"> Tháng Tám 2016</option>
                                                    <option value="http://bim.edu.vn/2016/07/"> Tháng Bảy 2016</option>
                                                    <option value="http://bim.edu.vn/2016/06/"> Tháng Sáu 2016</option>
                                                    <option value="http://bim.edu.vn/2016/05/"> Tháng Năm 2016</option>
                                                    <option value="http://bim.edu.vn/2016/04/"> Tháng Tư 2016</option>
                                                    <option value="http://bim.edu.vn/2016/03/"> Tháng Ba 2016</option>
                                                    <option value="http://bim.edu.vn/2016/02/"> Tháng Hai 2016</option>
                                                    <option value="http://bim.edu.vn/2015/05/"> Tháng Năm 2015</option>
                                                    <option value="http://bim.edu.vn/2015/03/"> Tháng Ba 2015</option>

                                                </select>
                                            </aside>
                                            <aside id="working_hours-3" class="widget widget_working_hours">
                                                @include('front.layouts.week_working_hour')
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- container -->
@endsection