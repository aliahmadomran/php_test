<?php

namespace ACME\shipping_cost\Models;

use Illuminate\Database\Eloquent\Model;
use ACME\shipping_cost\Contracts\ShippingCost as ShippingCostContract;

class ShippingCost extends Model implements ShippingCostContract

{
    protected $fillable = ['product_id','city_id','default','cost' ];


    public function product(){
        return $this->belongsTo('Webkul\Product\Models\Product', 'product_id');
    }


    public function city(){
        return $this->belongsTo('ACME\Cities\Models\City', 'city_id');
    }

}