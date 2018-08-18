<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = ['email','address_id'];

    public function good()
    {
        return $this->belongsTo('App\Model\Good');
    }
}
