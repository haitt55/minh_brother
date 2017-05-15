<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Teacher;
use App\ProductCategory;
use DB;

class ProductsController extends Controller
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
        $product = Product::findBySlug($slug);

        return view($this->templateSuffix->viewName($page->template_suffix), compact('product'));
    }

    public function test()
    {
        return view('test');
    }
}
