@extends('front.layouts.master')
@section('content')
	<div class="entry-header clearfix" style="background-color: #cecccc;">
		<div class="container">
			<div class="entry-title-left">
				<div class="entry-title">
					<h1 style="color: #000000;">Khóa học</h1>
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
				<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to BIMhanoi." href="http://bim.edu.vn" class="home"><span property="name">BIMhanoi</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Khóa học</span><meta property="position" content="2"></span>                    </div>
			</div>
		</div>

		<div class="container">

			<div class="row"><div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"><div class="sidebar_position_right">            <h2 class="archive-course-title">Khóa học</h2>


				<div class="stm_woo_helpbar clearfix">
					<div class="pull-left">
						<form role="search" method="get" class="woocommerce-product-search" action="">
							<label class="screen-reader-text" for="s">Tìm kiếm:</label>
							<input type="search" class="search-field" placeholder="Search the Courses" value="" name="search" title="Tìm kiếm:">
							<input class="heading_font" type="submit" value="Tìm kiếm">
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
								<select id="product_categories_filter" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
									<option value="/khoa-hoc/?view_type=grid">All</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=civil-3d">AUTOCAD CIVIL 3D</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=infraworks">INFRAWORKS 360</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=navisworks-manage">NAVISWORKS MANAGE</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=revit-architecture">REVIT ARCHITECTURE</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=revit-building">Revit Building</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=revit-mep">REVIT MEP</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=revit-structure">REVIT STRUCTURE</option>
									<option value="/khoa-hoc/?view_type=grid&amp;category=tekla-structures">TEKLA STRUCTURES</option>
								</select>
								<!-- <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-product_categories_filter-container"><span class="select2-selection__rendered" id="select2-product_categories_filter-container" title="All">All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
							</div>
						</div>
					</div>
				</div>
				<div class="stm_archive_product_inner_grid_content">

					<ul class="stm-courses row list-unstyled">

						<!-- Custom Meta -->
						@foreach($products as $product)
						<li class="col-md-4 col-sm-4 col-xs-6 course-col first post-3236 product type-product status-publish has-post-thumbnail product_cat-tekla-structures product_tag-ket-cau-thep product_tag-mo-hinh-nha-thep product_tag-nha-thep-tien-che product_tag-tekla product_tag-tekla-cho-nha-thep product_tag-tekla-structures  instock virtual shipping-taxable purchasable product-type-simple">

							<a href="{{ route('products.show', $product->slug) }}" class="woocommerce-LoopProduct-link"></a>
							<div class="stm_archive_product_inner_unit heading_font">
								<a href="{{ route('products.show', $product->slug) }}" class="woocommerce-LoopProduct-link"></a>
								<div class="stm_archive_product_inner_unit_centered">
									<a href="{{ route('products.show', $product->slug) }}" class="woocommerce-LoopProduct-link"></a>
									<div class="stm_featured_product_image">
										<a href="{{ route('products.show', $product->slug) }}" class="woocommerce-LoopProduct-link">
											<div class="stm_featured_product_price">
												<div class="price">
													<h5>₫{{ $product->price }}</h5>
												</div>
											</div>
										</a>
										<a href="{{ route('products.show', $product->slug) }}" title="View course - Khóa học Tekla Structures cho nhà thép tiền chế">
										<img width="270" height="283" src="{{ $product->image ? asset($product->image) : "" }}" class="img-responsive wp-post-image" alt="Tekla Structures cho nhà thép tiền chế"></a>
									</div>
									<div class="stm_featured_product_body">
										<a href="{{ route('products.show', $product->slug) }}" title="View course - Khóa học Tekla Structures cho nhà thép tiền chế">
											<div class="title">Khóa học {{ $product->name }}</div>
										</a>
										
										<div class="expert">Giảng viên {{ $product->teacher ? $product->teacher->full_name : ''}}</div>
									</div>
			
									<div class="stm_featured_product_footer">
										<div class="clearfix">
											<div class="pull-left">
												
												<div class="stm_featured_product_comments">
													<i class="fa-icon-stm_icon_comment_o"></i><span>0</span>
												</div>

												
												<div class="stm_featured_product_stock">
													<i class="fa-icon-stm_icon_user"></i><span>178</span>
												</div>

											</div>
											<div class="pull-right">
												

												<span class="price"><span class="woocommerce-Price-amount amount">4.500.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
											</div>
										</div>
										
										<div class="stm_featured_product_show_more">
											<a class="btn btn-default" href="{{ route('products.show', $product->slug) }}" title="Đọc tiếp">Đọc tiếp</a>
										</div>
									</div>			
			
									</div> <!-- stm_archive_product_inner_unit_centered -->		
								</div> <!-- stm_archive_product_inner_unit -->
							</li>
						@endforeach
					</ul>
				<div class="multiseparator grid"></div>
			</div>
		<!-- stm_product_inner_grid_content -->
		</div>
	</div>
<div class="col-lg-3 col-md-3 hidden-sm hidden-xs"><div class="sidebar-area sidebar-area-right">    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_widgetised_column wpb_content_element">
		<div class="wpb_wrapper">
			
			<aside id="stm_widget_top_rated_products-2" class="widget stm_widget_top_rated_products"><div class="widget_title"><h3>BÀI VIẾT KHÁC</h3></div><ul class="stm_product_list_widget widget_woo_stm_style_2">				

				<li>
					<a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" title="Khóa học Revit MEP Standard">
						<img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2016/04/MEP-Mechnical-system-75x75.jpg ">
						<div class="meta">
							<div class="title h5">Khóa học Revit MEP Standard</div>								
							<div class="stm_featured_product_price">
								<div class="price">
									₫2900000										</div>
								</div>
								<div class="rating">
									

									<span class="price"><span class="woocommerce-Price-amount amount">2.900.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
								</div>
								<div class="expert">Giảng viên Bùi Quang Huy</div>
							</div>
						</a>
					</li>


					<li>
						<a href="http://bim.edu.vn/khoa-hoc/khoa-hoc-civil-3d-ha-tang-ky-thuat/" title="Khóa học AutoCAD Civil 3D cho hạ tầng kỹ thuật">
							<img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2016/05/CIVIL-3D-HA-TANG-KY-THUAT-75x75.jpg ">
							<div class="meta">
								<div class="title h5">Khóa học AutoCAD Civil 3D cho hạ tầng kỹ thuật</div>								
								<div class="stm_featured_product_price">
									<div class="price">
										₫4500000										</div>
									</div>
									<div class="rating">


										<span class="price"><span class="woocommerce-Price-amount amount">4.500.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
									</div>
									<div class="expert">Giảng viên Ngô Quốc Việt</div>
								</div>
							</a>
						</li>


						<li>
							<a href="http://bim.edu.vn/khoa-hoc/revit-structure-pro/" title="Khóa học Revit Structure Advanced">
								<img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2016/04/STR-Family-Editor-1-75x75.jpg ">
								<div class="meta">
									<div class="title h5">Khóa học Revit Structure Advanced</div>								
									<div class="stm_featured_product_price">
										<div class="price">
											₫3900000										</div>
										</div>
										<div class="rating">


											<span class="price"><span class="woocommerce-Price-amount amount">3.900.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
										</div>
										<div class="expert">Giảng viên Bùi Quang Huy</div>
									</div>
								</a>
							</li>
						</ul></aside><aside id="archives-3" class="widget widget_archive"><div class="widget_title"><h3>TÌM THEO THỜI GIAN</h3></div>		<label class="screen-reader-text" for="archives-dropdown-3">TÌM THEO THỜI GIAN</label>
						<select id="archives-dropdown-3" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">

							<option value="">Chọn tháng</option>
							<option value="http://bim.edu.vn/2017/03/"> Tháng Ba 2017 </option>
							<option value="http://bim.edu.vn/2017/02/"> Tháng Hai 2017 </option>
							<option value="http://bim.edu.vn/2016/08/"> Tháng Tám 2016 </option>
							<option value="http://bim.edu.vn/2016/07/"> Tháng Bảy 2016 </option>
							<option value="http://bim.edu.vn/2016/06/"> Tháng Sáu 2016 </option>
							<option value="http://bim.edu.vn/2016/05/"> Tháng Năm 2016 </option>
							<option value="http://bim.edu.vn/2016/04/"> Tháng Tư 2016 </option>
							<option value="http://bim.edu.vn/2016/03/"> Tháng Ba 2016 </option>
							<option value="http://bim.edu.vn/2016/02/"> Tháng Hai 2016 </option>
							<option value="http://bim.edu.vn/2015/05/"> Tháng Năm 2015 </option>
							<option value="http://bim.edu.vn/2015/03/"> Tháng Ba 2015 </option>

						</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-archives-dropdown-3-container"><span class="select2-selection__rendered" id="select2-archives-dropdown-3-container" title="Chọn tháng">Chọn tháng</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
					</aside><aside id="working_hours-3" class="widget widget_working_hours"><div class="widget_title"><h3>GIỜ LÀM VIỆC</h3></div>        
					<table class="table_working_hours">
						<tbody><tr class="opened">
							<td class="day_label h6">Thứ Hai</td>
							<td class="day_value h6">9:30 am - 6.00 pm</td>
						</tr>
						<tr class="opened">
							<td class="day_label h6">Thứ Ba</td>
							<td class="day_value h6">9:30 am - 6.00 pm</td>
						</tr>
						<tr class="opened">
							<td class="day_label h6">Thứ Tư</td>
							<td class="day_value h6">9:30 am - 6.00 pm</td>
						</tr>
						<tr class="opened">
							<td class="day_label h6">Thứ Năm</td>
							<td class="day_value h6">9:30 am - 6.00 pm</td>
						</tr>
						<tr class="opened">
							<td class="day_label h6">Thứ Sáu</td>
							<td class="day_value h6">9:30 am - 6.00 pm</td>
						</tr>
						<tr class="opened">
							<td class="day_label h6">Thứ Bảy</td>
							<td class="day_value h6">9:00 am - 12:00 pm</td>
						</tr>
						<tr class="closed">
							<td class="day_label h6">Chủ nhật</td>
							<td class="day_value closed h6"><span>Không làm việc</span></td>
						</tr>
					</tbody></table>

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