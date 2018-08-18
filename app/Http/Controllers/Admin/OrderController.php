<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Support\Facades\Mail;
use App\Model\Good;
use App\Model\Address;
use App\Mail\ConfirmOrder;

class OrderController extends MainController
{
    //
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders',['orders'=>$orders]);
   }

    public function destroy(Request $request,$id)
    {
        $order = Order::find($id);
        $good = Good::find($order->good_id);
        if($order->address_id){
            $address = Address::find($order->address_id)->address;
        }
        else $address = $request->address;
        Mail::to($order->email)->send(new ConfirmOrder($good,$address));
        $order->delete();
        return back();
   }

}
