<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTaxesPivot extends Model
{
    protected $table = 'product_taxes_pivot';
    protected $fillable = ['product_id','tax_id'];
}
