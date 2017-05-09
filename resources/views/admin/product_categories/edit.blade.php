@extends('admin.layouts.master')

@section('title', 'Danh mục khóa học')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục khóa học</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.product_categories.index') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sửa danh mục
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.product_categories.update', $product_category->id) }}" role="form">
                                @include('admin.layouts.partials.errors')
                                {{ csrf_field() }}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="name">Tên danh mục <span class="required">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product_category->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Mô tả</label>
                                    <textarea name="description" id="description">{{ old('description', $product_category->description) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note">{{ old('note', $product_category->note) }}</textarea>
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
        <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js">
    </script>
    <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'note' );
    </script>
@endsection
