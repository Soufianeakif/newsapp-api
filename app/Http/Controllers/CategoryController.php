<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all categories
        $categories = Category::all();
    
        // Return the categories with a 200 status code
        return response()->json($categories, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
        ]);

        // Create a new category
        $category = Category::create($request->all());

        // Return the created category with a 201 status code
        return response()->json($category, 201);
    }

    // Other resourceful methods (show, update, destroy) are also included...
}
