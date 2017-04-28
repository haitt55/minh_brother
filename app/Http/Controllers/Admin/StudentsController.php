<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Show all students.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('del_flg', null)->get();
        return view('admin.students.index', ['students' => $students]);
    }
    
    /**
     * Show info student payment.
     * 
     * @param int $studentId
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function showPayment($studentId, Student $student)
    {
        $info = $this->getInfo($studentId, $student);
        return view('admin.students.show_payment', ['student' => $info]);
    }
    
    /**
     * Show info student recieve.
     * 
     * @param int $studentId
     * @param Student $student
     * @return \Illuminate\Http\Response
     */
    public function showRecieve($studentId, Student $student)
    {
        $info = $this->getInfo($studentId, $student);
        return view('admin.students.show_recieve', ['student' => $info]);
    }
    
    /**
     * Get info student.
     * 
     * @param int $studentId
     * @param tudent $student
     * @return \Illuminate\Http\Response
     */
    private function getInfo($studentId, Student $student)
    {
        $info = $student->getById(intval($studentId));
        if (!$studentId || !$info) {
            return view('errors.500');
        }
        return $info;
    }

    /**
     * Delete student.
     *
     * @param Request $request
     * @param Student $student
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Request $request, Student $student) 
    {
        $studentId = $request->get('student_id');
        $info = $student->getById(intval($studentId));
        if (!$studentId || !$info) {
            return view('errors.500');
        }
        $saved = $student->updateDelFlg($studentId);
        if ($saved) {
            $request->session()->flash('message', 'Xóa học viên thành công !');
            return 'success';
        }
    }
}
