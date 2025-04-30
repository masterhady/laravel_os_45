<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/iti', function(){
    return "hello world";
});


Route::get('/students', [StudentController::class, 'listStudents'])->name("list");

Route::get('/students/{id}', [StudentController::class, 'showStudent'])->name("students.show");





// mvc 

/// routes  --> web.php  --> manage all routes  
// viwes: --> resources/views