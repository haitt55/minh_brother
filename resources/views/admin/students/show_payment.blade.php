@extends('admin.layouts.master')
@section('title', 'Địa chỉ thanh toán')
@section('css') 
<style>
    .required {
        color: #f13e3e;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Địa chỉ thanh toán</h1>
                <!--<button class="btn btn-info" style="margin-top: 45px" onclick="window.history.back();">Back</button>-->
        </div>
    </div>
    <div class="row" style="margin-bottom: 5px">
        <div class="col-lg-11 text-right">
            <a href="{{ route('admin.students') }}" class="btn btn-success"><i class="fa fa-list"></i> Danh sách học viên</a>
        </div>
    </div>
    <div class="row">
        <!-- /.col-lg-12 -->
        <table class="table table-user-information">
            <tbody>
                <tr>
                    <td><label for="Họ" class="">Họ <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_first_name}}</td>
                </tr>
                <tr>
                    <td><label for="Tên" class="">Tên <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_last_name}}</td>
                </tr>
                <tr>
                    <td><label for="Tên Công Ty" class="">Tên công ty </label></td>
                    <td>{{$student->payment_company_name}}</td>
                </tr>
                <tr>
                    <td><label for="Quốc Gia" class="">Quốc gia <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_country}}</td>
                </tr>
                <tr>
                    <td><label for="Địa Chỉ" class="">Địa chỉ <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_address}}</td>
                </tr>
                <tr>
                    <td><label for="Tỉnh / Thành phố" class="">Tỉnh / Thành phố <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_city}}</td>
                </tr>
                <tr>
                    <td><label for="Mã bưu điện" class="">Mã bưu điện </label></td>
                    <td>{{$student->payment_post_code}}</td>
                </tr>
                <tr>
                    <td><label for="Số điện thoại " class="">Số điện thoại <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_phone_number}}</td>
                </tr>
                <tr>
                    <td><label for="Địa chỉ email " class="">Địa chỉ email <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->payment_email}}</td>
                </tr>
            </tbody>
        </table>  
    </div>
</div>
@endsection
