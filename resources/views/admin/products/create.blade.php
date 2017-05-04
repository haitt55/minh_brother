@extends('admin.layouts.master')

@section('title', 'thêm khóa học mới')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới khóa học</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.products.index') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách khóa học</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.products.store') }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name">Tên khóa học <span class="required">(*)</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('category_id', 'Danh mục') }}
                                    {{ Form::select('category_id', $categoryOptions, null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('teacher_id', 'Giáo viên') }}
                                    {{ Form::select('teacher_id', $teacherOptions, null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá </label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Ảnh header</label>
                                    <input type="file" id="image" name="image" accept="image/*">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="display-image col-md-12">
                                            <img class="thumbnail" style="max-width: 200px;" id="image_preview" src="" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="intro">Giới thiệu</label>
                                    <textarea name="intro" id="intro">{{ old('intro') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="about">Bao gồm kiến thức về</label>
                                    <textarea name="about" id="about">{{ old('about') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="target_people">Ai nên tham gia?</label>
                                    <textarea name="target_people" id="target_people">{{ old('target_people') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Nội dung (file pdf)</label>
                                    <input type="file" id="content" name="content">
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
        CKEDITOR.replace( 'about' );
        CKEDITOR.replace( 'target_people' );
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