@extends('admin.layouts.master')
@section('title', 'bình luận')

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
            <h1 class="page-header">Danh sách bình luận</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách bình luận
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-customers">
                                    <thead>
                                    <tr>
                                        <th>Tên người bình luận</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Đánh giá</th>
                                        <th>Khóa học</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td data-email="{{$comment->email}}"
                                                data-comment_id = "{{ $comment->id }}"
                                                data-name="{{$comment->name}}"
                                                data-comment="{{$comment->comment}}"
                                                data-rate_number="{{$comment->rate_number}}"
                                                data-product_id="{{$comment->product_id}}"
                                                data-product_name="{{$comment->product->name}}"
                                                data-admin_checked="{{$comment->admin_checked}}"
                                                data-admin_reply="{{$comment->admin_reply}}"
                                                data-toggle="modal" data-target="#modalCustomer" style="cursor: pointer">
                                                <a href="javascript:void(0);">{{ $comment->name }}</a>
                                            </td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->comment }}</td>
                                            <td>{{ $comment->rate_number }}</td>
                                            <td>{{ $comment->product->name }}</td>
                                            <td>
                                                @if ($comment->admin_checked)
                                                    <span class="label label-danger" id="label-status-{{ $comment->id }}">Đã duyệt</span>
                                                @else
                                                    <span class="label label-success" id="label-status-{{ $comment->id }}">Chưa duyệt</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn change-status-button @if($comment->admin_checked) btn-success @else btn-danger @endif" id="change-status-{{ $comment->id }}">
                                                    @if ($comment->admin_checked)
                                                        Bỏ duyệt
                                                    @else
                                                        Duyệt
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
            <form method="POST" action="{{ route('admin.comments.updateComment') }}" role="form">
                {{ csrf_field() }}
                {!! method_field('put') !!}
                <input type="hidden" name="comment_id" id="md-comment_id" value="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Bình luận</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            Tên người bình luận
                        </div>
                        <div class="col-md-9" id="md-name">

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
                        <div class="col-md-9" id="md-comment">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Tin nhắn
                        </div>
                        <div class="col-md-9" id="md-rate_number">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Khóa học
                        </div>
                        <div class="col-md-9" id="md-product_name">

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            Trả lời bình luận
                        </div>
                        <div class="col-md-9">
                            <textarea id="md-admin_reply" name="admin_reply" rows="5" style="width: 90%"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" >Lưu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
            </form>
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
                    null, null, null, null, null, null,
                    { bSortable: false }
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Vietnamese.json"
                }
            });

            $('#modalCustomer').on('show.bs.modal', function (e) {
                var button = e.relatedTarget;
                $('#md-comment_id').val($(button).attr('data-comment_id'));
                $('#md-name').text($(button).attr('data-name'));
                $('#md-email').text($(button).attr('data-email'));
                $('#md-comment').text($(button).attr('data-comment'));
                $('#md-product_id').text($(button).attr('data-product_id'));
                $('#md-product_name').text($(button).attr('data-product_name'));
                $('#md-rate_number').text($(button).attr('data-rate_number'));
                $('#md-admin_reply').text($(button).attr('data-admin_reply'));
            });

            $('.change-status-button').click(function () {
                var id = $(this).attr('id').substr(14, 1);
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.comments.addComment') }}',
                    data: {id: id, _token:'<?php echo csrf_token() ?>'},
                    success: function( data ) {
                        if (data == 'success') {
                            if ($('#change-status-' + id).hasClass('btn-danger')) {
                                $('#change-status-' + id).removeClass('btn-danger');
                                $('#change-status-' + id).addClass('btn-success');
                                $('#change-status-' + id).text('Bỏ duyệt');
                                $('#label-status-' + id).removeClass('label-success');
                                $('#label-status-' + id).addClass('label-danger');
                                $('#label-status-' + id).text('Đã duyệt');
                            } else {
                                $('#change-status-' + id).removeClass('btn-success');
                                $('#change-status-' + id).addClass('btn-danger');
                                $('#change-status-' + id).text('Duyệt');
                                $('#label-status-' + id).removeClass('label-danger');
                                $('#label-status-' + id).addClass('label-success');
                                $('#label-status-' + id).text('Chưa duyệt');
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
