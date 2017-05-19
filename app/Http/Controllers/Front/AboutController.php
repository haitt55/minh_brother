<?php

namespace App\Http\Controllers\Front;

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
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('about')->first();
        $linkYoutube = $about->link_youtube;
        $about->id_youtube = null;
        if ($linkYoutube) {
            $pattern = "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#";
            preg_match($pattern, $linkYoutube, $matches);
            $about->id_youtube = !empty($matches) ? $matches[0] : null;
        }
        $teachersId = explode(',', $about->teacher_id);
        foreach ($teachersId as $teacherId) {
            if (isset($this->teachers[$teacherId])) {
                $teachers[] = $this->teachers[$teacherId];
            }
        }
        return view('front.about.index')->with(compact('about', 'teachers'));
    }
}
