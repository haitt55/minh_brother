@extends('admin.layouts.master')

@section('title', 'Settings')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Settings</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Settings
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin.appSettings.updateGeneral') }}" role="form">
                                @include('admin.layouts.partials.errors')
                                {!! csrf_field() !!}
                                {!! method_field('put') !!}
                                <div class="form-group">
                                    <label for="company">Tên công ty</label>
                                    <input type="company" name="company" id="company" class="form-control" value="{{ old('company', $appSettings['company']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $appSettings['email']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="whole_phone">Di động</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $appSettings['phone']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="whole_phone">Di động 2</label>
                                    <input type="text" name="phone2" id="phone2" class="form-control" value="{{ old('phone2', $appSettings['phone2']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $appSettings['address']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc thứ 2</label>
                                    <input type="text" name="open_time2" id="open_time2" class="form-control" value="{{ old('open_time2', $appSettings['open_time2']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc thứ 3</label>
                                    <input type="text" name="open_time2" id="open_time3" class="form-control" value="{{ old('open_time3', $appSettings['open_time3']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc thứ 4</label>
                                    <input type="text" name="open_time2" id="open_time4" class="form-control" value="{{ old('open_time4', $appSettings['open_time4']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc thứ 5</label>
                                    <input type="text" name="open_time2" id="open_time5" class="form-control" value="{{ old('open_time5', $appSettings['open_time5']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc thứ 6</label>
                                    <input type="text" name="open_time2" id="open_time6" class="form-control" value="{{ old('open_time6', $appSettings['open_time6']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc thứ bảy</label>
                                    <input type="text" name="open_time2" id="open_time7" class="form-control" value="{{ old('open_time7', $appSettings['open_time7']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="page_title">Giờ làm việc chủ nhật</label>
                                    <input type="text" name="open_time2" id="open_time8" class="form-control" value="{{ old('open_time8', $appSettings['open_time8']) }}">
                                </div>
                                <div>
                                    <label>Google Maps</label>
                                    <div id="map" style="height:300px;"></div>
                                    <input type="text" id="latitude" name="latitude" class="hidden" value="{{ old('latitude', $appSettings['latitude']) }}"/>
                                    <input type="text" id="longitude" name="longitude" class="hidden" value="{{ old('longitude', $appSettings['longitude']) }}"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="page_title">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control" value="{{ old('page_title', $appSettings['page_title']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword', $appSettings['meta_keyword']) }}">
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description', $appSettings['meta_description']) }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
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

@section('inline_scripts')
    @parent

    <script>
        var latitude = parseFloat("{{ $appSettings['latitude'] }}");
        var longitude = parseFloat("{{ $appSettings['longitude'] }}");
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
