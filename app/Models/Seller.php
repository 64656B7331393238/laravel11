<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    public $timestamps = false;

    function productData()
    {
        return $this->hasOne("App\Models\Product");
    }

    function productMany()
    {
        return $this->hasMany("App\Models\Product");
    }

}
