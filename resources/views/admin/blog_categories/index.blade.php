@extends('admin.layouts.master')

@section('title', 'Danh mục khóa học')

@section('css')
@parent

        <!-- DataTables CSS -->
<link href="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="/templates/admin/sbadmin2/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-success" style="margin-top: 10px; margin-bottom: 0px;">
            <ul>
                <li>{{session('message')}}</li>
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục khóa học</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('blog-categories.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm danh mục mới</a>
        </div>
    </div>
    <br />

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách danh mục sản phẩm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-categories">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $index = 0; ?>
                                    @foreach ($categoryTree as $category)
                                        <?php $index ++; ?>
                                        <tr>
                                            <td width="10%">#</td>
                                            <td class="text-left">
                                                <a href="{{ route('blog-categories.show', $category->id) }}"> {{ $category->name }}</a>
                                            </td>
                                            <td width="10%">
                                                <span class="label {{ $category->active ? 'label-success' : 'label-danger' }}">{{ $category->active ? 'active' : 'inactive' }}</span>
                                            </td>
                                            <td width="20%">
                                                <a href="{{ route('blog-categories.edit', $category->id) }}" class="btn btn-info" title="Sửa" style="float: left; margin-right: 2%"><i class="fa fa-edit"></i> Sửa</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['blog-categories.destroy', $category->id] ]) !!}
                                                    <button type="submit" class = 'btn btn-danger' onclick = 'return confirm("Bạn chắc chắn muốn xóa?");'><i class="fa fa-close"></i> Xóa</button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection

    @section('javascript')
    @parent

        <!-- DataTables JavaScript -->
    <script src="/templates/admin/sbadmin2/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/templates/admin/sbadmin2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#dataTables-categories").DataTable({
                responsive: true,
                "pageLength": 100,
                "aoColumns": [
                    { bSortable: false },
                    null,
                    { bSortable: false }
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Vietnamese.json"
                }
            });
        });
    </script>

    <script type="text/javascript">
        var indexUrl = '{{ URL::route('blog-categories.index') }}';
    </script>
@endsection
