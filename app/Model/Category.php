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

    public function goods()
    {
        return $this->hasMany('App\Model\Good');
    }


    public function getParent()
    {
        if($this->parent_id){
          return Category::find($this->parent_id)->getParent().$this->name.' / ';
        }
        else {
            return $this->name.' / ';
        }
    }

    public function getChildren()
    {
        
    }
}



