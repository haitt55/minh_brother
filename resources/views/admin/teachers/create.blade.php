@extends('admin.layouts.master')

@section('title', 'Thêm giáo viên')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới giáo viên</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách giáo viên</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.teachers.store') }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name">Tên giáo viên <span class="required">(*)</span></label>
                                    <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name') }}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="image">Ảnh <span class="required">(*)</span></label>
                                    <input type="file" id="image" name="image" accept="image/*">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="display-image col-md-12">
                                            <img class="thumbnail" style="max-width: 200px;" id="image_preview" src="" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="intro">Giới thiệu <span class="required">(*)</span></label>
                                    <textarea name="intro" id="intro">{{ old('intro') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="slogan">Slogan <span class="required">(*)</span></label>
                                    <textarea name="slogan" id="name" class="form-control" value="{{ old('slogan') }}">{{ old('slogan') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection
@section('inline_scripts')
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'intro' );
    </script>
    <script>
        $(function() {

            $("#image").change(function(){
                readURL(this, 'image_preview');
            });
        });
        function readURL(input, targetID) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#' + targetID).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection