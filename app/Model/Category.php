<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categorys';
    protected $fillable=['name','description'];
    //

    public function subsections()
    {
        return $this->hasMany('App\Model\Subsection');
    }
}



