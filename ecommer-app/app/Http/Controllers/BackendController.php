<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Viewing dashboard
    */
    function dashboard()
    {
        return view('backend.dashboard');
    }
}
