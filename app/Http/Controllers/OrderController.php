<?php

namespace App\Http\Controllers;

use App\Mail\OrderMessage;
use App\Model\Address;
use Illuminate\Http\Request;
use App\Model\Good;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //
    public function create($id)
    {
        $user = \Auth::user();
        if($user) return view('orders.new',['good'=>Good::find($id),'email'=>$user->email]);
        else return view('orders.new',['good'=>Good::find($id),'email'=>'']);
    }

    public function store(Request $request,$id)
    {
        $good = Good::find($id);
        $good->addorder($request->email,$request->address_id);
        if($request->address_id){
            $address = Address::find($request->address_id)->address;
        }
        else $address ='';
        Mail::to($request->email)->send(new OrderMessage($good,$address));

        return back();
    }
}
