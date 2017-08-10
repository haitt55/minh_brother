@extends('admin.layouts.master')
@section('title', 'Danh sách giáo viên')

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
            <h1 class="page-header">Danh sách giáo viên</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('admin.teachers.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm giáo viên</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách giáo viên
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-teachers">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 6%">Ảnh</th>
                                        <th style="width: 15%">Tên</th>
                                        <th style="width: 34%">Thông tin</th>
                                        <th style="width: 20%">Slogan</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td><img class="thumbnail" style="max-width: 100px;" id="image_preview" src="{{ $teacher->image ? asset($teacher->image) : asset(config('custom.no_image')) }}" alt=""></td>
                                            <td><a href="{{ route('admin.teachers.edit', $teacher->id) }}">{{ $teacher->full_name }}</a></td>
                                            <td>{!! $teacher->intro !!}</td>
                                            <td>{{ $teacher->slogan }}</td>
                                            <td>
                                                <a href="{{ route('admin.teachers.edit', $teacher->id) }}" class="btn btn-info" style="float: left; margin-right: 2%"><i class="fa fa-edit"></i> Chỉnh sửa</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.teachers.destroy'] ]) !!}
                                                    <input type="hidden" name="id" value="{{ $teacher->id }}"/>
                                                    <button type="submit" class = 'btn btn-danger' onclick = 'return confirm("Bạn chắc chắn muốn xóa giáo viên này ?");'><i class="fa fa-close"></i> Xóa</button>
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
@endsection

@section('inline_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $("#dataTables-teachers").DataTable({
                responsive: true,
                "order": [[1, 'desc']],
                "aoColumns": [
                    { bSortable: false },
                    null, null, null,
                    { bSortable: false }
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Vietnamese.json"
                }
            });
//            table.on( 'order.dt search.dt', function () {
//                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
//                    cell.innerHTML = i+1;
//                } );
//            } ).draw();
        });
    </script>
@endsection
