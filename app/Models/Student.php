<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "college_students";

    function testFunction()
    {
        return "Dummy Function";
    }
}
