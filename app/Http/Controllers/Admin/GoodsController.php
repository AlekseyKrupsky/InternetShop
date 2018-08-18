<?php

namespace App\Http\Controllers\Admin;

//use App\Model\Comment;


use App\Http\Requests\GoodRequest;
use App\Model\Category;
use App\Model\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Address;


class GoodsController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $goods = Good::all();
        return view('admin.good.index',['goods'=>$goods]);
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
        return view('admin.good.new',['categorys'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodRequest $request)
    {
        //
       // dump($request->file());
        $icon = time().'_'.$request->file()['icon']->getClientOriginalName();
        $request->file()['icon']->move(public_path('images/icons'), $icon);
        $all = $request->except('icon');
        $all['icon'] = $icon;
        Good::create($all);
        return redirect(route('adm_good'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

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
        $good = Good::find($id);
        $cats = Category::all();
        $addresses = Address::all();
        return view('admin.good.edit',['good'=>$good,'categorys'=>$cats,'addresses'=>$addresses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodRequest $request, $id)
    {
        //
            if($request->icon)
            {
                $icon = time().'_'.$request->icon->getClientOriginalName();
                $request->icon->move(public_path('images/icons'), $icon);
                $all = $request->except('icon');
                $all['icon'] = $icon;
                Good::find($id)->update($all);
            }
            else Good::find($id)->update($request->all());
            return redirect(route('adm_good_edit',$id));

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
        Good::find($id)->delete();
        return redirect(route('adm_good'));
    }
}
