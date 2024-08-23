<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminUsersController extends Controller
{
    /**
     * Viewing customers
    */
    function admin_customers()
    {
        $customers = User::where('role', 'CUSTOMER')->latest()->get();

        return view('backend.users.customers', [
            'customers' => $customers
        ]);
    }

    /**
     * Viewing sellers
    */
    function admin_sellers()
    {
        $sellers = User::where('role', 'SELLER')->latest()->get();
        return view('backend.users.sellers', [
            'sellers' => $sellers
        ]);
    }

    /**
     * Viewing sellers
    */
    function admin_admins()
    {
        $currentUser = Auth::user()->id;
        $admins = User::where('role', 'ADMIN')
        ->where('id', '!=', $currentUser)
        ->latest()->get();

        return view('backend.users.admins', [
            'admins' => $admins,
        ]);
    }

    /**
     * Deleting admin
    */
    function delete($id)
    {
        // dd('here');
        try{
            $user = User::find($id);
            if($user){
                if($user->photo) {
                    $current_photo = storage_path("images/user_photos/".$user->photo);

                    Storage::disk('public')->delete($current_photo);
                }

                $isDelete = User::find($id)->delete();

                if($isDelete){
                    return back()->with('success', "User deleted successfully!");
                }
            }
            return back()->with('error', "Something went wrong");
        }catch(Exception $ex){
            return back()->with('error', "Error: ". $ex->getMessage());
        }
    }
}
