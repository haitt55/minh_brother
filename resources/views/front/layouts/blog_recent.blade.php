<aside id="stm_recent_posts-2" class="widget widget_stm_recent_posts">
	<div class="widget_title"><h3>Bài viết gần đây</h3></div>
		@foreach($__recentBlogs as $recentBlog)
	<div class="widget_media clearfix">
			<a href="../2017/03/06/3212/index.html">
				<img width="63" height="50" src="{!! $recentBlog->image !!}" class="img-responsive wp-post-image" alt="{!! $recentBlog->name !!}" srcset="{!! $recentBlog->image !!} 63w, {!! $recentBlog->image !!} 480w" sizes="(max-width: 63px) 100vw, 63px" />
				<span class="h6">{!! $recentBlog->name !!}</span>
			</a>
			<div class="cats_w">
				<a href="{!! route('blog-category.show', [$recentBlog->blogCategory->parent->slug, $recentBlog->blogCategory->slug]) !!}">{!! $recentBlog->blogCategory->name !!}</a><span class="comma">,</span>
			</div>
	</div>
		@endforeach
</aside>
