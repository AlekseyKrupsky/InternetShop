<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends MainController
{
    //
    public function index()
    {

        return view('admin.index');
    }
}
