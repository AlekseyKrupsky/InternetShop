<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Good_photo extends Model
{
    //
    protected $table = 'good_photo';
    protected $fillable = ['good_id','photo_id'];
}
