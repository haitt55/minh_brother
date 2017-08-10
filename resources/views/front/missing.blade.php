@extends('front.layouts.master')
@section('page_title', 'Page not found!')
@section('meta_description', app_settings('meta_description'))

@section('content')

    <div class="error_page">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
		        <div class="heading_font">
		            <div class="error_404">404</div>
		            <div class="h2">Trang bạn tìm kiếm không tồn tại.</div>
		        </div>
		        <a href="/" class="btn btn-default">TRỞ LẠI TRANG CHỦ</a>
	        </div>
	    </div>
	</div>
</div>

@endsection
