<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * User profile
    */
    function user_profile()
    {
        return view('frontend.profile.user');
    }
}
