<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends MainController
{
    //
    public function index()
    {
       $category = Category::all();
       return view('admin.category.index',['categorys'=>$category]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        //
        $categorys = Category::all();
        return view('admin.category.new',['categorys'=>$categorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
        Category::create($request->all());
        return redirect(route('adm_cat'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categorys = Category::where('id','<>',$category->id)->get();
        return view('admin.category.edit',['category'=>$category,'all_cats'=>$categorys]);
    }

    public function update(CategoryRequest $request,$id)
    {
        Category::find($id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect(route('adm_cat'));
    }
}
