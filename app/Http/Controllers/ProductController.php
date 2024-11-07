<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
class ProductController extends Controller
{
    //
    function productList()
    {
        $totalProduct = 20;

        return Blade::render('<h1>Product List : {{$total}}</h1>', ['total' => $totalProduct]);
    }

    function addProduct()
    {
        return "product is added";
    }

    function updateProduct()
    {
        return "product is updated";
    }
}
