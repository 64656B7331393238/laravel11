<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function userHome()
    {
        $name = "Dekston";
        $users = ['Peter', "Sam", "Rinney"];
        return view('home', ['name' => $name, 'users' => $users]);
    }

    function userAbout()
    {
        return view('about');
    }
}
