<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerOrAdmin
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role == "SUPER ADMIN" || Auth::user()->role == "ADMIN" || Auth::user()->role == "SELLER"){
            return $next($request);
        }
        abort(403, 'You are not authorized!');

        // return $request->expectsJson() ? null : route('login');
    }
}
