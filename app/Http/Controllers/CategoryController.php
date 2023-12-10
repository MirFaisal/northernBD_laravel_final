<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view("components.all-categories-list", compact("categories"));
    }
    public function create()
    {
        return view("components.add-category");
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view("components.update-category", compact("category"));
    }

    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}