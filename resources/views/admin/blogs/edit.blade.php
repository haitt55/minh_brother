@extends('admin.layouts.master')

@section('title', trans('blogs.title.edit'))
@section('css')
    @parent

    <!-- DataTables CSS -->
    <link href="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/templates/admin/sbadmin2/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('blogs.title.edit') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('blogs.index') }}" class="btn btn-success"><i class="fa fa-list"></i>{{ trans('blogs.list') }}</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('blogs.update', $blog->id) }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="name">{{ trans('blogs.attribute.name') }} <span class="required">(*)</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $blog->name) }}">
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
                                            <img class="thumbnail" style="max-width: 200px;" id="image_preview" src="{{ $blog->image ? asset($blog->image) : asset(config('custom.no_image')) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content">{{ trans('blogs.attribute.content') }}</label>
                                    <textarea name="content" id="content">{{ old('content', $blog->content) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">{{ trans('blogs.attribute.page_title') }}</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title', $blog->page_title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">{{ trans('blogs.attribute.meta_keyword') }}</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword', $blog->meta_keyword) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">{{ trans('blogs.attribute.meta_description') }}</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description', $blog->meta_description) }}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1"><button type="submit" class="btn btn-primary">{{ trans('common.button.save') }}</button></div>
                                    <div class="col-md-1">
                                        <button style="@if($blog->is_current)pointer-events:none; opacity: 0.6; @endif"
                                                class="btn btn-danger" id="btn-delete" data-link="{{ route('blogs.destroy', $blog->id) }}"><i class="fa fa-remove"></i>{{ trans('common.button.delete') }}</button></div>
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
    <script src="/templates/admin/sbadmin2/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('js/clipboard.js/dist/clipboard.js')}}"></script>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn-delete").click(function() {
                if (confirm('Do you really want to delete this data?')) {
                    var url = $(this).attr('data-link');
                    $.ajax({
                        url : url,
                        type : 'DELETE',
                        beforeSend: function (xhr) {
                            var token = $('meta[name="csrf_token"]').attr('content');
                            if (token) {
                                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                            }
                        },
                        success: function(data) {
                            if (data.error) {
                                window.location.href = '{{ URL::route('blogs.edit', $blog->id) }}';
                            } else {
                                window.location.href = '{{ URL::route('blogs.index') }}';
                            }
                        },
                        error: function(data) {
                            window.location.href = '{{ URL::route('blogs.index') }}';
                        }
                    });
                }
            });
        });
    </script>
@endsection
