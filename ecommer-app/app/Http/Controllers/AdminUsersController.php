<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Viewing customers
    */
    function admin_customers()
    {
        return view('backend.users.customers');
    }

    /**
     * Viewing sellers
    */
    function admin_sellers()
    {
        return view('backend.users.sellers');
    }

    /**
     * Viewing sellers
    */
    function admin_admins()
    {
        $admins = User::where('role', 'ADMIN')->latest()->get();

        return view('backend.users.admins', [
            'admins' => $admins,
        ]);
    }

    /**
     * Deleting admin
    */
    function delete_admin($id)
    {
        User::find($id)->delete();

        return back()->with('success', "User deleted successfully!");
    }
}
