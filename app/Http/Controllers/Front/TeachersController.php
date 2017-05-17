<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\ProductCategory;
use DB;

class TeachersController extends Controller
{

    /**
     * Show teachers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Teacher $teacher)
    {
        $teachers = $teacher->getList();
        return view('front.teachers.index')->with(compact('teachers'));
    }

    public function show($slug)
    {
        $teacher = Teacher::with('products')->where('slug', $slug)->first();
        return view('front.teachers.show', compact('teacher'));
    }
}
