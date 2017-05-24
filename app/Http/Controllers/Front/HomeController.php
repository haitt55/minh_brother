<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use App\Models\Blog;
use App\Models\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->get();
        $recentBlogs = Blog::orderBy('updated_at', 'desc')->get()->take(3);
        $productCategories = ProductCategory::all();
        $count = [
            'class' => count($products),
            'company' => 125,
            'member' => 230,
            'student' => count(Student::all()),
        ];

        return view('front.index', compact('products', 'recentBlogs', 'productCategories', 'count'));
    }

    public function registerCourse()
    {
        return view('front.products.register_course');
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->get('search') . '%')->get();

        return view('front.search', compact('products'));
    }
}
