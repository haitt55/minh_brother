@extends('front.layouts.master')
@section('content')
    <!-- Breads -->
    <div class="stm_breadcrumbs_unit">
        <div class="container">
            <div class="navxtBreads">
                <!-- Breadcrumb NavXT 5.6.0 -->
                <span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to BIMhanoi." href="http://bim.edu.vn" class="home">
                        <span property="name">BIMhanoi</span>
                    </a>
                    <meta property="position" content="1">
                </span> &gt;
                <span property="itemListElement" typeof="ListItem">
                    <span property="name">Liên hệ</span>
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1435659486461">
            <div class="stm_icon_box_responsive wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_custom_heading vc_custom_1459240812823" >
                            <h3 style="text-align: left" >THÔNG TIN LIÊN HỆ:</h3>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1435139343164">
                            <div class="stm_sm_gutter_back wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner vc_custom_1436791397964">
                                    <div class="wpb_wrapper">
                                        <div class="icon_box vc_custom_1459242714617 dark clearfix" style="background:#ffffff; color:#555555">
                                            <div class="icon_alignment_left">
                                                <div class="icon vc_custom_1459242714615" style=width:35px>
                                                    <i style="font-size: 33px; color:#1e478d" class="fa fa-icon-stm_icon_phone-o"></i>
                                                </div>
                                                <div class="icon_text">
                                                    <h5 style="color:#555555">Điện thoại:</h5>
                                                    <p>{!! app_settings('phone') !!}</p>
                                                </div>
                                            </div> <!-- align icons -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stm_sm_gutter_back wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner vc_custom_1436790977027">
                                    <div class="wpb_wrapper">
                                        <div class="icon_box vc_custom_1474264824124 dark clearfix" style="background:#ffffff; color:#555555">
                                            <div class="icon_alignment_left">
                                                <div class="icon vc_custom_1474264824124" style=width:61px>
                                                    <i style="font-size: 33px; color:#1e478d" class="fa fa-icon-stm_icon_mail-o"></i>
                                                </div>
                                                <div class="icon_text">
                                                    <h5 style="color:#555555">Email:</h5>
                                                    <p>{!! app_settings('email') !!}</p>
                                                </div>
                                            </div> <!-- align icons -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1435139343164">
                            <div class="stm_sm_gutter_back stm_bottom_border wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner vc_custom_1436791452718">
                                    <div class="wpb_wrapper">
                                        <div class="icon_box vc_custom_1460960042490 dark clearfix" style="background:#ffffff; color:#555555">
                                            <div class="icon_alignment_left">
                                                <div class="icon vc_custom_1460960042489" style=width:35px>
                                                    <i style="font-size: 22px; color:#1e478d" class="fa fa-icon-stm_icon_pin-o"></i>
                                                </div>
                                                <div class="icon_text">
                                                    <h5 style="color:#555555">Địa chỉ:</h5>
                                                    <p>{!! app_settings('address') !!}</p>
                                                </div>
                                            </div> <!-- align icons -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="stm_sm_gutter_back wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner vc_custom_1436791272952">
                                    <div class="wpb_wrapper">
                                        <div class="icon_box vc_custom_1472629311109 dark clearfix" style="background:#ffffff; color:#555555">
                                            <div class="icon_alignment_left">
                                                <div class="icon vc_custom_1472629311106" style=width:61px>
                                                    <i style="font-size: 33px; color:#1e478d" class="fa fa-icon-stm_icon_earth"></i>
                                                </div>
                                                <div class="icon_text">
                                                    <h5 style="color:#555555">Web:</h5>
                                                    <p>{!! route('front.index') !!}</p>
                                                </div>
                                            </div> <!-- align icons -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label>BẢN ĐỒ</label>
                <div id="map" style="height:300px;"></div>
                <input type="text" id="latitude" name="latitude" class="hidden" value="{{ app_settings('latitude') }}"/>
                <input type="text" id="longitude" name="longitude" class="hidden" value="{{ app_settings('longitude') }}"/>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="multiseparator vc_custom_1435665826984"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1435665045394">
            <div class="custom-border wpb_column vc_column_container vc_col-sm-8">
                <div class="vc_column-inner vc_custom_1437478190523">
                    <div class="wpb_wrapper">
                        <div class="vc_custom_heading vc_custom_1459244793400" >
                            <h3 style="text-align: left" >GỬI PHẢN HỒI</h3>
                        </div>
                        <div role="form" class="wpcf7" id="wpcf7-f4-p793-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="{!! route('front.contact.comment') !!}" method="post" class="wpcf7-form">
                                <p>Tên của bạn (required)<br />
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                                    </span>
                                </p>
                                <p>Email của bạn (required)<br />
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
                                    </span>
                                </p>
                                <p>Subject<br />
                                    <span class="wpcf7-form-control-wrap your-subject">
                                        <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" />
                                    </span>
                                </p>
                                <p>Lời nhắn của bạn<br />
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                    </span>
                                </p>
                                {{ csrf_field() }}
                                <p ><input type="submit" value="Gửi" class="wpcf7-form-control wpcf7-submit button" /></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner vc_custom_1435665074871">
                    <div class="wpb_wrapper"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
@section('inline_scripts')
    @parent

    <script>
        var latitude = parseFloat("{{ app_settings('latitude') }}");
        var longitude = parseFloat("{{ app_settings('longitude') }}");
        var marker;

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {lat: latitude, lng: longitude}
            });

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: {lat: latitude, lng: longitude}
            });
            marker.addListener('click', toggleBounce);
            marker.addListener('dragend', function(evt){
                $('#latitude').val(evt.latLng.lat().toFixed(5));
                $('#longitude').val(evt.latLng.lng().toFixed(5));
            })
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={!! config('services.google.api_key') !!}&callback=initMap"></script>
@endsection
