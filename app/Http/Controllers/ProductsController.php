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
        $products = Product::all();
        return view('front.products.index')->with(['products' => $products]);
    }

    public function test()
    {
        return view('test');
    }
}
