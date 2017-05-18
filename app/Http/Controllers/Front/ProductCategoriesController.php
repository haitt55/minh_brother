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
        $this->categoryOptions = ProductCategory::getOptionsSearch();
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

    public function show($slug, Request $request)
    {
        $category = ProductCategory::where('slug', $slug)->first();
        $list = Product::select('products.*')
            ->where('products.category_id', '=', $category->id);
        if ($request->get('s'))
        {
            $list = $list->where('products.name', 'like', '%'.$request->get('s').'%');
        }
        $this->listProducts = $list->orderBy('category_id', 'desc')->get();
        $this->otherProducts = Product::select('products.*')
            ->leftJoin('product_categories', function ($join) {
                $join->on('products.category_id', '=', 'product_categories.id');
            })->orderBy('category_id', 'desc')->take(5)->get();

        return view('front.product_categories.show', compact('category'))->with([
            'listProducts' => $this->listProducts,
            'otherProducts' => $this->otherProducts,
            'categoryOptions' => $this->categoryOptions
        ]);
    }
}
