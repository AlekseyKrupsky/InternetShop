<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;

class CommentController extends Controller
{
    //
    public function add(Request $request,$id)
    {

        Good::find($id)->addcomment($request->comment);

        return redirect(route('good_show',$id));
    }
}
