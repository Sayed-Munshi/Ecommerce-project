<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    function index() {
        $vendors = vendor::with('seller')->get();

        return view('backend.vendor.index', compact('vendors'));
    }

    function create() {

        $sellers = User::where('role', 'SELLER')->get();
        return view('backend.vendor.create', compact('sellers'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:vendors,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'seller_id' => 'required|exists:users,id',
        ]);

        // Create a new vendor
        Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'user_id' => $request->seller_id, // Assuming the seller relationship exists
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.vendors')->with('success', 'Vendor created successfully!');
    }


    function edit($id) {
        $vendor = vendor::find($id);
        $sellers = User::where('role', 'SELLER')->get();
        return view('backend.vendor.edit', compact('vendor', 'sellers'));
    }

    function delete($id) {
        vendor::find($id)->delete();

        return back()->with('success', 'Vendor deleted successfully');
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:vendors,email,' . $id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'seller_id' => 'required|exists:users,id',
        ]);

        // Find the vendor by id
        $vendor = Vendor::findOrFail($id);

        // Update the vendor's information
        $vendor->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'user_id' => $request->seller_id, // Assuming the seller relationship exists
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.vendors')->with('success', 'Vendor updated successfully!');
    }

}
