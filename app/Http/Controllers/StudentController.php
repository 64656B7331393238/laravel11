<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show()
    {
        return "LIST OF STUDENT";
    }

    function add()
    {
        return "STUDENT ADDED";
    }

    function delete()
    {
        return "STUDENT DELETED";
    }

    function about($name)
    {
        return "STUDENT name is " . $name;
    }
}
