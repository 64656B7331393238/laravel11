<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    // function addUser(Request $request)
    // {
    //     echo "Username is " . $request->username;
    //     echo "<br>";
    //     echo "User city is " . $request->city;
    //     echo "<br>";
    //     echo "User email is " . $request->input('email');

    // }

    // function userSubmit(Request $request)
    // {
    //     echo $request->city;
    //     echo "<br>";
    //     echo $request->gender;
    //     echo "<br>";
    //     print_r($request->skill);
    // }

    function addUser(Request $request)
    {
        $request->validate(
            [
                'username' => 'required | min:3 | max:15 ',
                'email' => 'required | email',
                'city' => 'required | uppercase',
                'skills' => 'required'
            ],
            [
                'username.required' => 'username can not be empty',
                'username.min' => 'user min characters should be 3',
                'username.max' => 'user max characters should be 15',
                'email.email' => 'this email is not valid',
                'city.uppercase' => 'City should be in uppercase only'
            ]
        );
        return $request;
    }
}
