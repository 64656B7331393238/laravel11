<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;
class SellerController extends Controller
{
    //
    function list()
    {
        return Seller::find(1)->productData;
    }

    function manyRel()
    {
        return Seller::find(1)->productMany;
    }

    function manytoOne()
    {
        return Product::with("seller")->get();
    }
}
