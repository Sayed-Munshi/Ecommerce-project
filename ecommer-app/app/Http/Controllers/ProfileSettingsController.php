<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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
            'email' => ['required','min:10','max:200', Rule::unique('users')->ignore(Auth::id()),],
            'photo' => 'image|max:1024'
        ]);

        if($request->photo) {
            $photo = $request->photo;
            $extension = $photo->extension();
            $photo_name = Auth::id()."-".random_int(100, 10000).".".$extension;
            $upload_path = "images/user_photos/".$photo_name;

            if(Auth::user()->photo) {
                $current_photo = storage_path("images/user_photos/".Auth::user()->photo);

                if(Storage::exists($current_photo)){
                    Storage::disk('public')->delete($current_photo);
                }

                Storage::disk('public')->put($upload_path, file_get_contents($photo));

                User::find(Auth::id())->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo' => $upload_path,
                    'updated_at' => Carbon::now()
                ]);

                return back()->with('info_success', "Profile info updated successfully!");
            }else {
                Storage::disk('public')->put($upload_path, file_get_contents($photo));

                User::find(Auth::id())->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo' => $upload_path,
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
