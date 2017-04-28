<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Teacher;
use App\ProductCategory;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    protected $teacherOptions;

    protected $categoryOptions;

    public function __construct()
    {
        $this->teacherOptions = Teacher::getOptions();
        $this->categoryOptions = ProductCategory::getOptions();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with([
            'teacherOptions' => $this->teacherOptions,
            'categoryOptions' => $this->categoryOptions
            ]);
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
            'name' => 'required|unique:products',
            'image' => 'mimes:jpeg,jpg,gif,png',
            'content' => 'mimes:pdf',
            'price' => 'numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $data = $request->all();
            $imagePath = config('custom.product_image_path');
            $filePath = config('custom.product_file_path'); 
            $image = $request->file('image');
            $content = $request->file('content');
            $product = New Product();
            if ($image) {
                $name = time() . '-' . create_slug($image->getClientOriginalName());
                $extention = $image->getClientOriginalExtension();
                $filename = "{$name}.{$extention}";
                Image::make($image->getRealPath())->save(public_path($imagePath . '/' . $filename));
                $product->image = $imagePath . '/' . $filename;
            }
            if ($content) {
                $name = time() . '-' . create_slug($content->getClientOriginalName());
                $extention = $content->getClientOriginalExtension();
                $filename = "{$name}.{$extention}";
                $path = $request->content->storeAs($filePath, $filename);
                $product->content = $filePath . '/' . $filename;
            }
            $product->name = $data['name'];
            $product->intro = $data['intro'];
            $product->teacher_id = $data['teacher_id'];
            $product->category_id = $data['category_id'];
            $product->about = $data['about'];
            $product->price = $data['price'];
            $product->target_people = $data['target_people'];
            $product->page_title = $data['page_title'];
            $product->meta_keyword = $data['meta_keyword'];
            $product->meta_description = $data['meta_description'];
            $product->save();
            DB::commit();
            return redirect()->route('admin.products.index')->with('message','Success');
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
