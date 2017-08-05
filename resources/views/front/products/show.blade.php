@extends('front.layouts.master')
@section('content')
	<style>
		.select2-container {
			display: none;
		}
	</style>
<!-- Breads -->
<nav class="woocommerce-breadcrumb">		
	<div class="container">
		<a href="{{ route('front.index') }}">Trang chủ</a><i class="fa fa-chevron-right"></i><a href="{{ route('product_categories.show', $product->category? $product->category->slug : '') }}">{{ $product->category ? $product->category->name : '' }}</a><i class="fa fa-chevron-right"></i>Khóa học {{ $product->name }}		</div>

	</nav>
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
		
		<div class="row"><div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">			
			<div class="sidebar_position_right">



				<div itemscope="" itemtype="http://schema.org/Product" id="product-521" class="single_product_inner_content post-521 product type-product status-publish has-post-thumbnail product_cat-revit-mep product_tag-hoc-revit-mep product_tag-phan-mem-revit product_tag-phan-mem-revit-mep product_tag-revit-mep first instock virtual shipping-taxable purchasable product-type-simple">

					<div class="single_product_title"><h2 itemprop="name" class="product_title entry-title">Khóa học {{ $product->name }}</h2>
					</div>

					<div class="single_product_after_title">
						<div class="clearfix">
							<div class="pull-left meta_pull">
								<div class="pull-left">
									<a href="{{ route('teachers.show', $product->teacher ? $product->teacher->slug : '') }}">
										<div class="meta-unit teacher clearfix">
											<div class="pull-left">
												<i class="fa-icon-stm_icon_teacher"></i>
											</div>
											<div class="meta_values">
												<div class="label h6">Giảng viên</div>
												<div class="value h6">Giảng viên {{ $product->teacher ? $product->teacher->full_name : '' }}</div>
											</div>
										</div>
									</a>
								</div>

								<div class="pull-left xs-product-cats-left">
									<div class="meta-unit categories clearfix">
										<div class="pull-left">
											<i class="fa-icon-stm_icon_category"></i>
										</div>
										<div class="meta_values">
											<div class="label h6">Category:</div>
											<div class="value h6">
												<a href="{{ route('product_categories.show', $product->category? $product->category->slug : '') }}">{{ $product->category ? $product->category->name : '' }}<span>/</span></a>
											</div>
										</div>
									</div>
								</div>
								
							</div> <!-- meta pull -->

							<div class="pull-right xs-comments-left">


								<span class="price"><span class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
								<div class="meta-unit text-right xs-text-left">
									<div class="value h6">{{ $totalRate }} Đánh giá</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Images -->
					<div class="stm_woo_gallery-wrapper">
						<div class="images">
							<div class="stm_custom_product_gallery">


								<a href="{{ $product->image ? url($product->image) : '' }}" class="stm_fancybox stm_product_gallery_images active" data-custom="stm_slide-1629" rel="stm_product_gallery">
									<img width="600" height="500" src="{{ $product->image ? url($product->image) : '' }}" class="attachment-shop_single size-shop_single wp-post-image" alt="học {{ $product->category ? $product->category->name : '' }} tại BIMhanoi" title="học {{ $product->category ? $product->category->name : '' }} tại BIMhanoi">					</a>


									<!-- Gallery images -->
								</div>


							</div>
							<a href="#" class="gallery-prev gallery-btn hidden"><i class="fa fa-chevron-left"></i></a>
							<a href="#" class="gallery-next gallery-btn hidden"><i class="fa fa-chevron-right"></i></a>
						</div>
						<!-- Images END-->

						<!-- Sidebar visible sm and xs -->
						<div class="stm_product_meta_single_page visible-sm visible-xs">

							<div class="heading_font product_main_data">
								<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

									<p class="price heading_font">
										<label class="h6 stm_price_label">Học phí</label>
										<span class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span class="woocommerce-Price-currencySymbol">₫</span></span>		</p>

										<meta itemprop="price" content="2900000">
										<meta itemprop="priceCurrency" content="VND">
										<link itemprop="availability" href="http://schema.org/InStock">

									</div>

									<p class="stock in-stock">còn 39 hàng (can be backordered)</p>

								<a href="{{ route('register-course.index') }}?product_id={{ $product->id }}" class="single_add_to_cart_button button alt" style="padding-top: 25px;">Đăng ký khóa học</a>



								</div>


								<div class="stm_product_sidebar_meta_units">
									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_users"></i></td>
												<td class="value h5">{{ $numberOfStudent }} Học viên đăng ký</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->

									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_clock"></i></td>
												<td class="value h5">Giờ học: {{ $product->number_of_hour }} giờ</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->

									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_bullhorn"></i></td>
												<td class="value h5">Buổi học: {{ $product->number_of_day }} buổi</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->


									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_license"></i></td>
												<td class="value h5">{{ $product->certification }}</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->

								</div><!-- units -->
							</div>

							<!-- Content -->
							<div class="vc_row wpb_row vc_row-fluid vc_custom_1436877382226"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
								<div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<h3 style="margin-bottom: 21px;">GIỚI THIỆU KHÓA HỌC</h3>
										{!!html_entity_decode($product->intro)!!}

									</div>
								</div>
							</div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1435574544208"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_custom_heading"><h3 style="text-align: left">Khóa học mang đến kiến thức cho học viên về</h3></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1435305038672"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
							<div class="wpb_text_column wpb_content_element ">
								<div class="wpb_wrapper">
									{!!html_entity_decode($product->about)!!}
								</div>
							</div>
						</div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1435574551925"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_custom_heading"><h3 style="text-align: left">Ai nên tham gia?</h3></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								{!!html_entity_decode($product->target_people)!!}

							</div>
						</div>
					</div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1435574600454"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1435574626206"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
					<div class="multiseparator"></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1435385624281"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_custom_heading"><h3 style="text-align: left">Nội dung khóa học</h3></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
					<div class="course_lessons_section">
						<div class="panel-group" id="accordion_6" role="tablist" aria-multiselectable="true">

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading_tab958">
									<div class="course_meta_data">
										<div class="panel-title">
											<a class="collapsed tapable" role="button" data-toggle="collapse" href="#tab958" aria-expanded="false" aria-controls="collapseOne">
												<table class="course_table">
													<tbody><tr>
														<td class="number"></td>

														<td class="icon">
															<i class="fa fa fa-file"></i>
														</td>

														<td class="title">

															<div class="course-title-holder">
																<strong>{{ $product->name }}</strong>
																<i class="fa fa-sort-down"></i>									
															</div>

														</td>

														<td class="stm_badge">

															<div class="meta">
																<i class="fa fa fa-paperclip"></i>
																PDF file									</div>
																
															</td>
														</tr>
													</tbody></table>
												</a>
											</div>
										</div>
									</div>
									<div id="tab958" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_tab958">
										<div class="panel-body">
											<div class="course-panel-body">
												Dưới đây là file Pdf chi tiết nội dung, lộ trình khóa học {{ $product->name }}<p></p>
												<p>Cám ơn bạn đã tham khảo chương trình học của {!! app_settings('company') !!}</p>
												<p><a href="{{ $product->content ? url($product->content) : '' }}" target="_blank">Download PDF</a>				</p></div>
											</div>
										</div>
									</div>		</div>
								</div>
							</div></div></div></div>
							<!-- Content END -->

							<div class="multiseparator"></div>

							<!-- Teacher -->
							<h3 class="teacher_single_product_page_title">Giảng viên</h3>
							<div class="teacher_single_product_page clearfix">
								<a href="{{ route('teachers.show', $product->teacher ? $product->teacher->slug : '') }}" title="Watch Expert Page">
									<img style="width: 100px; height: 100px;" class="img-responsive" src="{{ url($product->teacher ? $product->teacher->image : '') }}">
									<div class="title h4">Giảng viên {{ $product->teacher ? $product->teacher->full_name : '' }}</div>
									<label class="job">{{ $product->category ? $product->category->name : '' }}</label>
								</a>
								<div class="expert_socials">
									<div class="clearfix heading_font">
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="content">
									{!! html_entity_decode($product->teacher ? $product->teacher->slogan : '') !!}
								</div>
							</div>
							<div class="multiseparator"></div>
							<!-- Teacher END-->

							<!-- Teacher 2 -->
							<!-- Teacher 2 END-->


							<!-- Reviews -->
							<h3 class="woo_reviews_title">Đánh giá</h3>
							<div class="clearfix">
								<!-- Reviews Average ratings -->
								<div class="average_rating">
									<p class="rating_sub_title">Trung bình hạng</p>
									<div class="average_rating_unit heading_font">
										<div class="average_rating_value">{{ $totalRate ? (($arrRate[1]*1 + $arrRate[2]*2 + $arrRate[3]*3 + $arrRate[4]*4 + $arrRate[5]*5)/$totalRate) : '' }}</div>
										<div class="average-rating-stars">


											<span class="price"><span class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
										</div>
										<div class="average_rating_num">
											{{ $totalRate }} Xếp hạng					</div>
										</div>
									</div>
									<!-- Reviews Average ratings END -->

									<!-- Review detailed Rating -->
									<div class="detailed_rating">
										<p class="rating_sub_title">Detailed Rating</p>
										<table class="detail_rating_unit">
											<tbody><tr class="stars_5">
												<td class="key">Sao 5</td>
												<td class="bar">
													<div class="full_bar">
														<div class="bar_filler" style="width:{{ $totalRate ? ($arrRate[5]/$totalRate)*100 : '' }}%"></div>
													</div>
												</td>
												<td class="value">{{ $arrRate[5] }}</td>
											</tr>
											<tr class="stars_4">
												<td class="key">Sao 4</td>
												<td class="bar">
													<div class="full_bar">
														<div class="bar_filler" style="width:{{ $totalRate ? ($arrRate[4]/$totalRate)*100 : '' }}%"></div>
													</div>
												</td>
												<td class="value">{{ $arrRate[4] }}</td>
											</tr>
											<tr class="stars_3">
												<td class="key">Sao 3</td>
												<td class="bar">
													<div class="full_bar">
														<div class="bar_filler" style="width:{{ $totalRate ? ($arrRate[3]/$totalRate)*100 : '' }}%"></div>
													</div>
												</td>
												<td class="value">{{ $arrRate[3] }}</td>
											</tr>
											<tr class="stars_2">
												<td class="key">Sao 2</td>
												<td class="bar">
													<div class="full_bar">
														<div class="bar_filler" style="width:{{ $totalRate ? ($arrRate[2]/$totalRate)*100 : '' }}%"></div>
													</div>
												</td>
												<td class="value">{{ $arrRate[2] }}</td>
											</tr>
											<tr class="stars_1">
												<td class="key">Sao 1</td>
												<td class="bar">
													<div class="full_bar">
														<div class="bar_filler" style="width:{{ $totalRate ? ($arrRate[1]/$totalRate)*100 : '' }}%"></div>
													</div>
												</td>
												<td class="value">{{ $arrRate[1] }}</td>
											</tr>
										</tbody></table>
									</div>
									<!-- Review detailed Rating END -->
								</div> <!-- clearfix -->
								<div class="multiseparator"></div>
								<div id="reviews">
									<div id="comments" class="comments-area stm_woo_comments">

										<ul class="comment-list list-unstyled" id="comment-list">
											@include('front.layouts.comment_list', ['comments' => $comments])
											<!-- #comment-## -->
										</ul>
									</div>
											<div class="multiseparator"></div>


									<div id="review_form_wrapper">
										<div id="review_form" class="stm_woo_review_form">
											<div id="respond" class="comment-respond">
												<h3 id="reply-title" class="comment-reply-title">Thêm đánh giá
													<small><a rel="nofollow" id="cancel-comment-reply-link"
															  href="/khoa-hoc/revit-mep-standard/#respond"
															  style="display:none;">Hủy</a></small>
												</h3>
												<form action="{{ route('comment.store') }}" method="post"
													  id="commentform" class="comment-form" novalidate="">
													{!! csrf_field() !!}
													<div class="row">
														<div class="col-md-6 col-sm-6">
															<div class="form-group"><input class="form-control"
																						   id="author" name="name"
																						   type="text" value=""
																						   size="30"
																						   aria-required="true"
																						   placeholder="Tên *"></div>
														</div>
														<div class="col-md-6 col-sm-6">
															<div class="form-group"><input class="form-control"
																						   id="email" name="email"
																						   type="text" value=""
																						   size="30"
																						   aria-required="true"
																						   placeholder="E-mail *"></div>
														</div>
													</div>
													<p class="comment-form-rating woo_stm_rating_fields"><label
																for="rating">Đánh giá của bạn</label>

													<p class="stars hide"><span><a class="star-1" href="#">1</a><a
																	class="star-2" href="#">2</a><a class="star-3"
																									href="#">3</a><a
																	class="star-4" href="#">4</a><a class="star-5"
																									href="#">5</a></span>
													</p>

													<div id="shop"></div>

													<select name="rate_number" id="rating"
																class="hidden select2-hidden-accessible"
																style="display: none;" tabindex="-1" aria-hidden="true">
														<option value="">Xếp hạng…</option>
														<option value="5">Rất tốt</option>
														<option value="4">Tốt</option>
														<option value="3">Trung bình</option>
														<option value="2">Không tệ</option>
														<option value="1">Rất Tệ</option>
													</select>

													</p>
													<div class="form-group">
														<textarea class="form-control" id="comment" name="comment"
																  cols="45" rows="8" aria-required="true"
																  placeholder="Đánh giá của bạn *"></textarea></div>
													<p class="form-submit">
														<input id="submit" class="submit"
															   value="Gửi đi">
														<input type="hidden" name="product_id" value="{{ $product->id }}"
															   id="comment_post_ID">
														<input type="hidden" name="comment_parent" id="comment_parent"
															   value="0">
													</p></form>
											</div>
											<!-- #respond -->
										</div>
									</div>


									<div class="clear"></div>
								</div>

								<!-- Reviews END -->

								<meta itemprop="url" content="{{ route('products.show', $product->slug) }}">

							</div><!-- #product-521 -->


						</div>

					</div>		
					<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">		
						<div class="stm_product_meta_single_page right">


							<div class="heading_font product_main_data">
								<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

									<p class="price heading_font">
										<label class="h6 stm_price_label">Học phí</label>
										<span class="woocommerce-Price-amount amount">{{ number_format($product->price) }}<span class="woocommerce-Price-currencySymbol">₫</span></span>		</p>

										<meta itemprop="price" content="2900000">
										<meta itemprop="priceCurrency" content="VND">
										<link itemprop="availability" href="http://schema.org/InStock">

									</div>

									<p class="stock in-stock">còn 39 hàng (can be backordered)</p>



									{{--<form class="cart" method="post" enctype="multipart/form-data">--}}

										{{--<div class="quantity"><input type="number" step="1" min="1" name="quantity" value="1" title="SL" class="input-text qty text" size="4"></div>--}}

										{{--<input type="hidden" name="add-to-cart" value="521">--}}

										{{--<button type="submit" class="single_add_to_cart_button button alt">Đăng ký khóa học</button>--}}

									{{--</form>--}}
								<a href="{{ route('register-course.index') }}?product_id={{ $product->id }}" class="single_add_to_cart_button button alt" style="padding-top: 25px;">Đăng ký khóa học</a>



								</div>


								<div class="stm_product_sidebar_meta_units">
									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_users"></i></td>
												<td class="value h5">{{ $numberOfStudent }} Học viên đăng ký</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->

									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_clock"></i></td>
												<td class="value h5">Giờ học: {{ $product->number_of_hour }} giờ</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->

									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_bullhorn"></i></td>
												<td class="value h5">Buổi học: {{ $product->number_of_day }} buổi</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->


									<div class="stm_product_sidebar_meta_unit">
										<table>
											<tbody><tr>
												<td class="icon"><i class="fa-icon-stm_icon_license"></i></td>
												<td class="value h5">{{ $product->certification }}</td>
											</tr>
										</tbody></table>
									</div> <!-- unit -->

								</div><!-- units -->

							</div>

							<div class="shop_sidebar_single_page sidebar-area sidebar-area-right">
								<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
									<div class="wpb_widgetised_column wpb_content_element">
										<div class="wpb_wrapper">

											<aside id="stm_widget_top_rated_products-2" class="widget stm_widget_top_rated_products"><div class="widget_title"><h3>BÀI VIẾT KHÁC</h3></div>
												<ul class="stm_product_list_widget widget_woo_stm_style_2">				
													@include('front.layouts.other_products', ['items' => $otherProducts])

												</ul>
											</aside><aside id="archives-3" class="widget widget_archive"><div class="widget_title"><h3>TÌM THEO THỜI GIAN</h3></div>		<label class="screen-reader-text" for="archives-dropdown-3">TÌM THEO THỜI GIAN</label>
											<select id="archives-dropdown-3" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">

												<option value="">Chọn tháng</option>
												<option value=""> Tháng Ba 2017 </option>
												<option value=""> Tháng Hai 2017 </option>
												<option value=""> Tháng Tám 2016 </option>
												<option value=""> Tháng Bảy 2016 </option>
												<option value=""> Tháng Sáu 2016 </option>
												<option value=""> Tháng Năm 2016 </option>
												<option value=""> Tháng Tư 2016 </option>
												<option value=""> Tháng Ba 2016 </option>
												<option value=""> Tháng Hai 2016 </option>
												<option value=""> Tháng Năm 2015 </option>
												<option value=""> Tháng Ba 2015 </option>

											</select>
										</aside>
										@include('front.layouts.week_working_hour')
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
@section('inline_scripts')
	<script>
		(function() {

			'use strict';

			// SHOP ELEMENT
			var shop = document.querySelector('#shop');

			// DUMMY DATA
			var data = [
				{
					title: null,
					description: null,
					rating: null
				}
			];

			// INITIALIZE
			(function init() {
				for (var i = 0; i < data.length; i++) {
					addRatingWidget(buildShopItem(data[i]), data[i]);
				}
			})();

			// BUILD SHOP ITEM
			function buildShopItem(data) {
				var shopItem = document.createElement('div');

				var html = '<div class="c-shop-item__img"></div>' +
						'<div class="c-shop-item__details">' +
						'<ul class="c-rating"></ul>' +
						'</div>';

				shopItem.classList.add('c-shop-item');
				shopItem.innerHTML = html;
				shop.appendChild(shopItem);

				return shopItem;
			}

			// ADD RATING WIDGET
			function addRatingWidget(shopItem, data) {
				var ratingElement = shopItem.querySelector('.c-rating');
				var currentRating = data.rating;
				var maxRating = 5;
				var callback = function(rating) {
					document.getElementById('rating').value=rating;
				};
				var r = rating(ratingElement, currentRating, maxRating, callback);
			}

		})();
	</script>
     <script type="text/javascript">
	var button = document.getElementById( 'submit' );
	var form = document.getElementById( 'commentform' );
		button.addEventListener( 'click', function( e )
    {
		var ajaxData = new FormData( form );
        // ajax request
        var ajax = new XMLHttpRequest();
        ajax.open( form.getAttribute( 'method' ), form.getAttribute( 'action' ), true );

        ajax.onload = function()
        {
            if( ajax.status >= 200 && ajax.status < 400 )
            {
                var data = JSON.parse( ajax.responseText );
                form.classList.add( data.success == true ? 'is-success' : 'is-error' );
				var html = "<li itemprop=\"review\" itemscope=\"\" itemtype=\"http://schema.org/Review\" class=\"comment even thread-odd thread-alt depth-1\" id=\"li-comment-template\"> <div id=\"comment-1785\" class=\"comment_container\"> <div class=\"stm_review_author_name\"> <h4 itemprop=\"author\">"+data.name+" </h4> </div> <img alt=\"\" src=\"http://0.gravatar.com/avatar/97b8a6e9cde37574ed0ce585db644a28?s=75&amp;d=mm&amp;r=g\" srcset=\"http://0.gravatar.com/avatar/97b8a6e9cde37574ed0ce585db644a28?s=150&amp;d=mm&amp;r=g 2x\" class=\"avatar avatar-75 photo\" height=\"75\" width=\"75\"> <div class=\"comment-text\"> <div itemprop=\"reviewRating\" itemscope=\"\" itemtype=\"http://schema.org/Rating\" class=\"star-rating\" title=\"Xếp hạng 3 / 5\"> <span style=\"width:"+(parseInt(data.rate_number)/5)*100+"%\"><strong itemprop=\"ratingValue\">"+parseInt(data.rate_number)+"</strong> trên 5</span> </div> <p class=\"meta\"><em>Bình luận của bạn đang chờ được kiểm duyệt</em></p> <div itemprop=\"description\" class=\"description\"><p>"+data.comment+"</p> </div> </div> </div> </li>";
				var div = document.getElementById('comment-list');
				div.innerHTML += html;
				document.getElementById('author').value='';
				document.getElementById('comment').value='';
				document.getElementById('rating').value='';
				document.getElementById('email').value='';
            }
            else console.log( 'Error. Please, contact the webmaster!' );
        };

        ajax.onerror = function()
        {
            form.classList.remove( 'is-uploading' );
            alert( 'Error. Please, try again!' );
        };
        ajax.send( ajaxData );
    });
     </script>
@endsection