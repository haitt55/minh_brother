@extends('admin.layouts.master')

@section('title', 'chỉnh sửa dự án')
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
            <h1 class="page-header">Chỉnh sửa sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.products.index') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách dự án</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.products.update', $product->id) }}" role="form" enctype="multipart/form-data">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="name">Tên khóa học <span class="required">(*)</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('category_id', 'Danh mục') }}
                                    {{ Form::select('category_id', $categoryOptions, $product->category_id, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('teacher_id', 'Giáo viên') }}
                                    {{ Form::select('teacher_id', $teacherOptions, $product->teacher_id, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá </label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Ảnh header</label>
                                    <input type="file" id="image" name="image" accept="image/*">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="display-image col-md-12">
                                            <img class="thumbnail" style="max-width: 200px;" id="image_preview" src="{{ $product->image ? asset($product->image) : asset(config('custom.no_image')) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="intro">Giới thiệu</label>
                                    <textarea name="intro" id="intro">{{ old('intro', $product->intro) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="about">Bao gồm kiến thức về</label>
                                    <textarea name="about" id="about">{{ old('about', $product->about) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="target_people">Ai nên tham gia?</label>
                                    <textarea name="target_people" id="target_people">{{ old('target_people', $product->target_people) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Nội dung (file pdf)</label>
                                    <input type="file" id="content" name="content">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-12">
                                            <p>{{ $product->content ? asset($product->content) : 'chưa có file nào được chọn'  }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title', $product->page_title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword', $product->meta_keyword) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description', $product->meta_description) }}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1"><button type="submit" class="btn btn-primary">Lưu</button></div>
                                    <div class="col-md-1">
                                        <button style="@if($product->is_current)pointer-events:none; opacity: 0.6; @endif"
                                                class="btn btn-danger" id="btn-delete" data-link="{{ route('admin.products.destroy', $product->id) }}"><i class="fa fa-remove"></i> Xóa sản phẩm</button></div>
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
                                window.location.href = '{{ URL::route('admin.products.edit', $product->id) }}';
                            } else {
                                window.location.href = '{{ URL::route('admin.products.index') }}';
                            }
                        },
                        error: function(data) {
                            window.location.href = '{{ URL::route('admin.products.index') }}';
                        }
                    });
                }
            });
        });
    </script>
@endsection