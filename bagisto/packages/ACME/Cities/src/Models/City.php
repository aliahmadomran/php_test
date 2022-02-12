<?php

namespace ACME\Cities\Models;

use Illuminate\Database\Eloquent\Model;
use ACME\Cities\Contracts\City as CityContract;

class City extends Model implements CityContract
{
    protected $fillable = ['country','city'];


    public function shipping_costs(){
        return $this->hasMany('ACME\shipping_cost\Models\ShippingCost', 'city_id');
    }
}