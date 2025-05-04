<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    function index()
    {
        $courses = Course::all(); 
        return view('courses.index', compact('courses')); // pass the 
    }

    function show($id){
        // get one course by id from database   
        $course = Course::findOrfail($id);
        // return view('courses.show', ["mycrs" => $course]); // pass the course to the view
        return view('courses.show', compact('course')); // pass the 
    }


    function create(){
        // return "hellooo";
        return view('courses.create');
    }


    function store(){
        $course = new Course(); // new object == new row in database

        request()->validate([
            "name" => ["required", "string", "max:255"],
            "price" => ["required", "numeric"],
            "category" => ["required", "string", "max:255"],
        ]);

        $name = request("name");
        $price = request("price");
        $description = request("description");
        $image = request("image");
        $category = request("category");

        $course->name = $name;
        $course->price = $price;
        $course->description = $description;
        $course->image = $image;
        $course->category = $category;
        $course->save(); // save to database
        return to_route("courses.index"); // pass the course to the view
        // return to_route("courses.show", $course->id); // redirect to the course page
        //  route  -->  rfeturn url 
        // to_route --> redirect to the route
    }

    function edit($id){
        $course = Course::findOrfail($id);
        // return $id;
        return view('courses.edit', compact('course')); // pass the course to the view
    }

    function update($id){
    //    return "updated";

        $course = Course::findOrfail($id);
        $name = request("name");
        $price = request("price");
        $description = request("description");
        $image = request("image");
        $category = request("category");

        $course->name = $name;
        $course->price = $price;
        $course->description = $description;
        $course->image = $image;
        $course->category = $category;
        $course->save(); // save to database
        return to_route("courses.index");
      
    }


    function destroy($id){
        // return "deleted";
        $course = Course::findOrfail($id);
        $course->delete(); // delete from database
        return to_route("courses.index");
    }








}
