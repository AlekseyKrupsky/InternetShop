<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class WelcomeController extends Controller
{
    //

    public function index()
    {

       $categorys = Category::where('parent_id',NULL)->get();
        return view('welcome',['allcats'=>$categorys]);
    }
}
