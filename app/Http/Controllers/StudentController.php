<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    private   $students = [
        ["id"=>1, "name"=> "ali", "age"=>20, "email"=> "ali@gmail.com", "image"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png"],
        ["id"=>2, "name"=> "ahmed", "age"=>22, "email"=> "ahmed@gmail.com", "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ4RujW9_si89qvtoXLwIripLMrwQe78N0xA&s"],
        ["id"=>3, "name"=> "aya", "age"=>30, "email"=> "aya@gmail.com", "image"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ4RujW9_si89qvtoXLwIripLMrwQe78N0xA&s"],
    ];
    
    function listStudents(){
        $track = "Open Source Track";
      return view("students.index", ["mystd"=>$this->students, "trackname"=>$track ]);
    }

    function showStudent($id){

        foreach ($this->students as $student){
            if($student["id"] == $id){
                // return $student;
                return view("students.show", ["std" => $student]);
            }
        }
        return abort(404); // redirect 404 page
        // // return $students;
    }

}



//  
//  index --> butn -->  show --> 
// href --> route --> controller 
// controller --> function 
// function --> login--> redirect --> view  