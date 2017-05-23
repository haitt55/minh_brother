<?php

namespace App\Http\Controllers\Front;

use App\Models\RateComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Teacher;
use App\ProductCategory;
use DB;

class CommentsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
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
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $rateComment = new RateComment();
            $rateComment->name = $data['name'];
            $rateComment->email = $data['email'];
            $rateComment->rate_number = $data['rate_number'];
            $rateComment->comment = $data['comment'];
            $rateComment->product_id = $data['product_id'];
            $rateComment->save();
            return response()->json([
                'name' => $data['name'],
                'comment' => $data['comment'],
                'rate_number' => $data['rate_number'],
                'success' => true,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
            ]);
        }
    }
}
