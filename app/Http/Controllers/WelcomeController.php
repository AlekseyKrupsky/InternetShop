<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class WelcomeController extends Controller
{
    //

    public function index()
    {

       $categorys = Category::all();
      // echo $categorys;
        return view('welcome',['categorys'=>$categorys]);
    }
}
