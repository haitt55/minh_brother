@extends('front.layouts.master')
@section('content')
    <div class="register-course-page" >
        <div class="container">
            <div class="background-catch-click"></div>
            <div class="register-course-main col-sm-9">
                <div class="row">
                    @include('front.layouts.partials.errors')
                    <h3 class="col-sm-12">Để đăng ký khóa học vui lòng liên hệ trực tiếp:</h3>
                    <div class="direct-contact col-sm-6">
                        <p class="headline">
                            <strong>Văn phòng Trung tâm {{ app_settings('company') }}</strong>
                        </p>
                        <p>{{ app_settings('address') }}</p>
                        <p>Tel: {{ app_settings('phone') }}</p>
                        <p>Email: <a href="mailto:{{ app_settings('email') }}">{{ app_settings('email') }}</a></p>
                    </div>
                    <div class="clearfix"></div>
                    <form class="registration_form" method="post" action="{{ route('register-course.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ auth()->user() ? auth()->user()->id : '' }}" name="student_id">
                        <h3 class="col-sm-12">Hoặc đăng ký online theo form sau:</h3>
                        <div class="col-sm-6 city">
                            <label>Địa điểm học (<span class="requirement">*</span>):</label>
                            <select name="register_course[city]">
                                <option value="{{ app_settings('address') }}">{{ app_settings('address') }}</option>
                            </select>
                        </div>
                        <div class="col-sm-6 class">
                            <label>Khóa học (<span class="requirement">*</span>):</label>
                            <select name="product_id">
                                @foreach($products as $product)
                                <option value="{{ $product->id }}"
                                        @if($selectedProductId == $product->id) selected @endif
                                        >{{ $product->name }}</option>
                                @endforeach
                        	</select>
                        </div>
                        <div class="col-sm-6 name">
                            <label>Họ (<span class="requirement">*</span>):</label>
                            <input type="text" name="payment_first_name"  value="{{ old('payment_first_name', auth()->user() ? auth()->user()->payment_first_name : '') }}">
                        </div>
                        <div class="col-sm-6 name">
                            <label>Tên (<span class="requirement">*</span>):</label>
                            <input type="text" name="payment_last_name"  value="{{ old('payment_last_name', auth()->user() ? auth()->user()->payment_last_name : '') }}">
                        </div>
                        <div class="col-sm-6 date_of_birth">
                            <label>Năm sinh:</label>
                            <input type="text" name="birth"  value="{{ old('birth', auth()->user() ? auth()->user()->birth : '') }}">
                        </div>
                        <div class="col-sm-6 phone">
                            <label>Số điện thoại (<span class="requirement">*</span>):</label>
                            <input type="text" name="payment_phone_number"  value="{{ old('payment_phone_number', auth()->user() ? auth()->user()->payment_phone_number : '') }}">
                        </div>
                        <div class="col-sm-6 email">
                            <label>Email (<span class="requirement">*</span>):</label>
                            <input type="email" name="payment_email"  value="{{ old('payment_email', auth()->user() ? auth()->user()->payment_email : '') }}">
                        </div>
                        <div class="col-sm-6 work_location">
                            <label>Nơi làm việc (<span class="requirement">*</span>):</label>
                            <input type="text" name="payment_city"  value="{{ old('payment_city', auth()->user() ? auth()->user()->payment_city : '') }}">
                        </div>
                        <div class="col-sm-6 college_location">
                            <label>Trường ĐH bạn đã/đang học:</label>
                           	<input type="text" name="school"  value="{{ old('school', auth()->user() ? auth()->user()->school : '') }}">
                        </div>
                        <div class="col-sm-6 facebook">
                            <label>Link profile facebook:</label>
                            <input type="text" name="facebook_link"  value="{{ old('facebook_link', auth()->user() ? auth()->user()->facebook_link : '') }}">
                        </div>
                        <div class="col-sm-6 classmate">
                            <label>Người đăng ký học cùng:</label>
                            <input type="text" name="friend"  value="{{ old('friend', auth()->user() ? auth()->user()->friend : '') }}">
                        </div>
                        <!-- payment method -->
			            <div class="col-sm-12 payment_method">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Hình thức thanh toán:</label>
                                    <select name="payment_method">
                                        <option value="bacs">Chuyển khoản</option>
                                        <option value="cheque">Thanh toán trực tiếp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="options-detail">
                                <div option-title="bacs" style="display: none;"><p>THÔNG TIN CHUYỂN KHOẢN<br />
									Chủ tài khoản: Công ty TNHH Giải pháp BIM Hà Nội<br />
									Số tài khoản: 22210000596533<br />
									Tên ngân hàng: BIDV chi nhánh Thanh Xuân, Hà Nội<br />
									Nội dung: Họ &#8211; Tên người gửi &#8211; đóng học phí &#8211; MÃ CHƯƠNG TRÌNH</p>
								</div>
                                <div option-title="cheque" style="display: none;">
                                	<p>Vui lòng đến địa chỉ Công ty CP EBIM Việt Nam &#8211; {{ app_settings('address') }} để nộp học phí đăng ký khóa học.</p>
								</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                            <!-- submit button -->
                            <button type="submit">Hoàn thành đăng ký</button>
                            <button type="button" class="btn btn-default" onclick="jQuery('.background-catch-click').trigger('click');">Hủy bỏ</button>
                    </form>
                </div>
            </div>
            <div class="register-course-sidebar col-sm-3"></div>
        </div>
    </div>

@endsection
