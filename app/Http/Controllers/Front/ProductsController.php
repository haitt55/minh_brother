<?php

namespace App\Http\Controllers\Front;

use App\Models\RateComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $this->otherProducts = Product::select('products.*')
        // ->where('products.slug', '!=', $slug)
        ->leftJoin('product_categories', function ($join) use ($product) {
            $join->on('products.category_id', '=', 'product_categories.id');
        })->orderBy('category_id', 'desc')->take(5)->get();
        $this->comments = RateComment::where('product_id', $product->id)->where('admin_checked', 1)->get();
        list($arrRate, $totalRate) = $this->getRates($this->comments);
        $numberOfStudent = DB::table('student_products')->where('product_id', $product->id)->get()->count();

        return view('front.products.show', compact('product'))->with([
            'otherProducts' => $this->otherProducts,
            'comments' => $this->comments,
            'arrRate' => $arrRate,
            'totalRate' => $totalRate,
            'numberOfStudent' => $numberOfStudent
        ]);
    }

    protected function getRates($comments) {
        $arrRate = array(
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
        );
        foreach ($comments as $comment) {
            if ($comment->rate_number) {
                $arrRate[$comment->rate_number]++;
            }
        }
        $totalRate = $arrRate[1] + $arrRate[2] + $arrRate[3] + $arrRate[4] + $arrRate[5];

        return array($arrRate, $totalRate);
    }
}
