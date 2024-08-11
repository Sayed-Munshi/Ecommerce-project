<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Viewing home
     * */ 
    function home()
    {
        return view('frontend.home');
    }
}
