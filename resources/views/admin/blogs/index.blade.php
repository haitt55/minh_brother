@extends('admin.layouts.master')
@section('title', trans('blogs.title.index'))

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
            <h1 class="page-header">{{ trans('blogs.title.index') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="{{ route('blogs.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>{{ trans('blogs.title.create') }}</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('blogs.list') }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-blogs">
                                    <thead>
                                    <tr>
                                        <th>{{ trans('blogs.attribute.name') }}</th>
                                        <th>{{ trans('blogs.attribute.updated_at') }}</th>
                                        <th>{{ trans('blogs.attribute.action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->name }}</td>
                                            <td>{{ $blog->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Chỉnh sửa</a>
                                                <button class="btn btn-danger btn-delete" data-link="{{ route('blogs.destroy', $blog->id) }}" onclick="delete_item(this);"><i class="fa fa-remove"></i> Xóa</button>
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
            $("#dataTables-blogs").DataTable({
                responsive: true,
                "order": [[1, 'desc'],[ 2, "desc" ]],
                "aoColumns": [
                    null, null,
                    { bSortable: false }
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Vietnamese.json"
                }
            });
        });
    </script>
    <script type="text/javascript">
    var indexUrl = '{{ URL::route('blogs.index') }}';
        function delete_item(element) {
            if (confirm('Bạn có thực sự muốn xóa?')) {
                var url = element.getAttribute('data-link');
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
                        window.location.href = indexUrl;
                    },
                    error: function(data) {
                        window.location.href = indexUrl;
                    }
                });
            }
        }
    </script>
@endsection
