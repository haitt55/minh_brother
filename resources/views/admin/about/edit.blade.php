@extends('admin.layouts.master')

@section('title', 'Sửa trang about')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa nội dung</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.about.store') }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                
                                <div class="form-group">
                                    <label for="title">Tiêu đề </label>
                                    <input type="text" name="title" id="link_youtube" class="form-control" value="{{ old('title', $about->title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="intro">Giới thiệu <span class="required">(*)</span></label>
                                    <textarea name="intro" id="intro">{{ old('intro', $about->intro) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="link_youtube">Link youtube</label>
                                    <input type="text" name="link_youtube" id="link_youtube" class="form-control" value="{{ old('link_youtube', $about->link_youtube) }}">
                                </div>
                                <div class="form-group">
                                    <label for="teaacher">Giáo viên </label>
                                    <div class="col-md-12">
                                    @foreach ($teachers as $teacher)
                                        <div class=" col-md-3" style="margin-bottom: 20px">
                                            <input name="teacher_id[]" value="{{ $teacher->id }}" id="teacher-{{ $teacher->id }}" type="checkbox" <?= in_array($teacher->id, explode(',', $about->teacher_id)) ? 'checked' : null ?> style="float: left; margin-right: 5px">
                                            <label for="teacher-{{ $teacher->id }}">
                                                <div style="height: 100px">
                                                    <img class="thumbnail" style="max-width: 100px;" id="image_preview" src="{{ $teacher->image ? asset($teacher->image) : asset(config('custom.no_image')) }}" alt="">
                                                </div>
                                                <span>{{ $teacher->full_name }}</span>
                                            </label>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label for="certificate">Chứng chỉ <span class="required"></span></label>
                                    <textarea name="certificate" id="certificate">{{ old('certificate', $about->certificate) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="intro_edu">Phòng đào tạo <span class="required"></span></label>
                                    <textarea name="intro_edu" id="intro_edu">{{ old('intro_edu', $about->intro_edu) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" data-role="tagsinput" value="{{ old('meta_keyword', $about->meta_keyword) }}">
                                    <span class="help-block">Mỗi tag cách nhau dấu phẩy ( , )</span>
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" data-role="tagsinput" value="{{ old('meta_description', $about->meta_description) }}">
                                    <span class="help-block">Mỗi tag cách nhau dấu phẩy ( , )</span>
                                </div>
                                <div class="form-group">
                                    <input name="edit_flg" value="1" type="hidden">
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
        $('#wrapper').on('keypress', function(e){
            if (e.keyCode == 13){
                e.keyCode = 188;
                e.preventDefault();
            };
        });
        
        var editorConfig = {
            // Define changes to default configuration here. For example:  
            language: 'vi',
            uiColor: '#e0e0e0',
            filebrowserBrowseUrl: '/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files',
            filebrowserImageBrowseUrl: '/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images',
            filebrowserFlashBrowseUrl: '/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash',
            filebrowserUploadUrl: '/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files',
            filebrowserImageUploadUrl: '/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images',
            filebrowserFlashUploadUrl: '/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash',
        };
        CKEDITOR.replace( 'intro', editorConfig );
        CKEDITOR.replace( 'intro_edu', editorConfig );
        CKEDITOR.replace( 'certificate', editorConfig );
    </script>
@endsection