@extends('front.layouts.master')
@section('content')
<div class="register-course-page" style="display: block;">
        <div class="container">
            <div class="background-catch-click"></div>
            <div class="register-course-main col-sm-9">
                <div class="row">

                    <div class="alert alert-success" role="alert">
                         C?m ?n b?n ?� ??ng k� kh�a h?c t?i {{ app_settings('company') }}.
                        Ch�ng r�i s? s?m li�n h? b?n ?? x�c nh?n l?i th�ng tin n�y!<br>
                    </div>

                </div>
            </div>
            <div class="register-course-sidebar col-sm-3"></div>
        </div>
    </div>
</div>
@endsection