<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    

    function Category(){
        //  category -- course 
        // course --> belong --> category 

        return $this->belongsTo(Category::class);

    }


}
