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
            <a href="{{ route('blog-categories.index') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách</a>
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
                            <form method="POST" action="{{ route('blog-categories.update', $blogCategory->id) }}" role="form">
                                @include('admin.layouts.partials.errors')
                                {{ csrf_field() }}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="name">Tên danh mục</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $blogCategory->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Danh mục cha</label>
                                    <select type="text" name="parent_id" id="parent_id" class="form-control" value="{{ old('parent_id') }}">
                                        <option value="0">--</option>
                                        @foreach($categoryOptions as $key => $value)
                                            <option value="{{ $key }}" {{ $key == $blogCategory->parent_id ? 'selected' : '' }}>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="active" id="active" value="1" {{ old('active', $blogCategory->active) ? ' checked="checked"' : '' }}> Active</label>
                                    </div>
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
