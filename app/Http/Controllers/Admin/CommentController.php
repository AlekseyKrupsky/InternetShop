<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends MainController
{
    //
    public function index()
    {
        $comments = Comment::all()->sortByDesc('id');
        return view('admin.comments',['comments'=>$comments]);
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect(route('adm_comments'));
    }
}
