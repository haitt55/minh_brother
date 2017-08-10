@extends('admin.layouts.master')
@section('title', 'Danh sách học viên')

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
            <h1 class="page-header">Danh sách học viên</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 row-none-right row-none-left">
                <div class="card card-content card-content-first">
                    <div class="content" style="padding: 15px;">
                        <div class="row" style="padding: 15px;">
                            <table class="table table-striped table-bordered table-hover" id="users-table">
                                <thead>
                                    <tr>
                                        <th class="table_border" style="width: 8%">
                                        <span>STT</span>
                                        </th>
                                        <th class="col-xs-5 table_border">
                                            <span>Email</span>
                                        </th>
                                        <th class="col-xs-2 text-center table_border">
                                            <span>Địa chỉ thanh toán</span>
                                        </th>
                                        <th class="col-xs-2 text-center table_border">
                                            <span>Địa chỉ nhận hàng</span>
                                        </th>
                                        <th class="col-xs-2 text-center table_border">
                                            <span>Xóa học viên</span>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            var table = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.students.data') !!}',
                columns: [
                    { data: 'id', name: 'id', orderable: false, searchable: false },
                    { data: 'email', name: 'email' },
                    { data: 'show_payment', name: 'show_payment', orderable: false, searchable: false, className: "text-center"},
                    { data: 'show_recieve', name: 'show_recieve', orderable: false, searchable: false, className: "text-center"},
                    { data: 'delete', name: 'delete', orderable: false, searchable: false, className: "text-center"}
                ],
                language : {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Vietnamese.json"
                }
            });;
            table.on( 'order.dt search.dt', function () {
                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
            $('#users-table tbody').on('click', '.btn-delete', function () {
                if (confirm("Bạn chắc chắn muốn xóa học viên này ?")) {
                    var studentId = $(this).data('id');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })
                    $.ajax({
                        data : {
                            student_id: studentId
                        },
                        url: '/admin/students/destroy',
                        method: "DELETE",
                        success: function(result) {
                            if (result == 'success') {
                                location.reload();
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            console.log(xhr.status);
                            console.log(thrownError);
                        }
                    });
                }
            });
        });
    </script>
@endsection
