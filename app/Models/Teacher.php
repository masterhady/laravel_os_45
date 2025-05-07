<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    protected $fillable = ["name", "email", "salary", "phone", "user_id", 'department_id'];
    // use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Department(){
        return $this->belongsTo(Department::class);
    }

}
