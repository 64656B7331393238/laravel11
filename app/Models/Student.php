<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // protected $table = "students_1";

    function getNameAttribute($val)
    {
        return ucfirst($val);
    }

    function getBatchAttribute($val)
    {
        return "TAR UMT Batch: " . $val;
    }

    function setNameAttribute($val)
    {
        return $this->attributes['name'] = ucfirst($val);
    }

    function setBatchAttribute($val)
    {
        return $this->attributes['batch'] = "TAR UMT Batch: " . $val;
    }
}
