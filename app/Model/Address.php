<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = ['address'];

    public function goods()
    {
        return $this->belongsToMany('App\Model\Good');
    }

    public function addgood($address)
    {
        //$this->goods()->create(['address'=>$address]);
    }
}
