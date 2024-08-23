<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    /**
     * Viewing customer signup
    */
    function customer_signup()
    {
        return view('frontend.signup.customer');
    }

    /**
     * Inserting customer
    */
    function store_customer(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|min:10|max:200|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "CUSTOMER",
            'created_at' => Carbon::now(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('user.profile'));
    }

    /**
     * Inserting seller
    */
    function store_seller(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|min:10|max:200|email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "SELLER",
            'created_at' => now(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard'));
    }

    /**
     * Viewing seller signup
    */
    function seller_signup()
    {
        return view('frontend.signup.seller');
    }
}
