<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Comment;
use App\Model\Good;


class WelcomeController extends Controller
{
    //

    public function index()
    {

        $categorys = Category::all();
//        echo '/////////1//////////<br>';
//
//      // echo $categorys;
//
//        $comments = Comment::all()->sortByDesc('created_at');
//
//        foreach ($comments as $comment) {
//           echo $comment->text. '    ====    '. $comment->created_at.'<br>';
//        }
//echo '/////////2//////////<br>';
//        $goods = Good::whereBetween('price',[100,200])->get();
//
//       // $goods = Good::whereIn('price',[100,200,150])->get();
//
//        foreach ($goods as $good) {
//            echo $good->name. '    ====    '. $good->price.'<br>';
//        }
//        echo '/////////3//////////<br>';
//
//        $goods = Good::where('name','like','дет')->get();
//
//        foreach ($goods as $good) {
//            echo $good->name. '<br>';
//        }
//        echo '/////////4//////////<br>';
//
//        $goods = Good::all();
//        echo $goods->sum('price');
//

//        $goods = Good::sum_like('100','200','%vel%');
//        echo '/////////5//////////<br>';
//        foreach ($goods as $good) {
//            echo $good->name. '    ====    '. $good->price.'<br>';
//        }

//
//        echo '/////////6//////////<br>';
//
//        echo Good::count();

        return view('welcome',['categorys'=>$categorys]);
    }
}
