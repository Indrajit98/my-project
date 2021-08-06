<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';
    public function category(){
        return $this->belongsTo('App\ShopType','shop_type_id');
    }
}
