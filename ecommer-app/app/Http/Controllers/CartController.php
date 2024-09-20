<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Viewing items
    */
    function cart()
    {
        $carts = Cart::where('user_id', Auth::id())->latest()->get();
        $total_items = $carts->count();

        return view('frontend.cart.cart', [
            'carts' => $carts,
            'total_items' => $total_items,
        ]);
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        if($quantity == '0') {
            return response()->json(['error' => 'Please add item quantity!']);
        }

        if(Cart::where('product_id', $productId)->exists()) {
            // update quantity
            Cart::updateOrCreate([
                'product_id' => $productId,
                'user_id' => Auth::id(),
            ], [
                'quantity' => $quantity,
                'updated_at' => now(),
            ]);

            return response()->json(['success' => true]);
        }

        $product = Product::find($productId);
        if(!$product) {
            return response()->json(['error' => 'Product not found!']);
        }

        Cart::insert([
            'user_id' => Auth::id(),
            'seller_id' => $product->user_id,
            'product_id' => $productId,
            'quantity' => $quantity,
            'created_at' => now(),
        ]);

        return response()->json(['success' => true]);
    }


    /**
     * Storing product to cart
    */
    function store_cart(Request $request, $id)
    {
        if($request->quantity == '0') {
            return back()->with('error', "Please add item quantity!");
        }

        if(Cart::where('product_id', $id)->exists()) {
            Cart::where('product_id', $id)->increment('quantity', $request->quantity);

            return back()->with('success', "Item added to your cart!");
        }

        Cart::insert([
            'user_id' => Auth::id(),
            'seller_id' => $request->seller_id,
            'product_id' => $id,
            'quantity' => $request->quantity,
            'created_at' => now(),
        ]);

        return back()->with('success', "Item added to your cart!");
    }

    /**
     * Deleting cart item
    */
    function delete_cart($id)
    {
        Cart::find($id)->delete();

        return back();
    }

    /**
     * Updating cart item
    */
    function update_cart(Request $request)
    {
        foreach($request->quantity as $id => $quantity) {
            Cart::find($id)->update([
                'quantity' => $quantity,
                'updated_at' => now(),
            ]);
        }

        return back()->with('success', "Cart updated successfully!");
    }
}
