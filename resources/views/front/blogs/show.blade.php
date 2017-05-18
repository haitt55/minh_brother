@extends('front.layouts.master')

@section('content')
    <div class="stm_single_post">
        <!-- Title -->
        <div class="entry-header clearfix" style="">
            <div class="container">
                <div class="entry-title-left">
                    <div class="entry-title">
                        <h1 style="">{!! $blog->name !!}</h1>
                    </div>
                </div>
                <div class="entry-title-right"> </div>
            </div>
        </div>
    <!-- Breads -->
        <div class="stm_breadcrumbs_unit">
            <div class="container">
                <div class="navxtBreads">
                <!-- Breadcrumb NavXT 5.6.0 -->
					<span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to BIMhanoi." href="{!! route('front.index') !!}" class="home">
                            <span property="name">Trang chủ</span>
                        </a>
                        <meta property="position" content="1">
                    </span> &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to Library." href="{!! route('blog-menu.index', $blog->blogCategory->parent->slug) !!}" class="post post-ebim_library-archive">
                            <span property="name">{!! $blog->blogCategory->parent->name !!}</span>
                        </a>
                        <meta property="position" content="2">
                    </span> &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="Go to the Đồ án BIM Library Category archives." href="{!! route('blog-category.show', [$blog->blogCategory->parent->slug, $blog->blogCategory->slug]) !!}" class="taxonomy ebim_library_cat">
                            <span property="name">{!! $blog->blogCategory->name !!}</span>
                        </a>
                        <meta property="position" content="3">
                    </span> &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">{!! $blog->name !!}</span>
                        <meta property="position" content="4">
                    </span>
				</div>
        	</div>
        </div>
        <div class="container blog_main_layout_list">
        	<div class="row">
        		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        			<div class="blog_layout_list sidebar_position_right">
			            <div class="stm_post_unit">
			            	{!! $blog->content !!}
                        </div>
			            <!-- stm_post_unit -->
			            <div class="row mg-bt-10">
			                <div class="col-md-8 col-sm-8">
			                    <div class="stm_post_tags widget_tag_cloud"></div>
			                </div>
			                <div class="col-md-4 col-sm-4">
			                    <div class="pull-right xs-pull-left">
			                        <div class="stm_share">
			                            <label>Share:</label>
			                            <span class='st_facebook_large' displayText=''></span>
			                            <span class='st_twitter_large' displayText=''></span>
			                            <span class='st_googleplus_large' displayText=''></span>
			                            <script type="text/javascript">var switchTo5x = true;</script>
			                            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			                            <script type="text/javascript">stLight.options({
			                                    doNotHash: false,
			                                    doNotCopy: false,
			                                    hashAddressBar: false
			                                });</script>
			                        </div>
			                    </div>
			                </div>
			            </div>
            			<!-- row -->
        				<div class="multiseparator"></div>
                        <div class="stm_post_comments">
							<div id="comments" class="comments-area">
								<div id="respond" class="comment-respond">
									<h3 id="reply-title" class="comment-reply-title">Trả lời
										<small>
											<a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Hủy</a>
										</small>
									</h3>
									<form action="http://bim.edu.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group comment-form-author">
							            			<input placeholder="Họ tên *" class="form-control" name="author" type="text" value="" size="30" aria-required='true' />
						                        </div>
						                    </div>
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group comment-form-email">
													<input placeholder="E-mail *" class="form-control" name="email" type="email" value="" size="30" aria-required='true' />
												</div>
											</div>
										</div>
										<div class="form-group comment-form-comment">
							        		<textarea placeholder="Message *" class="form-control" name="comment" rows="9" aria-required="true"></textarea>
								  		</div>
								  		<p class="form-submit">
								  			<input name="submit" type="submit" id="submit" class="submit" value="Phản hồi" />
								  			<input type='hidden' name='comment_post_ID' value='3220' id='comment_post_ID' />
											<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
										</p>
									</form>
								</div><!-- #respond -->
							</div>
						</div>
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
												@include('front.layouts.blog_recent')
												@include('front.layouts.search_form')
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
	</div>
@endsection
