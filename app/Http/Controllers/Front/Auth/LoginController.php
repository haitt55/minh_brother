<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\Student;

class LoginController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $table = 'students';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('front.auth.index');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $rules     = [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ];
        $messages  = [
            'email.required'    => 'Email là trường bắt buộc',
            'email.email'       => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min'      => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email    = $request->input('email');
            $password = $request->input('password');
            $remember = $request->has('rememberme');

            if (Auth::attempt(['email' => $email, 'password' => $password, 'del_flg' => null], $remember)) {
                return redirect()->route('user.index');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
}
