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
            'recieve_first_name'   => 'required|max:255',
            'recieve_last_name'    => 'required|max:255',
            'recieve_company_name' => 'max:255',
            'recieve_country'      => 'required',
            'recieve_address'      => 'required|max:255',
            'recieve_city'         => 'required|max:255',
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
            'recieve_first_name.required' => 'Họ là trường bắt buộc',
            'recieve_first_name.max'      => 'Họ của bạn không hợp lệ',
            'recieve_last_name.required'  => 'Tên là trường bắt buộc',
            'recieve_last_name.max'       => 'Tên không hợp lệ',
            'recieve_company_name.max'    => 'Tên công ty không hợp lệ',
            'recieve_country.required'    => 'Tên quốc gia là trường bắt buộc',
            'recieve_address.required'    => 'Địa chỉ là trường bắt buộc',
            'recieve_address.max'         => 'Địa chỉ không hợp lệ',
            'recieve_city.required'       => 'Địa chỉ tỉnh/thành phố là trường bắt buộc',
            'recieve_city.max'            => 'Địa chỉ tỉnh/thành phố không hợp lệ',
            'recieve_post_code.postcode'  => 'Mã bưu điện không hợp lệ',
        ];
    }
}
