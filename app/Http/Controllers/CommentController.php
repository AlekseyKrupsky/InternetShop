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

        session()->flash('message','Комментарий добавлен');
      //  Mail::to($request->user())->send(new OrderShipped($order));
        return redirect(route('good_show',$id));
    }
}
