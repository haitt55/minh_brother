/**
 *
 */
jQuery(document).ready(function ($) {

    //show reg form when click add_to_cart button
    product_course_show_reg_form($);
    certificate_img_match_height($);
});

function certificate_img_match_height($) {
    $('.certificate .certificate-frame .certificate-holder img').matchHeight();
}

function product_course_show_reg_form($) {
    //console.log(window.location.hash);
    if (window.location.hash == '#dang-ky-khoa-hoc') {
        $('.register-course-page').css('display', 'block');
    }

    $('.single.single-product .single_add_to_cart_button').click(function () {
        if ($('.register-course-page').length > 0) {
            $('.register-course-page').css('display', 'block');

            //
            return false;
        }
    });

    // show payment method detail
    show_payment_method_detail($);
    $('.registration_form .payment_method select').change(function () {
        show_payment_method_detail($);
    });

    // hide register form
    $('.single.single-product .background-catch-click').click(function () {
        $('.register-course-page').css('display', 'none');
    });
}

function show_payment_method_detail($) {
    var selected_value = $('.registration_form .payment_method select').val();
    //console.log(selected_value);
    $('.registration_form .payment_method .options-detail > div').css('display', 'none');
    $('.registration_form .payment_method .options-detail > div[option-title="' + selected_value + '"]').css('display', 'block');
}

