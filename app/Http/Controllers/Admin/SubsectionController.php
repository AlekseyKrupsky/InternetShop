<?php

namespace App\Http\Controllers\Admin;

use App\Model\Subsection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Http\Requests\SubsectionRequest;

class SubsectionController extends MainController
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subs = Subsection::all();
        return view('admin.subsection.index',['subs'=>$subs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('admin.subsection.new',['categorys'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubsectionRequest $request)
    {
        Subsection::create($request->all());
        return redirect(route('adm_sub'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sub = Subsection::find($id);
        $cats = Category::all();
        return view('admin.subsection.edit',['sub'=>$sub,'categorys'=>$cats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubsectionRequest  $request, $id)
    {
        //
        Subsection::find($id)->update($request->all());
        return redirect(route('adm_sub_each',$id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Subsection::find($id)->delete();
        return redirect(route('adm_sub'));
    }
}
