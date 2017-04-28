@extends('admin.layouts.master')
@section('title', 'Địa chỉ nhận hàng')
@section('css') 
<style>
    .required {
        color: #f13e3e;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <h1 class="page-header col-lg-10 col-md-10 col-xs-10">Địa chỉ nhận hàng</h1>
            <button class="btn btn-info" style="margin-top: 45px" onclick="window.history.back();">Back</button>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-user-information">
            <tbody>
                <tr>
                    <td><label for="Họ" class="">Họ <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->recieve_first_name}}</td>
                </tr>
                <tr>
                    <td><label for="Tên" class="">Tên <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->recieve_last_name}}</td>
                </tr>
                <tr>
                    <td><label for="Tên Công Ty" class="">Tên công ty </label></td>
                    <td>{{$student->recieve_company_name}}</td>
                </tr>
                <tr>
                    <td><label for="Quốc Gia" class="">Quốc gia <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->recieve_country}}</td>
                </tr>
                <tr>
                    <td><label for="Địa Chỉ" class="">Địa chỉ <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->recieve_address}}</td>
                </tr>
                <tr>
                    <td><label for="Tỉnh / Thành phố" class="">Tỉnh / Thành phố <span class="required" title="bắt buộc">*</span></label></td>
                    <td>{{$student->recieve_city}}</td>
                </tr>
                <tr>
                    <td><label for="Mã bưu điện" class="">Mã bưu điện </label></td>
                    <td>{{$student->recieve_post_code}}</td>
                </tr>
            </tbody>
        </table>  
    </div>
</div>
@endsection
