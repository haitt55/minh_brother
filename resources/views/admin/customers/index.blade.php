@extends('admin.layouts.master')
@section('title', 'người liên hệ')

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
            <h1 class="page-header">Danh sách người liên hệ</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customer List
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-customers">
                                    <thead>
                                    <tr>
                                        <th>Tên người liên hệ</th>
                                        <th>Chủ đề</th>
                                        <th>Trạng thái</th>
                                        <th>Gửi tới lúc</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td data-email="{{$customer->email}}"
                                                data-full_name="{{$customer->name}}"
                                                data-subject="{{$customer->subject}}"
                                                data-message="{{$customer->message}}"
                                                data-created_at="{{$customer->created_at}}"
                                                data-toggle="modal" data-target="#modalCustomer" style="cursor: pointer">
                                                <a href="javascript:void(0);">{{ $customer->name }}</a>
                                            </td>
                                            <td>{{ $customer->subject }}</td>
                                            <td>
                                                @if ($customer->is_new)
                                                    <span class="label label-success" id="label-status-{{ $customer->id }}">mới</span>
                                                @else
                                                    <span class="label label-danger" id="label-status-{{ $customer->id }}">đã liên hệ</span>
                                                @endif
                                            </td>
                                            <td>{{ $customer->created_at }}</td>
                                            <td>
                                                <button class="btn change-status-button @if($customer->is_new) btn-danger @else btn-success @endif" id="change-status-{{ $customer->id }}">
                                                    @if ($customer->is_new)
                                                        Đã liên hệ
                                                    @else
                                                        Mới
                                                    @endif
                                                </button>
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
    <div class="modal fade" id="modalCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Thông tin người liên hệ</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            Tên người liên hệ
                        </div>
                        <div class="col-md-9" id="md-full_name">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Email
                        </div>
                        <div class="col-md-9" id="md-email">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Chủ đề
                        </div>
                        <div class="col-md-9" id="md-subject">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Tin nhắn
                        </div>
                        <div class="col-md-9" id="md-message">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Gửi tới lúc
                        </div>
                        <div class="col-md-9" id="md-created_at">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
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
            $("#dataTables-customers").DataTable({
                responsive: true,
                "order": [[ 2, "asc" ]],
                "aoColumns": [
                    null, null, null, null,
                    { bSortable: false }
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Vietnamese.json"
                }
            });

            $('#modalCustomer').on('show.bs.modal', function (e) {
                var button = e.relatedTarget;
                $('#md-full_name').text($(button).attr('data-full_name'));
                $('#md-email').text($(button).attr('data-email'));
                $('#md-subject').text($(button).attr('data-subject'));
                $('#md-message').text($(button).attr('data-message'));
                $('#md-created_at').text($(button).attr('data-created_at'));
            });

            $('.change-status-button').click(function () {
                var id = $(this).attr('id').substr(14, 1);
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.customers.changeStatus') }}',
                    data: {id: id, _token:'<?php echo csrf_token() ?>'},
                    success: function( data ) {
                        if (data == 'success') {
                            if ($('#change-status-' + id).hasClass('btn-danger')) {
                                $('#change-status-' + id).removeClass('btn-danger');
                                $('#change-status-' + id).addClass('btn-success');
                                $('#change-status-' + id).text('Mới');
                                $('#label-status-' + id).removeClass('label-success');
                                $('#label-status-' + id).addClass('label-danger');
                                $('#label-status-' + id).text('Đã liên hệ');
                            } else {
                                $('#change-status-' + id).removeClass('btn-success');
                                $('#change-status-' + id).addClass('btn-danger');
                                $('#change-status-' + id).text('Đã liên hệ');
                                $('#label-status-' + id).removeClass('label-danger');
                                $('#label-status-' + id).addClass('label-success');
                                $('#label-status-' + id).text('Mới');
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
