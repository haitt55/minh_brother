<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductCategory;
use App\Models\Blog;
use App\Models\Student;
use App\Teacher;
use App\Models\Customer;
use Validator;
use DB;

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
            'member' => count(Teacher::all()),
            'student' => count(Student::all()),
        ];
        $about = DB::table('about')->first();
        $linkYoutube = $about->link_youtube;
        $about->id_youtube = null;
        if ($linkYoutube) {
            $pattern = "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#";
            preg_match($pattern, $linkYoutube, $matches);
            $about->id_youtube = !empty($matches) ? $matches[0] : null;
        }

        return view('front.index', compact('products', 'recentBlogs', 'productCategories', 'count', 'about'));
    }

    public function registerCourse(Request $request)
    {
        $selectedProductId = $request->get('product_id');
        $products = Product::orderBy('name', 'asc')->get();
        return view('front.products.register_course')->with(array(
            'products' => $products,
            'selectedProductId' => $selectedProductId
        ));
    }

    public function storeCourse(Request $request)
    {
        $isNewRegister = true;
        if ($request->get('student_id')) {
            $isNewRegister = false;
        }
        $validator = Validator::make($request->all(), [
            'payment_first_name' => 'required',
            'payment_last_name' => 'required',
            'payment_phone_number' => 'required|numeric',
            'payment_email' => 'required|email|unique:students',
            'payment_city' => 'required',
            'product_id' => 'required',
        ],
            array(
                'payment_first_name.required' => 'Họ is required.',
                'payment_last_name.required' => 'Tên is required.',
                'payment_phone_number.required' => 'Số điện thoại is required.',
                'payment_phone_number.numeric' => 'Số điện thoại is number.',
                'payment_email.required' => 'Email is required.',
                'payment_email.email' => 'Email is not valid.',
                'payment_email.unique' => 'Email has been used.',
                'payment_city.required' => 'Nơi làm việc is required.',
                'product_id.required' => 'Khóa học is required.'
            )
        );
        if ($validator->errors() && count($validator->errors()) && $isNewRegister) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput();
        }
        DB::beginTransaction();
        try {
            if ($isNewRegister) {
                $student = new Student();
                $student->payment_first_name = $request->payment_first_name;
                $student->payment_last_name = $request->payment_last_name;
//            $student->birth = $request->birth;
                $student->payment_phone_number = $request->payment_phone_number;
                $student->payment_email = $request->payment_email;
                $student->email = $request->payment_email;
                $student->password = bcrypt('123456');
                $student->payment_city = $request->payment_city;
//            $student->school = $request->school;
//            $student->facebook_link = $request->facebook_link;
//            $student->friend = $request->friend;
//            $student->payment_method = $request->payment_method;
                $student->save();
                $studentId = $student->id;
            } else {
                $studentId = $request->get('student_id');
            }
            DB::table('student_products')->insert(
                [
                    'product_id' => $request->product_id,
                    'student_id' => $studentId,
                ]
            );
            DB::commit();
        } catch (\Exception $e) {
            echo $e->getMessage();
            DB::rollback();
        }

        return view('front.products.register_course_success');
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' . $request->get('search') . '%')->get();

        return view('front.search', compact('products'));
    }

    public function contact(Request $request)
    {
        return view('front.contact');
    }

    public function customerContact(Request $request)
    {
        try {
            $data = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'message' => $request->get('message'),
            ];
            $customer = Customer::create($data);

            return response()->json([
                // 'name' => $data['name'],
                // 'comment' => $data['message'],
                'success' => true,
            ]);
            // return redirect()->route('front.contact');
        } catch(Exception $e) {
            Log::info($e);

            return response()->json([
                'success' => false,
            ]);
        }
    }
}
