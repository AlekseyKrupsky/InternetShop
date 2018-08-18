<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;

class CartController extends Controller
{
    //

    public function show()
    {
        $array = explode(',',\Cookie::get('cart_good'));
//        if($array){
//            $goods = Good::find($array);
//        }
        $goods_array = [];
        foreach ($array as $item) {
            if(Good::find($item))
            $goods_array[] = Good::find($item);
        }
        $goods = collect($goods_array);
        return view('cart',['goods'=>$goods]);
    }
    
    
    public function add($id=null)
    {
        if($id){
            if(!\Cookie::get('cart_good'))
            {
                \Cookie::queue('cart_good',$id,60*24*30);
            }
            else {
                $array = explode(',',\Cookie::get('cart_good'));
                $array[] = $id;
                \Cookie::queue('cart_good',implode(',',$array),60*24*30);
            }
        }

        return redirect(route('cart'));

    }
    public function destroy($id)
    {
        $array = explode(',',\Cookie::get('cart_good'));
        $key = array_search($id,$array);
        unset($array[$key]);
        \Cookie::queue('cart_good',implode(',',$array),60*24*30);
        if($array){
            $goods = Good::find($array);
        }

        return redirect(route('cart'));
    }
}
