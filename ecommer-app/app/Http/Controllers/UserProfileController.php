<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * User profile
    */
    function user_profile()
    {
        $orders = OrderList::where('customer_id', Auth::id())->latest()->get();
        $total = Order::where('customer_id', Auth::id())->sum('total');
        $pendingTotal = Order::where('customer_id', Auth::id())->where('status', 'placed')->sum('total');

        return view('frontend.profile.user', [
            'orders' => $orders,
            'total' => $total,
            'pendingTotal' => $pendingTotal
        ]);
    }

    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'current_password' => 'nullable|string|min:6',
            'new_password' => 'nullable|string|min:6|confirmed',
        ]);

        $user = Auth::user();

        // Update email, phone, and address
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;

        // If current_password and new_password are provided, update the password
        if ($request->filled('current_password') && $request->filled('new_password')) {
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
            } else {
                return back()->withErrors(['current_password' => 'Current password does not match.']);
            }
        }

        // If a new photo is uploaded, update the photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/users'), $photoName);
            $user->photo = $photoName;
        }

        // Save the updated user information
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
