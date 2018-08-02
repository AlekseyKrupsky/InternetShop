<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Static_data extends Model
{
    //
    protected $table = 'static_data';
    protected $fillable =['key','value'];
}
