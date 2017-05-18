<?php

namespace App\Http\Controllers\Admin;

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

    protected $teacherOptions;

    protected $categoryOptions;

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::all();
        $categoryTree = BlogCategory::getTree();
        // dd($categories);

        return view('admin.blog_categories.index', compact('categories', 'categoryTree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryOptions = BlogCategory::getCategoryOptions();

        return view('admin.blog_categories.create', compact('categoryOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = str_slug($data['name']);
        $validator = Validator::make($data, [
            'name' => 'required|unique:blog_categories',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $blogCategory = BlogCategory::create($data);

            return redirect()->route('blog-categories.index')->with('message', 'Success');
        } catch (\Exception $e) {
            Log::info($e);

            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        $blogs = $blogCategory->blogs;

        return view('admin.blog_categories.list', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        $categoryOptions = BlogCategory::getCategoryOptions($blogCategory->id);

        return view('admin.blog_categories.edit', compact('blogCategory', 'categoryOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $data = $request->except('_token');
        $data['slug'] = str_slug($data['name']);
        $validator = Validator::make($data, [
            'name' => 'required|unique:blog_categories,name,' . $blogCategory->id,
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $blogCategory = $blogCategory->update($data);

            return redirect()->route('blog-categories.index')->with('message', 'Success');
        } catch (\Exception $e) {
            Log::info($e);

            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategoryId = $blogCategory->id;

        if (!$blogCategoryId || !$blogCategory) {
            return view('errors.500');
        }

        $deleted = $blogCategory->delete();
        if ($deleted) {
            return redirect()->route('blog-categories.index')->with('message','Xóa thanh công !');
        } else {
            return redirect()->route('blog-categories.index')->with('message','Xóa xảy ra lỗi');
        }
    }
}
