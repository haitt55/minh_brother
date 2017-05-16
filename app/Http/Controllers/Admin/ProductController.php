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
                $content->move($filePath, $filename);
                $product->content = $filePath . '/' . $filename;
            }
            $product->name = $data['name'];
            $product->intro = $data['intro'];
            $product->teacher_id = $data['teacher_id'];
            $product->category_id = $data['category_id'];
            $product->about = $data['about'];
            $product->price = $data['price'];
            $product->number_of_hour = $data['number_of_hour'];
            $product->number_of_day = $data['number_of_day'];
            $product->certification = $data['certification'];
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with([
            'product' => $product,
            'teacherOptions' => $this->teacherOptions,
            'categoryOptions' => $this->categoryOptions
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products,name,' . $id,
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
            $oldImage = $product->image;
            $image = $request->file('image');
            $oldContent = $product->content;
            $content = $request->file('content');
            if ($image) {
                $name = time() . '-' . create_slug($image->getClientOriginalName());
                $extention = $image->getClientOriginalExtension();
                $filename = "{$name}.{$extention}";
                Image::make($image->getRealPath())->save(public_path($imagePath . '/' . $filename));
                $product->image = $imagePath . '/' . $filename;
                // delete old image
                if ($oldImage && file_exists(public_path($oldImage))) {
                    unlink(public_path($oldImage));
                }
            }
            if ($content) {
                $name = time() . '-' . create_slug($content->getClientOriginalName());
                $extention = $content->getClientOriginalExtension();
                $filename = "{$name}.{$extention}";
                $content->move($filePath, $filename);
                $product->content = $filePath . '/' . $filename;
                // delete old content
                if ($oldContent && file_exists(public_path($oldContent))) {
                    unlink(public_path($oldContent));
                }
            }
            $product->name = $data['name'];
            $product->intro = $data['intro'];
            $product->teacher_id = $data['teacher_id'];
            $product->category_id = $data['category_id'];
            $product->about = $data['about'];
            $product->price = $data['price'];
            $product->number_of_hour = $data['number_of_hour'];
            $product->number_of_day = $data['number_of_day'];
            $product->certification = $data['certification'];
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::find($id)->delete();
        } catch (Exception $ex) {
            event(new ExceptionOccurred($ex));

            return response()->json([
                'error' => [
                    'message' => $ex->getMessage(),
                ]
            ]);
        }

        return response()->json();
    }
}
