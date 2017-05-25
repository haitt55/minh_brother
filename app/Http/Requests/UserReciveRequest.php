<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class UserReciveRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recieve_first_name'   => 'required|max:50',
            'recieve_last_name'    => 'required|max:50',
            'recieve_company_name' => 'max:50',
            'recieve_country'      => 'required',
            'recieve_address'      => 'required|max:50',
            'recieve_city'         => 'required|max:50',
            'recieve_post_code'    => 'postcode',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'recieve_first_name.required' => 'Vui lòng nhập họ của bạn',
            'recieve_first_name.max'      => 'Họ của bạn không hợp lệ',
            'recieve_last_name.required'  => 'Vui lòng nhập tên của bạn',
            'recieve_last_name.max'       => 'Tên của bạn không hợp lệ',
            'recieve_company_name.max'    => 'Tên công ty không hợp lệ',
            'recieve_country.required'    => 'Vui lòng chọn quốc gia',
            'recieve_address.required'    => 'Vui lòng nhập địa chỉ',
            'recieve_address.max'         => 'Địa chỉ không hợp lệ',
            'recieve_city.required'       => 'Vui lòng nhập địa chỉ tỉnh/thành phố',
            'recieve_city.max'            => 'Địa chỉ tỉnh/thành phố không hợp lệ',
            'recieve_post_code.postcode'  => 'Mã bưu điện không hợp lệ',
        ];
    }
}
