<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['text','good_id'];

    public function good()
    {
        return $this->belongsTo('App\Model\Good');
    }
}
