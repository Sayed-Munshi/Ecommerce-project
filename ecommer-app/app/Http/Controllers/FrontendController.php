<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\vendor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Viewing home
     * */
    function home()
    {
        $subcategories = SubCategory::all();
        $vendorId = vendor::first()->id;
        return view('frontend.home', [
            'subcategories' => $subcategories,
            'vendorId' => $vendorId
        ]);
    }

    /**
     * Viewing about
     * */
    function about()
    {
        return view('frontend.pages.about');
    }

    /**
     * Viewing contact
     * */

    function contact()
    {
        return view('frontend.pages.contact');
    }
}
