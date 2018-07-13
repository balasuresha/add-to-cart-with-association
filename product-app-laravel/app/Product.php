<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','category_id','price_id','tax_id','product_avatar'];
    
    public function categories() {
        return $this->belongsTo('App\Category','category_id');
    }
    public function prices() {
        return $this->belongsTo('App\Prices','price_id');
    }
    public function producthas_taxes() {
        
        /*
         * product_taxes_pivot => Additonal table which we want to use perform belongsToMany Association
         * product_id => foreigen key which relates to product table
         * id => id of the product key auto increment field
         */
        return $this->belongsToMany('App\ProducthasTaxes','product_taxes_pivot','product_id','id');
    }
}
