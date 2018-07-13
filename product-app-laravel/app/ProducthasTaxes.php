<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProducthasTaxes extends Model
{
    protected $fillable = ['product_id','tax_id'];
    
    public function product() {
        return $this->hasMany('App\Product');
    }
    
    public function tax_rate() {
        return $this->belongsTo('App\TaxRate','tax_id');
    }
}
