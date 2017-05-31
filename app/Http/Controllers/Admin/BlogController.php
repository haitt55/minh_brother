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

class BlogController extends Controller
{

    protected $teacherOptions;

    protected $categoryOptions;

    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blogs.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryOptions = BlogCategory::getChildCategoryOptions();

        return view("admin.blogs.create", compact('categoryOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:blogs',
            'blog_category_id' => 'required',
            'image' => 'mimes:jpeg,jpg,gif,png',
            // 'type' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $blog = Blog::createBlog($request);

            return redirect()->route('blogs.index')->with('message', 'Success');
        } catch (\Exception $e) {
            Log::info($e);

            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categoryOptions = BlogCategory::getChildCategoryOptions();

        return view('admin.blogs.edit', compact('blog', 'categoryOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:blogs,name,' . $blog->id,
            'blog_category_id' => 'required',
            'image' => 'mimes:jpeg,jpg,gif,png',
            // 'type' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            $blog = Blog::updateBlog($request, $blog);

            return redirect()->route('blogs.index')->with('message', 'Success');
        } catch (\Exception $e) {
            Log::info($e);

            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        try {
            $blog->delete();
        } catch(Exception $e) {
            Log::info($e->getMessage());

            return response()->json([
                'error' => [
                    'message' => $ex->getMessage(),
                ]
            ]);
        }

        return response()->json();
    }
}
