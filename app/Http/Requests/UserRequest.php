<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
            'first_name' => 'required|max:50',
            'last_name'  => 'required|max:50',
        ];
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rulesPass()
    {
        return [
            'password_current'      => 'required|old_password:' . Auth::user()->password,
            'password'              => 'required',
            'password_confirmation' => 'required|same:password',
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
            'first_name.required'            => 'Vui lòng nhập họ của bạn',
            'first_name.max'                 => 'Họ của bạn không hợp lệ',
            'last_name.required'             => 'Vui lòng nhập tên của bạn',
            'last_name.max'                  => 'Tên của bạn không hợp lệ',
            'password_current.required'      => 'Vui lòng nhập mật khẩu hiện tại của bạn',
            'password_current.old_password'  => 'Mật khẩu hiện tại chưa chính xác',
            'password.required'              => 'Vui lòng nhập mật khẩu',
            'password_confirmation.required' => 'Vui lòng nhập xác nhận mật khẩu',
            'password_confirmation.same'     => 'Xác nhận mật khẩu không chính xác',
            'email.required'                 => 'Vui lòng nhập địa chỉ email',
            'email.email'                    => 'Email không hợp lệ',
            'email.unique'                   => 'Email đã có người đăng ký',
        ];
    }
}
