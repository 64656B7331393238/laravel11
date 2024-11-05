<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // //
    // function show()
    // {
    //     // echo "test";
    //     return to_route('hm');
    // }

    // function user()
    // {
    //     return to_route('user', ['name' => 'dekston']);
    // }

    function show()
    {
        return "show student list";
    }

    function add()
    {
        return "add new student";
    }
}
