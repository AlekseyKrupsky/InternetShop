<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Static_data;

class AboutController extends Controller
{
    //
    public function edit()
    {
        $data = Static_data::where('key','about')->first();
       // dump($data->value);
        return view('admin.about.edit',['text'=>$data]);
    }

    public function store(Request $request)
    {
        Static_data::where('key','about')->first()->update([
            'value'=>$request->about
        ]);

        return redirect()->route('adm_about');
    }
}

