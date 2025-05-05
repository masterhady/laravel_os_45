<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ["name", "description"];


    function Courses(){
        return $this->hasMany(Course::class);
    }
}
