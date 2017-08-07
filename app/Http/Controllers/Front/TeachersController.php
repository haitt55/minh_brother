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
        $teacher = Teacher::where('slug', $slug)->first();
        $products = $teacher->productsInfo;
        $teachers = $this->teachers;
        return view('front.teachers.show', compact('teacher', 'teachers', 'products'));
    }
}
