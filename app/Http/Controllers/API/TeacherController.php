<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Resources\TeacherResource;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return TeacherResource::collection(Teacher::all());
        
        // $teachers = Teacher::all();
        // return $teachers;
        // $data = ["data" => Teacher::all()];
        // return response()->json($data, 200);
        // return $teachers;
        // return response()->json([
        //     "status" => 200,
        //     "message" => "Teachers fetched successfully",
        //     "data" => $teachers
        // ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        $teacher = Teacher::create($request->all());
        // return $teacher;
        return TeacherResource::make($teacher);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findorfail($id);
        return $teacher;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "name" => "required",
            "email" => "required|email",
        ]);
        $teacher = Teacher::findorfail($id);

        $teacher->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findorfail($id);
        $teacher->delete();
        return "Deleted";
    }
}
