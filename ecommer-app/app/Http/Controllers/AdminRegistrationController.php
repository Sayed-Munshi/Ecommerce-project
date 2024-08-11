<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegistrationController extends Controller
{
    /**
     * Registration code
    */
    function add_admin(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|min:10|max:200',
            'password' => 'required|min:6|max:20',
            'password_confirmation' => 'required_with:password|same:password|min:6|max:20'
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "ADMIN",
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', "User added successfully!");
    }
    
    /**
     * Admin registration
    */
    function admin_registration()
    {
        return view('backend.users.admin_registration');
    }
}
