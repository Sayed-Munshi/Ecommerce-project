<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Laravel\Facades\Image;

class ProfileSettingsController extends Controller
{
    /**
     * Viewing settings
    */
    function settings()
    {
        return view('backend.profile.settings');
    }

    /**
     * Updating profile info
    */
    function update_profile_info(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:80',
            'email' => 'required|min:10|max:200',
            'photo' => 'image|max:1024'
        ]);

        if($request->photo) {
            $photo = $request->photo;
            $extension = $photo->extension();
            $photo_name = "profile_photo"."-".Auth::id().".".$extension;
            $upload_path = "uploads/users_photo/admin/";

            if(Auth::user()->photo) {
                $current_photo = public_path($upload_path.Auth::user()->photo);
                unlink($current_photo);

                Image::read($photo)->save(public_path($upload_path.$photo_name));
                
                User::find(Auth::id())->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo' => $photo_name,
                    'updated_at' => Carbon::now()
                ]);

                return back()->with('info_success', "Profile info updated successfully!");
            }else {
                Image::read($photo)->save(public_path($upload_path.$photo_name));
                
                User::find(Auth::id())->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo' => $photo_name,
                    'updated_at' => Carbon::now()
                ]);

                return back()->with('info_success', "Profile info updated successfully!");
            }
        }else {
            User::find(Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'updated_at' => Carbon::now()
            ]);

            return back()->with('info_success', "Profile info updated successfully!");
        }
    }

    /**
     * Updating password
    */
    function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password',
        ]);

        $auth = User::find(Auth::id());

        if(Hash::check($request->current_password, $auth->password)) {
            $auth->update([
                'password' => Hash::make($request->password),
                'updated_at' => Carbon::now(),
            ]);

            return back()->with('success', "Password updated successfully!");
        }else {
            return back()->with('warning', "Current password isn't match!");
        }
    }
}
