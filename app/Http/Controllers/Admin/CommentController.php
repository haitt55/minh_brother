<?php

namespace App\Http\Controllers\Admin;

use App\Models\RateComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{

    function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comments = RateComment::all()->sortByDesc('updated_at');

        return view('admin.comments.index')->with([
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            $rateComment = RateComment::find($data['comment_id']);
            $rateComment->admin_reply = $data['admin_reply'];;
            $rateComment->save();

            return redirect('admin.comments.index');
        } catch (Exception $e) {

            return redirect()->route('admin.comments.index');
        }
    }

    public function updateComment(Request $request, $id)
    {
        $data = $request->all();
        try {
            $rateComment = RateComment::find($data['comment_id']);
            $rateComment->admin_reply = $data['admin_reply'];;
            $rateComment->save();

            return redirect('admin.comments.index');
        } catch (Exception $e) {

            return redirect('admin.comments.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addComment(Request $request)
    {
        $id = $request->get('id');
        $rateComment = RateComment::where('id', $id)->get()->first();
        if ($rateComment->admin_checked) {
            $admin_checked = 0;
        } else {
            $admin_checked = 1;
        }
        $result = DB::table('rate_comments')->where('id', $id)->update(['admin_checked' => $admin_checked]);
        if ($result) {
            echo 'success';
        } else {
            echo 'fail';
        }
    }
}
