<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Viewing dashboard
    */
    function dashboard(Request $request)
    {

        return view('backend.dashboard');
    }
}
