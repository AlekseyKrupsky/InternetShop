<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    //
    public function show($id)
    {
        $cat = Category::find($id);
        $children = Category::where('parent_id',$id)->get();
        return view('sections.sections',['children'=>$children,'cat'=>$cat]);
    }
}
