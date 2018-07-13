<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = 'prices';
    
    public function product() {
        return $this->hasMany('App\Product');
    }
}
