<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    protected $fillable = ['name','short_description','description','icon','category_id','price'];

    public function comments()
    {
        return $this->hasMany('App\Model\Comment')->orderByDesc('id');
    }

    public function addcomment($text)
    {
        $this->comments()->create(['text'=>$text]);
    }
    
    public function photos()
    {
        return $this->belongsToMany('App\Model\Photo','good_photo','good_id','photo_id');
    }

    public function addphoto($photo)
    {
        $this->photos()->sync($photo,false);
    }

    public function addresses()
    {
        return $this->belongsToMany('App\Model\Address','good_address','good_id','address_id');
    }

    public function addAddress($address)
    {
        $this->addresses()->sync($address,false);
    }


//    public function addaddress($address)
//    {
//        $this->addresses()->create(['address'=>$address]);
//    }

}
