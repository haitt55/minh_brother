@extends('front.layouts.master')
@section('content')
<div class="register-course-page" style="display: block;">
        <div class="container">
            <div class="background-catch-click"></div>
            <div class="register-course-main col-sm-9">
                <div class="row">

                    <div class="alert alert-success" role="alert">
                         C?m ?n b?n ?ã ??ng kí khóa h?c t?i {{ app_settings('company') }}.
                        Chúng rôi s? s?m liên h? b?n ?? xác nh?n l?i thông tin này!<br>
                    </div>

                </div>
            </div>
            <div class="register-course-sidebar col-sm-3"></div>
        </div>
    </div>
</div>
@endsection