<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $text = '%'.$request->search.'%';
        $goods = Good::where('name','like',$text)->orWhere('short_description','like',$text)
            ->orWhere('description','like',$text)->get();

        return view('search',['goods'=>$goods,'search'=>$request->search]);
    }
}
