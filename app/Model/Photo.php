<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable =['name','alt','title','path'];

    public function goods()
    {
        return $this->belongsToMany('App\Model\Good');
    }
}
