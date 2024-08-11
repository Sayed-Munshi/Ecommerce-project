<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Viewing category
    */
    function category()
    {
        return view('backend.category.category');
    }
}
