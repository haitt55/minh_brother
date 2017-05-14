<?php

namespace App\Http\Controllers\Front;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use DB;
use Log;

class BlogCategoryController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $blogCategory = BlogCategory::where('slug', $slug)->first();
        $arrCategoryId = $blogCategory->childs()->pluck('id')->toArray();
        $arrCategoryId[] = $blogCategory->id;
        $blogs = Blog::whereIn('blog_category_id', $arrCategoryId)->get();

        return view('front.blog_categories.index', compact('blogs', 'blogCategory'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($parent_category, $category)
    {
        $parrentCategory = BlogCategory::where('slug', $parent_category)->first();
        $blogCategory = BlogCategory::where('slug', $category)->first();
        $arrCategoryId = $blogCategory->childs()->pluck('id')->toArray();
        $arrCategoryId[] = $blogCategory->id;
        $blogs = Blog::whereIn('blog_category_id', $arrCategoryId)->get();

        return view('front.blog_categories.index', compact('blogs', 'blogCategory'));
    }
}
