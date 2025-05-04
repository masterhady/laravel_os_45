<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/iti', function(){
    return "hello world";
});


Route::get('/students', [StudentController::class, 'listStudents'])->name("list");

Route::get('/students/{id}', [StudentController::class, 'showStudent'])->name("students.show");
//_----------------Courses-------------------_//
Route::get("/courses", [CourseController::class, 'index'])->name("courses.index");

Route::get("/courses/create", [CourseController::class, 'create'])->name("courses.create");

Route::get("/courses/{id}", [CourseController::class, 'show'])->name("courses.show");

Route::post("/courses", [CourseController::class, 'store'])->name("courses.store");


Route::get("/courses/{id}/edit", [CourseController::class, 'edit'])->name("courses.edit");


Route::put("/courses/{id}", [CourseController::class, 'update'])->name("courses.update");


Route::delete("/courses/{id}", [CourseController::class, 'destroy'])->name("courses.destroy");


// mvc 

/// routes  --> web.php  --> manage all routes  
// viwes: --> resources/views