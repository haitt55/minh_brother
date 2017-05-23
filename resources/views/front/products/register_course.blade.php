@extends('front.layouts.master')
@section('content')
    <div class="register-course-page" >
        <div class="container">
            <div class="background-catch-click"></div>
            <div class="register-course-main col-sm-9">
                <div class="row">
                    <h3 class="col-sm-12">Để đăng ký khóa học vui lòng liên hệ trực tiếp:</h3>
                    <div class="direct-contact col-sm-6">
                        <p class="headline">
                            <strong>Văn phòng Trung tâm BIM Hà Nội</strong>
                        </p>
                        <p>Tầng 2, tòa nhà Bách Anh - Số 52 chùa Hà, Cầu Giấy, Hà Nội</p>
                        <p>Tel: +84 4 668 41452</p>
                        <p>Email: <a href="mailto:bimhanoi@bim.edu.vn">bimhanoi@bim.edu.vn</a></p>
                    </div>
                    <div class="clearfix"></div>
                    <form class="registration_form" method="post" action="#dang-ky-khoa-hoc">
                        <h3 class="col-sm-12">Hoặc đăng ký online theo form sau:</h3>
                        <div class="col-sm-6 city">
                            <label>Địa điểm học (<span class="requirement">*</span>):</label>
                            <select name="register_course[city]">
                                <option value="Tầng 2. Số 52 chùa Hà, Cầu Giấy, Hà Nội">Tầng 2. Số 52 chùa Hà, Cầu Giấy, Hà Nội</option>
                            </select>
                        </div>
                        <div class="col-sm-6 class">
                            <label>Khóa học (<span class="requirement">*</span>):</label>
                            <select name="register_course[class]">
                                <option value="3236">Khóa học Tekla Structures cho nhà thép tiền chế</option>
                                <option value="3202">Khóa học Revit Building</option>
                                <option value="2626">Khóa học Tekla Structures &#8211; Kết cấu bê tông cốt thép</option>
                                <option value="2637">Khóa học Tekla Structures &#8211; Kết cấu thép</option>
                                <option value="486">Khóa học Revit Structure Advanced</option>
                                <option value="2053">Khóa học Infraworks 360</option>
                                <option value="2050">Khóa học AutoCAD Civil 3D cho hạ tầng kỹ thuật</option>
                                <option value="2047">Khóa học ứng dụng AutoCAD Civil 3D cho dự án giao thông, thủy lợi, nạo vét</option>
                                <option value="488">Khóa học Revit Structure Standard</option>
                                <option value="482">Khóa học Revit Architecture Advanced</option>
                                <option value="490">Khóa học Revit Architecture Standard</option>
                                <option value="525">Khóa học Navisworks Manage</option>
                                <option value="523">Khóa học Revit MEP Advanced</option>
                                <option value="521">Khóa học Revit MEP Standard</option>
                        	</select>
                        </div>
                        <div class="col-sm-6 name">
                            <label>Họ và tên (<span class="requirement">*</span>):</label>
                            <input type="text" name="register_course[name]"  value="">
                        </div>
                        <div class="col-sm-6 date_of_birth">
                            <label>Năm sinh:</label>
                            <input type="text" name="register_course[date_of_birth]"  value="">
                        </div>
                        <div class="col-sm-6 phone">
                            <label>Số điện thoại (<span class="requirement">*</span>):</label>
                            <input type="text" name="register_course[phone]"  value="">
                        </div>
                        <div class="col-sm-6 email">
                            <label>Email (<span class="requirement">*</span>):</label>
                            <input type="email" name="register_course[email]"  value="">
                        </div>
                        <div class="col-sm-6 work_location">
                            <label>Nơi làm việc (<span class="requirement">*</span>):</label>
                            <input type="text" name="register_course[work_location]"  value="">
                        </div>
                        <div class="col-sm-6 college_location">
                            <label>Trường ĐH bạn đã/đang học:</label>
                           	<input type="text" name="register_course[college_location]"  value="">
                        </div>
                        <div class="col-sm-6 facebook">
                            <label>Link profile facebook:</label>
                            <input type="text" name="register_course[facebook]"  value="">
                        </div>
                        <div class="col-sm-6 classmate">
                            <label>Người đăng ký học cùng:</label>
                            <input type="text" name="register_course[classmate]"  value="">
                        </div>
                        <!-- payment method -->
			            <div class="col-sm-12 payment_method">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Hình thức thanh toán:</label>
                                    <select name="register_course[payment_method]">
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
                                	<p>Vui lòng đến địa chỉ Công ty CP EBIM Việt Nam &#8211; Tầng 2, tòa nhà Bách Anh &#8211; Số 52 chùa Hà, Cầu Giấy, Hà Nội để nộp học phí đăng ký khóa học.</p>
								</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- survey -->
                        <div class="row ebim-surveys">
                			<div class="col-sm-12 survey">
            					<label><strong>Bạn biết đến BIM Hà Nội qua</strong></label>
            					<div class="clearfix"></div>
                                <div class="col-sm-6 survey-option">
                					<label>
                						<input type="checkbox" name="ebim_survey_sd8f6j3[1962][]" value="Bạn bè giới thiệu">Bạn bè giới thiệu
                					</label>
            					</div>
                                <div class="col-sm-6 survey-option">
                					<label>
                						<input type="checkbox" name="ebim_survey_sd8f6j3[1962][]" value="Học viên đã từng học tại BIM Hà Nội giới thiệu">Học viên đã từng học tại BIM Hà Nội giới thiệu
                					</label>
			                    </div>
                                <div class="col-sm-6 survey-option">
			                        <label>
			                        	<input type="checkbox" name="ebim_survey_sd8f6j3[1962][]" value="Fanpage BIM Hà Nội">Fanpage BIM Hà Nội
			                        </label>
			                    </div>
                                <div class="col-sm-6 survey-option">
                					<label>
                						<input type="checkbox" name="ebim_survey_sd8f6j3[1962][]" value="Tìm kiếm Internet">Tìm kiếm Internet
                					</label>
        						</div>
                        		<div class="clearfix"></div>
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
