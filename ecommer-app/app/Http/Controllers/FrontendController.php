<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Viewing home
     * */
    function home()
    {
        $subcategories = SubCategory::all();

        return view('frontend.home', [
            'subcategories' => $subcategories,
        ]);
    }
}
