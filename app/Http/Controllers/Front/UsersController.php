<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserPaymentRequest;
use App\Http\Requests\UserReciveRequest;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    /**
     * Login user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.users.index');
    }
    
    /**
     * Edit info payment.
     * 
     * @return \Illuminate\Http\Response
     */
    public function editPayment()
    {
        $user = Auth::user();
        return view('front.users.edit_payment')->with(compact('user'));
    }
    
    /**
     * Update info payment.
     * 
     * @param Request $request
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function updatePayment(Request $request, Student $student)
    {
        $validator = UserPaymentRequest::validateData($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $userID = Auth::user()->id;
        $data = $request->all();
        $updated = $student->updatePayment($userID, $data);
        
        if ($updated) {
            return redirect()->route('user.index')->with('message', ['status' => 'success', 'content' => 'Địa chỉ thanh toán được thay đổi thành công.']);
        } else {
            return redirect()->back()->with('message', ['status' => 'error', 'content' => 'Đã xảy ra lỗi khi cập nhật thông tin thanh toán.']);
        }
    }
    
    /**
     * Edit info recieve.
     * 
     * @return \Illuminate\Http\Response
     */
    public function editRecieve()
    {
        $user = Auth::user();
        return view('front.users.edit_recieve')->with(compact('user'));
    }
    
    /**
     * Update info recieve.
     * 
     * @param Request $request
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function updateRecieve(UserReciveRequest $request, Student $student)
    {
        $userID = Auth::user()->id;
        $data = $request->all();
        $updated = $student->updateRecieve($userID, $data);
        
        if ($updated) {
            return redirect()->route('user.index')->with('message', ['status' => 'success', 'content' => 'Địa chỉ giao nhận được thay đổi thành công.']);
        } else {
            return redirect()->back()->with('message', ['status' => 'error', 'content' => 'Đã xảy ra lỗi khi cập nhật thông tin giao nhận.']);
        }
    }
    
    /**
     * Edit info student.
     * 
     * @return \Illuminate\Http\Response
     */
    public function editInfo()
    {
        $user = Auth::user();
        return view('front.users.edit_info')->with(compact('user'));
    }
    
    /**
     * Update info student.
     * 
     * @param Request $request
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function updateInfo(Request $request, Student $student)
    {
        $userID = Auth::user()->id;
        $data = $request->all();
        $rules = UserRequest::rules();
        
        if ($data['email'] != Auth::user()->email) {
            $rules = array_merge($rules, ['email' => 'required|email|unique:students']);
        }
        
        if ($data['password_current'] || $data['password_current'] || $data['password_confirmation']) {
            $rules = array_merge($rules, UserRequest::rulesPass());
        }
        
        $messages = UserRequest::messageError();
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        //Update info
        $updated = $student->updateInfo($userID, $data);
        if ($updated) {
            return redirect()->route('user.index')->with('message', ['status' => 'success', 'content' => 'Thông tin tài khoản đã được cập nhật.']);
        } else {
            return redirect()->back()->with('message', ['status' => 'error', 'content' => 'Đã xảy ra lỗi khi cập nhật thông tin tài khoản.']);
        }
    }
}
