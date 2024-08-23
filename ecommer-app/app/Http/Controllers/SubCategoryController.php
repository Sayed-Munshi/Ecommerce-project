<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    /**
     * Viewing subcategories
    */
    function subcategories()
    {
        $subcategories = SubCategory::all();

        return view('backend.sub_category.subcategory_table', [
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Viewing subcategory form
    */
    function subcategory()
    {
        $categories = Category::all();

        return view('backend.sub_category.sub_category', [
            'categories' => $categories,
        ]);
    }

    /**
     * Storing data
    */
    function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);

        SubCategory::insert([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'created_at' => now(),
        ]);

        return back()->with('success', "Subcategory added successfully!");
    }

    /**
     * Deleting data
    */
    function delete($id)
    {
        SubCategory::find($id)->delete();

        return back()->with('success', "Subcategory deleted successfully!");
    }
}
