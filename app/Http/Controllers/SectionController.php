<?php

namespace App\Http\Controllers;

use App\Model\Subsection;
use Illuminate\Http\Request;
use App\Model\Category;

class SectionController extends Controller
{
    //
    public function index($id)
    {
       // $goods = Good::where('category_id',$id)->get();
        //  dump($goods);
       $cat = Category::find($id);
      // dump($goods = $cat->subsections->first);
      // ;
        return view('sections.sections',['cat'=>$cat]);
    }

    public function show($id)
    {
        $sub = Subsection::find($id);
        $goods = $sub->goods;
        return view('sections.each',['goods'=>$goods,'sub'=>$sub]);
    }

}
