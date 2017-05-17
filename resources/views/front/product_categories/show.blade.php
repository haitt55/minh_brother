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
		

		<div class="row"><div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"><div class="sidebar_position_right">							<h2 class="archive-course-title">{{ $category->name }}</h2>
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
						<input type="search" class="search-field" placeholder="Search the Courses" value="" name="s" title="Tìm kiếm:">
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
							<select id="product_categories_filter" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
								<option value="http://bim.edu.vn/shop/">All courses</option>
								<option value="http://bim.edu.vn/danh-muc/civil-3d/">AUTOCAD CIVIL 3D</option>
								<option value="http://bim.edu.vn/danh-muc/infraworks/">INFRAWORKS 360</option>
								<option value="http://bim.edu.vn/danh-muc/navisworks-manage/">NAVISWORKS MANAGE</option>
								<option value="http://bim.edu.vn/danh-muc/revit-architecture/">REVIT ARCHITECTURE</option>
								<option value="http://bim.edu.vn/danh-muc/revit-building/">Revit Building</option>
								<option value="http://bim.edu.vn/danh-muc/revit-mep/" selected="">{{ $category->name }}</option>
								<option value="http://bim.edu.vn/danh-muc/revit-structure/">REVIT STRUCTURE</option>
								<option value="http://bim.edu.vn/danh-muc/tekla-structures/">TEKLA STRUCTURES</option>
							</select>
						</div>
					</div>
				</div>
			</div>			
			<div class="stm_archive_product_inner_grid_content">

				<ul class="stm-courses row list-unstyled">		




					<!-- Custom Meta -->


					<li class="col-md-4 col-sm-4 col-xs-6 course-col first post-92 product type-product status-publish has-post-thumbnail product_cat-revit-mep product_tag-sach-revit-mep product_tag-tu-hoc-revit-mep  instock shipping-taxable purchasable product-type-simple">

						<a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" class="woocommerce-LoopProduct-link">	
						</a><div class="stm_archive_product_inner_unit heading_font"><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" class="woocommerce-LoopProduct-link">
					</a><div class="stm_archive_product_inner_unit_centered"><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" class="woocommerce-LoopProduct-link">	

				</a><div class="stm_featured_product_image"><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" class="woocommerce-LoopProduct-link">
				<div class="stm_featured_product_price">
					<div class="price">
						<h5>₫800000</h5>
					</div>
				</div>

			</a><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" title="View course - Bộ sách {{ $category->name }}">
			<img width="270" height="283" src="http://bim.edu.vn/wp-content/uploads/2015/06/collage-270x283.jpg" class="img-responsive wp-post-image" alt="Bộ sách {{ $category->name }}">					</a>

		</div>
		
		

		<div class="stm_featured_product_body">
			<a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" title="View course - Bộ sách {{ $category->name }}">
				<div class="title">Bộ sách {{ $category->name }}</div>
			</a>

			<div class="expert">Giảng viên Bùi Quang Huy</div>
		</div>

		<div class="stm_featured_product_footer">
			<div class="clearfix">
				<div class="pull-left">

					<div class="stm_featured_product_comments">
						<i class="fa-icon-stm_icon_comment_o"></i><span>11</span>
					</div>


					<div class="stm_featured_product_stock">
						<i class="fa-icon-stm_icon_user"></i><span>75</span>
					</div>

				</div>
				<div class="pull-right">


					<span class="price"><span class="woocommerce-Price-amount amount">800.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
				</div>
			</div>

			<div class="stm_featured_product_show_more">
				<a class="btn btn-default" href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep/" title="Đọc tiếp">Đọc tiếp</a>
			</div>
		</div>			

	</div> <!-- stm_archive_product_inner_unit_centered -->		
</div> <!-- stm_archive_product_inner_unit -->
</li>





<!-- Custom Meta -->


<li class="col-md-4 col-sm-4 col-xs-6 course-col post-2308 product type-product status-publish has-post-thumbnail product_cat-revit-mep product_tag-giao-trinh-mep product_tag-hoc-revit-mep product_tag-mep product_tag-sach-revit product_tag-sach-revit-mep product_tag-tu-hoc-revit-mep last instock shipping-taxable purchasable product-type-simple">

	<a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" class="woocommerce-LoopProduct-link">	
	</a><div class="stm_archive_product_inner_unit heading_font"><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" class="woocommerce-LoopProduct-link">
</a><div class="stm_archive_product_inner_unit_centered"><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" class="woocommerce-LoopProduct-link">	

</a><div class="stm_featured_product_image"><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" class="woocommerce-LoopProduct-link">
<div class="stm_featured_product_price">
	<div class="price">
		<h5>₫500000</h5>
	</div>
</div>

</a><a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" title="View course - Bộ sách {{ $category->name }} Điện nước">
<img width="270" height="283" src="http://bim.edu.vn/wp-content/uploads/2016/07/Sach-10-270x283.png" class="img-responsive wp-post-image" alt="Sách {{ $category->name }} điện nước">					</a>

</div>



<div class="stm_featured_product_body">
	<a href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" title="View course - Bộ sách {{ $category->name }} Điện nước">
		<div class="title">Bộ sách {{ $category->name }} Điện nước</div>
	</a>

	<div class="expert">Giảng viên Bùi Quang Huy</div>
</div>

<div class="stm_featured_product_footer">
	<div class="clearfix">
		<div class="pull-left">

			<div class="stm_featured_product_comments">
				<i class="fa-icon-stm_icon_comment_o"></i><span>6</span>
			</div>


			<div class="stm_featured_product_stock">
				<i class="fa-icon-stm_icon_user"></i><span>0</span>
			</div>

		</div>
		<div class="pull-right">


			<span class="price"><span class="woocommerce-Price-amount amount">500.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
		</div>
	</div>

	<div class="stm_featured_product_show_more">
		<a class="btn btn-default" href="http://bim.edu.vn/khoa-hoc/bo-sach-revit-mep-dien-nuoc/" title="Đọc tiếp">Đọc tiếp</a>
	</div>
</div>			

</div> <!-- stm_archive_product_inner_unit_centered -->		
</div> <!-- stm_archive_product_inner_unit -->
</li>





<!-- Custom Meta -->


<li class="col-md-4 col-sm-4 col-xs-6 course-col first post-523 product type-product status-publish has-post-thumbnail product_cat-revit-mep product_tag-hoc-revit product_tag-hoc-revit-mep product_tag-phan-mem-revit product_tag-phan-mem-revit-mep product_tag-revit-mep  instock virtual shipping-taxable purchasable product-type-simple">

	<a href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" class="woocommerce-LoopProduct-link">	
	</a><div class="stm_archive_product_inner_unit heading_font"><a href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" class="woocommerce-LoopProduct-link">
</a><div class="stm_archive_product_inner_unit_centered"><a href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" class="woocommerce-LoopProduct-link">	

</a><div class="stm_featured_product_image"><a href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" class="woocommerce-LoopProduct-link">
<div class="stm_featured_product_price">
	<div class="price">
		<h5>₫3900000</h5>
	</div>
</div>

</a><a href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" title="View course - Khóa học {{ $category->name }} Advanced">
<img width="270" height="283" src="http://bim.edu.vn/wp-content/uploads/2016/04/MEP-Family-editor-270x283.jpg" class="img-responsive wp-post-image" alt="{{ $category->name }} Family editor">					</a>

</div>



<div class="stm_featured_product_body">
	<a href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" title="View course - Khóa học {{ $category->name }} Advanced">
		<div class="title">Khóa học {{ $category->name }} Advanced</div>
	</a>

	<div class="expert">Giảng viên Bùi Quang Huy</div>
</div>

<div class="stm_featured_product_footer">
	<div class="clearfix">
		<div class="pull-left">

			<div class="stm_featured_product_comments">
				<i class="fa-icon-stm_icon_comment_o"></i><span>1</span>
			</div>


			<div class="stm_featured_product_stock">
				<i class="fa-icon-stm_icon_user"></i><span>220</span>
			</div>

		</div>
		<div class="pull-right">


			<span class="price"><span class="woocommerce-Price-amount amount">3.900.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
		</div>
	</div>

	<div class="stm_featured_product_show_more">
		<a class="btn btn-default" href="http://bim.edu.vn/khoa-hoc/revit-mep-pro/" title="Đọc tiếp">Đọc tiếp</a>
	</div>
</div>			

</div> <!-- stm_archive_product_inner_unit_centered -->		
</div> <!-- stm_archive_product_inner_unit -->
</li>





<!-- Custom Meta -->


<li class="col-md-4 col-sm-4 col-xs-6 course-col post-521 product type-product status-publish has-post-thumbnail product_cat-revit-mep product_tag-hoc-revit-mep product_tag-phan-mem-revit product_tag-phan-mem-revit-mep product_tag-revit-mep last instock virtual shipping-taxable purchasable product-type-simple">

	<a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" class="woocommerce-LoopProduct-link">	
	</a><div class="stm_archive_product_inner_unit heading_font"><a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" class="woocommerce-LoopProduct-link">
</a><div class="stm_archive_product_inner_unit_centered"><a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" class="woocommerce-LoopProduct-link">	

</a><div class="stm_featured_product_image"><a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" class="woocommerce-LoopProduct-link">
<div class="stm_featured_product_price">
	<div class="price">
		<h5>₫2900000</h5>
	</div>
</div>

</a><a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" title="View course - Khóa học {{ $category->name }} Standard">
<img width="270" height="283" src="http://bim.edu.vn/wp-content/uploads/2016/04/MEP-Mechnical-system-270x283.jpg" class="img-responsive wp-post-image" alt="học {{ $category->name }} tại BIMhanoi">					</a>

</div>



<div class="stm_featured_product_body">
	<a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" title="View course - Khóa học {{ $category->name }} Standard">
		<div class="title">Khóa học {{ $category->name }} Standard</div>
	</a>

	<div class="expert">Giảng viên Bùi Quang Huy</div>
</div>

<div class="stm_featured_product_footer">
	<div class="clearfix">
		<div class="pull-left">

			<div class="stm_featured_product_comments">
				<i class="fa-icon-stm_icon_comment_o"></i><span>2</span>
			</div>


			<div class="stm_featured_product_stock">
				<i class="fa-icon-stm_icon_user"></i><span>39</span>
			</div>

		</div>
		<div class="pull-right">


			<span class="price"><span class="woocommerce-Price-amount amount">2.900.000<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
		</div>
	</div>

	<div class="stm_featured_product_show_more">
		<a class="btn btn-default" href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" title="Đọc tiếp">Đọc tiếp</a>
	</div>
</div>			

</div> <!-- stm_archive_product_inner_unit_centered -->		
</div> <!-- stm_archive_product_inner_unit -->
</li>



</ul>		
<div class="multiseparator grid"></div>




</div> <!-- stm_product_inner_grid_content -->
</div></div>			
<div class="col-lg-3 col-md-3 hidden-sm hidden-xs"><div class="sidebar-area sidebar-area-right">			<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_widgetised_column wpb_content_element">
		<div class="wpb_wrapper">
			
			<aside id="stm_widget_top_rated_products-2" class="widget stm_widget_top_rated_products"><div class="widget_title"><h3>BÀI VIẾT KHÁC</h3></div><ul class="stm_product_list_widget widget_woo_stm_style_2">				

				<li>
					<a href="http://bim.edu.vn/khoa-hoc/revit-mep-standard/" title="Khóa học {{ $category->name }} Standard">
						<img class="img-responsive" src="http://bim.edu.vn/wp-content/uploads/2016/04/MEP-Mechnical-system-75x75.jpg ">
						<div class="meta">
							<div class="title h5">Khóa học {{ $category->name }} Standard</div>								
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

						</select>
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
	</div></div></div></div>

</div></div></div>	</div> <!-- container -->
@endsection