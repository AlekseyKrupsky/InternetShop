<?php

namespace App\Http\Controllers;

use App\Model\Static_data;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $data = Static_data::where('key','about')->first();
        return view('about',['text'=>$data]);
        
    }

}
