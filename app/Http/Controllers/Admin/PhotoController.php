<?php

namespace App\Http\Controllers\Admin;

use App\Model\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Good;
use App\Http\Requests\PhotoRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos = Photo::all();
        return view('admin.photo.index',['photos'=>$photos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.photo.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request,$id=null)
    {
        // dump($request->file());
       //
        //$request->path =$path;
        // echo $request->icon;
       // dump($request->all());
      //  dump($request->except('path'));
     //  dump($request->path->extension());

    $path = time().'_'.$request->path->getClientOriginalName();
    $request->path->move(public_path('images/photos'), $path);
    $all = $request->except('path');
    $all['path'] = $path;
    $photo = Photo::create($all);

        if($id){
            Good::find($id)->addphoto($photo);
            return redirect(route('adm_good_edit',$id));
        }
    else return redirect(route('adm_photo'));


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
        $photo = Photo::find($id);
        return view('admin.photo.edit',['photo'=>$photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoRequest $request, $id)
    {
        //
        Photo::find($id)->update($request->all());

        return redirect(route('adm_photo_edit',$id));
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
        Photo::find($id)->delete();
        return redirect(route('adm_photo'));
    }
}
