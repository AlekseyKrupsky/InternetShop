<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Model\Good;

class GoodsController extends Controller
{
    //
    public function index()
    {
        $goods = Good::all()->sortByDesc('id');
        return view('goods.all',['goods'=>$goods]);
    }

    public function show($id)
    {

        $good = Good::find($id);
        return view('goods.show',['good'=>$good]);
    }
}
