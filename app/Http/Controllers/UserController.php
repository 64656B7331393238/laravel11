<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //

    function addUser(Request $req)
    {
        $req->session()->flash("message", "User added successfully");
        $req->session()->flash("name", "Dekston");
        //store user data in DB
        return redirect('user');
    }

    // function login(Request $request)
    // {
    //     $request->session()->put('user', $request->input('user'));
    //     $request->session()->put('allData', $request->input());
    //     return redirect('profile');
    // }

    // function logout()
    // {
    //     session()->pull('user');
    //     return redirect('profile');
    // }

    // function login(Request $req)
    // {
    //     echo $req->method();
    //     echo "<br/>";
    //     echo $req->path();
    //     echo "<br/>";
    //     echo $req->input(
    //         'user'
    //     );
    //     echo "<br/>";
    //     echo $req->input(
    //         'password'
    //     );
    //     echo "<br/>";
    //     print_r($req->input());
    //     echo "<br/>";
    //     echo $req->ip();

    //     if ($req->method() == "POST") {
    //         echo "this is post method";
    //     } else {
    //         echo "this is other req code";
    //     }
    // }
    // function getTest()
    // {
    //     return 'this is get method';
    // }

    // function postTest()
    // {
    //     return 'this is post method';
    // }

    // function putTest()
    // {
    //     return 'this is put method';
    // }

    // function deleteTest()
    // {
    //     return 'this is delete method';
    // }

    // function any()
    // {
    //     return "this is any method";
    // }

    // function group1()
    // {
    //     return "this is group1 method";
    // }

    // function group2()
    // {
    //     return "this is group2 method";
    // }

    // function queries()
    // {

    // SELECT DATA
    // $response = User::get();
    // $response = User::all();

    // $response = User::where('name', 'dekston')->get();

    // $response = User::first();
    // $response = [$response];

    // return view('user', ['users' => $response]);

    //INSERT DATA
    // $response = User::insert([
    //     "name" => 'Sam',
    //     "email" => 'Sam@test.com',
    //     "password" => '',
    // ]);

    // if ($response) {
    //     return "data inserted";
    // } else {
    //     return "fail to insert data";
    // }

    //UPDATE DATA
    // $response = User::where('name', 'dekston')->update(['email' => 'dekstonfung@test.com']);

    // if ($response) {
    //     return "data updated";
    // } else {
    //     return "fail to update data";
    // }

    //DELETE DATA
    // $response = User::where('name', 'Sam')->delete();

    // if ($response) {
    //     return "data deleted";
    // } else {
    //     return "fail to delete data";
    // }
    // }
}
