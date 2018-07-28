<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
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
        return view('admin.category.new');
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
        return view('admin.category.edit',['category'=>$category]);
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
