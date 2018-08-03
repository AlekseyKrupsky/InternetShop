<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    //
    protected $fillable=['name','description','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function goods()
    {
        return $this->hasMany('App\Model\Good');
    }


}
