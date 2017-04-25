<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    const PAGING_LIMIT = 50;
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
        $students = Student::where('del_flg', '=', null)->paginate(self::PAGING_LIMIT);
        return view('admin.students.index', ['students' => $students]);
    }
    
    /**
     * Show info student.
     * 
     * @param type $studentId
     * @return \Illuminate\Http\Response
     */
    public function detail($studentId)
    {
        $student = Student::getById(intval($studentId));
        if (!$studentId || !$student) {
            return view('errors.500');
        }
        return view('admin.students.detail', ['student' => $student]);
    }
    
    /**
     * Delete student.
     *
     * @param $studentId
     * @return \Illuminate\Contracts\View\Factory
     */
    public function delete($studentId) 
    {
        $student = Student::getById(intval($studentId));
        if (!$studentId || !$student) {
            return view('errors.500');
        }
        Student::updateDelFlg($studentId);
        return redirect()->route('admin.students');
    }
}
