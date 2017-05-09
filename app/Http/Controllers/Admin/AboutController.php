<?php

namespace App\Http\Controllers\Admin;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Teacher;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->teachers= Teacher::getList();
        $this->middleware('auth.admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('about')->first();
        if ($about) {
            return view('admin.about.edit');
        }
        return view('admin.about.create')->with(['teachers' => $this->teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create validator
        $validator = Validator::make($request->all(), [
            'intro' => 'required',
            'page_title' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = $request->all();
        $teacherId = implode(',', $data['teacher_id']);
        $data['teacher_id'] = create_slug($data['teacher_id']);
        $data['slug'] = create_slug($data['page_title']);
        
        //TODO:
        dd($data);
        if ($saved) {
            return redirect()->route('admin.about.index')->with('message','Tạo thông tin trang about thành công');
        } else {
            return redirect()->route('admin.about.index')->with('message','Đã xảy ra lỗi khi tạo trang about');
        }
    }
}
