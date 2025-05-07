<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Http\Controllers\API\TeacherController;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get("/itios", function(){
//     return "hello";
// });

// Route::get("/teachers", function(){
//     $teachers = Teacher::all();
//     return $teachers;
// });


Route::apiResource("/teachers", TeacherController::class);


Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);


Route::middleware('auth:sanctum')->group(function(){
Route::post("/logout", [AuthController::class, "logout"]);

});