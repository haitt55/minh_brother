<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
            return view('admin.about.edit')->with(['about' => $about, 'teachers' => $this->teachers]);
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
            'link_youtube' => 'required|active_url',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $about = array();
        $data = $request->all();
        $editFlg = isset($data['edit_flg']);
        $teacherId = isset($data['teacher_id']) ? implode(',', $data['teacher_id']) : null;
        
        $about = [
            'intro'            => $data['intro'],
            'link_youtube'     => $data['link_youtube'],
            'certificate'      => $data['certificate'],
            'intro_edu'        => $data['intro_edu'],
            'teacher_id'       => $teacherId,
            'meta_keyword'     => $data['meta_keyword'],
            'meta_description' => $data['meta_description'],
        ];
        if ($editFlg) {
            //Update about.
            $saved = DB::table('about')->update($about);
        } else {
            $saved = DB::table('about')->insert($about);
        }
        
        if ($saved) {
            return redirect()->route('admin.about.index')->with('message','Cập nhật thông tin thành công');
        } else {
            return redirect()->route('admin.about.index')->with('message','Đã xảy ra lỗi khi cập nhật thông tin');
        }
    }
}
