@extends('front.layouts.master')

@section('content')
    <!-- Breads -->
    <div class="stm_breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <!-- Breadcrumb NavXT 5.6.0 -->
				<span property="itemListElement" typeof="ListItem">
					<a property="item" typeof="WebPage" title="Go to BIMhanoi." href="../index.html" class="home">
						<span property="name">BIMhanoi</span>
					</a>
					<meta property="position" content="1">
				</span> &gt;
				<span property="itemListElement" typeof="ListItem">
					<span property="name">{!! $blogCategory->name !!}</span><meta property="position" content="2">
				</span>
			</div>
        </div>
    </div>
	<div class="container blog_main_layout_list">
    	<div class="row">
    		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	    		<div class="blog_layout_list sidebar_position_right">
					<div class="row">
						@foreach($blogs as $blog)
				        	<div class="col-md-12">
								<div class="post_list_content_unit">
									<h2 class="post_list_item_title">
										<a href="../2017/03/30/giai-phap-bim-cho-co-so-ha-tang/index.html" title="Hiển thị đẩy đủ">{!! $blog->name !!}</a>
									</h2>
									<div class="post_list_meta_unit">
										<div class="date-d">30</div>
											<div class="date-m">Th3</div>
									</div>
									<div class="post_list_inner_content_unit post_list_inner_content_unit_left">
										<a href="../2017/03/30/giai-phap-bim-cho-co-so-ha-tang/index.html" title="Read more">
											<div class="post_list_featured_image">
												<img width="770" height="300" src="{!! $blog->image !!}" class="img-responsive wp-post-image" alt="{!! $blog->name !!}" />
											</div>
										</a>
										<!-- Post cats -->
										<div class="post_list_cats">
											<span class="post_list_cats_label">Posted in:</span>
											<a href="../category/chuyen-bim/index.html">Chuyện BIM</a><span class="post_list_divider">,</span>
											<a href="../category/civil-3d/index.html">Civil 3d</a><span class="post_list_divider">,</span>
											<a href="../category/co-so-ha-tang/index.html">cơ sở hạ tầng</a><span class="post_list_divider">,</span>
											<a href="../category/infraworks-360/index.html">InfraWorks 360</a><span class="post_list_divider">,</span>
										</div>
										<div class="post_list_btn_more" style="margin-top:0;" >
											<a href="../2017/03/30/giai-phap-bim-cho-co-so-ha-tang/index.html" class="btn btn-default" title="Đọc tiếp">Đọc tiếp</a>
										</div>
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
											<aside id="search-2" class="widget widget_search">
												<div class="widget_title"><h3>Tìm kiếm</h3></div>
												<form role="search" method="get" class="search-form" action="http://bim.edu.vn/">
													<label>
														<span class="screen-reader-text">Tìm kiếm cho:</span>
														<input type="search" class="search-field" placeholder="Tìm kiếm &hellip;" value="" name="s" />
													</label>
													<input type="submit" class="search-submit" value="Tìm kiếm" />
												</form>
											</aside>
											@include('front.layouts.popular_product')
											<aside id="archives-4" class="widget widget_archive">
												<div class="widget_title"><h3>TÌM THEO THỜI GIAN</h3></div>
												<label class="screen-reader-text" for="archives-dropdown-4">TÌM THEO THỜI GIAN</label>
												<select id="archives-dropdown-4" name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
													<option value="">Chọn tháng</option>
													<option value='../2017/03/index.html'> Tháng Ba 2017 </option>
													<option value='../2017/02/index.html'> Tháng Hai 2017 </option>
													<option value='../2016/08/index.html'> Tháng Tám 2016 </option>
													<option value='../2016/07/index.html'> Tháng Bảy 2016 </option>
													<option value='../2016/06/index.html'> Tháng Sáu 2016 </option>
													<option value='../2016/05/index.html'> Tháng Năm 2016 </option>
													<option value='../2016/04/index.html'> Tháng Tư 2016 </option>
													<option value='../2016/03/index.html'> Tháng Ba 2016 </option>
													<option value='../2016/02/index.html'> Tháng Hai 2016 </option>
													<option value='../2015/05/index.html'> Tháng Năm 2015 </option>
													<option value='../2015/03/index.html'> Tháng Ba 2015 </option>
												</select>
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
	</div>
@endsection