<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        // dd($categories);
        return view("categories.index", compact("categories"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "name" => "required|string|max:255|unique:categories,name",
            // "description" => "required|string|max:255",
        ],[
            "name.required" => "Category name is required",
            "name.unique" => "Category name must be unique",
            // "description.required" => "Description is required",
        ]);  
        
        $category = Category::create($request->all());
        // view(categories.index) --> view folder
        // to_route(categories.index) --> name of route 
        return to_route("categories.index");
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("categories.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd($category);
        return view("categories.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // dd($request);
        $request->validate([
            "name" => "required|string|max:255",
            // "description" => "required|string|max:255",
        ],[
            "name.required" => "Category name is required",
            "name.unique" => "Category name must be unique",
            // "description.required" => "Description is required",
        ]);

        $category->update($request->all());
        return to_route("categories.index");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("categories.index");

    }
}
