<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    protected $table = 'tax_rates';
    
    public function producthas_taxes(){
        return $this->hasMany('App\ProducthasTaxes');
    }
}
