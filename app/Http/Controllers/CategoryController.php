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

    public function view($id){
        $category = Category::find($id);
        return response()->json($category);
    }

    public function store(Request $request){
        $category = Category::create($request->all());
        return response()->json($category); 
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json($category);
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json($category);
    }
}
