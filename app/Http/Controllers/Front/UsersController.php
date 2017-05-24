<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserPaymentRequest;
use App\Http\Requests\UserReciveRequest;

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
    
    public function editPayment()
    {
        $user = Auth::user();
        return view('front.users.edit_payment')->with(compact('user'));
    }
    
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
    
    public function editRecieve()
    {
        $user = Auth::user();
        return view('front.users.edit_recieve')->with(compact('user'));
    }
    
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
}
