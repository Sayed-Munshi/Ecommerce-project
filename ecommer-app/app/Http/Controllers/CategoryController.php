<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Viewing category form
    */
    function categories()
    {
        $categories = Category::latest()->get();

        return view('backend.category.categories_table', [
            'categories' => $categories,
        ]);
    }

    /**
     * Viewing category form
    */
    function category()
    {
        return view('backend.category.category');
    }

    /**
     * Storing data
    */
    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'icon' => 'required|mimes:png,jpg',
        ]);

        $icon = $request->icon;
        $extension = $icon->extension();
        $db_iconName = "images/categories/".random_int(1, 100)."-".time().".". $extension;
        $iconName = random_int(1, 100)."-".time().".". $extension;
        $uploadPath = "images/categories/".$iconName;

        Storage::disk('public')->put($uploadPath, file_get_contents($icon));

        Category::insert([
            'name' => $request->name,
            'icon' => $db_iconName,
            'created_at' => now(),
        ]);

        return back()->with('success', "Category added successfully!");
    }

    /**
     * Deleting data
    */
    function delete($id)
    {
        $category = Category::find($id);

        // $currentPath = "images/categories/".$category->icon;
        // unlink($currentPath);

        $category->delete();

        return back()->with('success', "Category deleted successfully!");
    }
}
