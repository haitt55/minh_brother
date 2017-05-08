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
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục khóa học</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.product_categories.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm danh mục mới</a>
        </div>
    </div>
    <br />

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách danh mục khóa học
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
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $index = 0; ?>
                                    @foreach ($categories as $category)
                                        <?php $index ++; ?>
                                        <tr>
                                            <td>#</td>
                                            <td class="text-left">{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.product_categories.edit', $category->id) }}" class="btn btn-info" title="Sửa"><i class="fa fa-edit"></i> Sửa</a>
                                                <button class="btn btn-danger btn-delete" data-link="{{ route('admin.product_categories.destroy', $category->id) }}" onclick="delete_item(this);"><i class="fa fa-remove"></i> Xóa</button>
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
                ]
            });
        });
    </script>

    <script type="text/javascript">
        var indexUrl = '{{ URL::route('admin.product_categories.index') }}';
    </script>
@endsection
