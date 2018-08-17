<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categorys';
    protected $fillable=['name','description','parent_id'];
    //

    public function subsections()
    {
        return $this->hasMany('App\Model\Subsection');
    }

    public static function getParent()
    {

    }
}



