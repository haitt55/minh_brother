<?php

namespace App\Http\Controllers\Front\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\MessageBag;
use App\Models\Student;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create new student and handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function index(Request $request, Student $student)
    {
        $data      = $request->all();
        $validator = $this->validator($data);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email            = $data['email'];
            $password         = $data['password'];
            $data['password'] = bcrypt($password);

            //Create account
            $saved = $student->createData($data);
            if (empty($saved)) {
                $errors = new MessageBag(['errorlogin' => 'Đăng ký tài khoản đã xảy ra lỗi']);
                return redirect()->back()->withInput()->withErrors($errors);
            }

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                //TODO: send mail
                return redirect()->route('user.index');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules    = [
            'email'                 => 'required|email|unique:students',
            'password'              => 'required',
            'password_confirmation' => 'required|same:password',
        ];
        return Validator::make($data, $rules, UserRequest::messageError());
    }
}
