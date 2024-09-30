<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        $data["message"] = "Category created successfully";
        return response()->json($data);    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        $data["message"] = "Category updated successfully";
        return response()->json($data);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $data["message"] = "Category deleted successfully";
        return response()->json($data);
    }
}
