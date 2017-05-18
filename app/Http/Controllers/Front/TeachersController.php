<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\ProductCategory;
use DB;

class TeachersController extends Controller
{

    protected $teachers;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Teacher $Teacher)
    {
        $this->teachers = $Teacher->getList();
    }
    
    /**
     * Show teachers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = $this->teachers;
        return view('front.teachers.index')->with(compact('teachers'));
    }

    public function show($slug)
    {
        $teacher = Teacher::with('products')->where('slug', $slug)->first();
        $teachers = $this->teachers;
        return view('front.teachers.show', compact('teacher', 'teachers'));
    }
}
