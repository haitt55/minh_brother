<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Teacher;
use App\ProductCategory;
use DB;

class ProductCategoriesController extends Controller
{

    protected $teacherOptions;

    protected $categoryOptions;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->teacherOptions = Teacher::getOptions();
        $this->categoryOptions = ProductCategory::getOptions();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function show($slug)
    {
        $category = ProductCategory::where('slug', $slug)->first();
        return view('front.product_categories.show', compact('category'));
    }
}
