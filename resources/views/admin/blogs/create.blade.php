@extends('admin.layouts.master')

@section('title', trans('blogs.title.create'))

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('blogs.title.create') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('blogs.index') }}" class="btn btn-success"><i class="fa fa-list">{{ trans('blogs.list') }}</i></a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('blogs.store') }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name">{{ trans('blogs.attribute.name') }}<span class="required"> (*)</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="blog_category_id">{{ trans('blogs.attribute.category') }}<span class="required"> (*)</span></label>
                                    <select type="text" name="blog_category_id" id="blog_category_id" class="form-control" value="{{ old('blog_category_id') }}">
                                        <option value="">--</option>
                                        @foreach($categoryOptions as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">{{ trans('blogs.attribute.image') }}</label>
                                    <input type="file" id="image" name="image" accept="image/*">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="display-image col-md-12">
                                            <img class="thumbnail" style="max-width: 200px;" id="image_preview" src="" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content">{{ trans('blogs.attribute.content') }}</label>
                                    <textarea name="content" id="content">{{ old('content') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">{{ trans('blogs.attribute.page_title') }}</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">{{ trans('blogs.attribute.meta_keyword') }}</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">{{ trans('blogs.attribute.meta_description') }}</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ trans('blogs.attribute.name') }}</button>
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
        CKEDITOR.replace( 'content' );
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
