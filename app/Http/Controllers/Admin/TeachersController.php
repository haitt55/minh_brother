<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index')->with(['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Teacher $teacher)
    {
        //Create validator
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'image' => 'required | mimes:jpeg,jpg,gif,png',
            'intro' => 'required',
            'slogan' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        //Create image
        $data = $request->all();
        $image = $request->file('image');
        $imagePath = config('custom.product_image_path');
        if ($image) {
            $name = time() . '-' . create_slug($image->getClientOriginalName());
            $extention = $image->getClientOriginalExtension();
            $filename = "{$name}.{$extention}";
            Image::make($image->getRealPath())->save(public_path($imagePath . '/' . $filename));
        }
        $data['image'] = $imagePath . '/' . $filename;
        
        //Create teacher
        $saved = $teacher->createData($data);
        if ($saved) {
            return redirect()->route('admin.teachers.index')->with('message','Tạo giáo viên thành công');
        } else {
            return redirect()->route('admin.teachers.index')->with('message','Đã xảy ra lỗi khi tạo giáo viên');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        if (!$id || !$teacher) {
            return view('errors.500');
        }
        
        return view('admin.teachers.edit')->with(compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher, $id)
    {
        //Create validator
        $validator = Validator::make($request->all(), [
                    'full_name' => 'required',
                    'image'     => 'mimes:jpeg,jpg,gif,png',
                    'intro'     => 'required',
                    'slogan'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        //Create image
        $data = $request->all();
        $image = $request->file('image');
        $imagePath = config('custom.product_image_path');
        if ($image) {
            $name = time() . '-' . create_slug($image->getClientOriginalName());
            $extention = $image->getClientOriginalExtension();
            $filename = "{$name}.{$extention}";
            Image::make($image->getRealPath())->save(public_path($imagePath . '/' . $filename));
            $data['image'] = $imagePath . '/' . $filename;
        }
        
        //Create teacher
        $saved = $teacher->updateData($id, $data);
        
        if ($saved) {
            return redirect()->route('admin.teachers.index')->with('message','Cập nhật thông tin giáo viên thành công');
        } else {
            return redirect()->route('admin.teachers.index')->with('message','Đã xảy ra lỗi khi cập nhật thông tin giáo viên');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $teacherId = $request->get('id');
        $teacher = Teacher::find($teacherId);
        
        if (!$teacherId || !$teacher) {
            return view('errors.500');
        }
        
        $deleted = $teacher->delete();
        if ($deleted) {
            return redirect()->route('admin.teachers.index')->with('message','Xóa giáo viên thành công !');
        } else {
            return redirect()->route('admin.teachers.index')->with('message','Xóa giáo viên xảy ra lỗi');
        }
    }
}
