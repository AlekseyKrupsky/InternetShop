<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;

class OrderController extends Controller
{
    //
    public function create($id)
    {
        $user = \Auth::user();
        if($user) return view('orders.new',['good'=>Good::find($id),'email'=>$user->email]);
        else return view('orders.new',['good'=>Good::find($id),'email'=>'']);
    }
}
