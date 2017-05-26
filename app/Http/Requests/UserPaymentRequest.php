<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserPaymentRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'payment_first_name'   => 'required|max:50',
            'payment_last_name'    => 'required|max:50',
            'payment_company_name' => 'max:50',
            'payment_country'      => 'required',
            'payment_address'      => 'required|max:50',
            'payment_city'         => 'required|max:50',
            'payment_post_code'    => 'postcode',
            'payment_phone_number' => 'required|phone',
            'payment_email'        => 'required|email',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public static function messageError()
    {
        return [
            'payment_first_name.required'   => 'Vui lòng nhập họ của bạn',
            'payment_first_name.max'        => 'Họ của bạn không hợp lệ',
            'payment_last_name.required'    => 'Vui lòng nhập tên của bạn',
            'payment_last_name.max'         => 'Tên không hợp lệ',
            'payment_company_name.max'      => 'Tên công ty không hợp lệ',
            'payment_country.required'      => 'Vui lòng chọn quốc gia',
            'payment_address.required'      => 'Vui lòng nhập địa chỉ',
            'payment_address.max'           => 'Địa chỉ không hợp lệ',
            'payment_city.required'         => 'Vui lòng nhập tỉnh/thành phố',
            'payment_city.max'              => 'Địa chỉ tỉnh/thành phố không hợp lệ',
            'payment_post_code.postcode'    => 'Mã bưu điện không hợp lệ',
            'payment_phone_number.required' => 'Vui lòng nhập số điện thoại',
            'payment_phone_number.phone'    => 'Số điện thoại không hợp lệ',
            'payment_email.required'        => 'Vui lòng nhập địa chỉ email',
            'payment_email.phone'           => 'Địa chỉ email không hợp lệ',
        ];
    }

    /**
     * validate data
     * @param type $data
     * @return array
     */
    public static function validateData($data)
    {
        return Validator::make($data, self::rules(), self::messageError());
    }
}
