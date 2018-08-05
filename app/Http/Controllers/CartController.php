<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;


class CartController extends Controller
{
    //
    public function index($id=null)
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
        else
        {
            $array = explode(',',\Cookie::get('cart_good'));
        }
        if($array){
            $goods = Good::find($array);
        }

        return view('cart',['goods'=>$goods]);
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
        return view('cart',['goods'=>$goods]);
    }
}



