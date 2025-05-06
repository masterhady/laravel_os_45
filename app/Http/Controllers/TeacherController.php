<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{

    function __construct(){
        $this->middleware("auth")->except(["index"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $teachers = Teacher::all();
        return view("teachers.index", compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teachers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {

        $request["user_id"] = Auth::id();
        $teacher = Teacher::create($request->all());
        
        return to_route("teachers.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        Gate::authorize('view-teachers');

        return view("teachers.show", compact("teacher"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {   
        Gate::authorize('edit_delete', $teacher);
        return view("teachers.edit", compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|string|max:255|unique:teachers,email",
        ],[
            "name.required" => "Teacher name is required",
            "email.unique" => "Teacher name must be unique",
        ]); 

        $teacher->update($request->all());
        return to_route("teachers.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        Gate::authorize('edit_delete', $teacher);

        $teacher->delete();
        return to_route("teachers.index");
    }
}
