<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    /**
     * Viewing dashboard
    */
    function dashboard(Request $request)
    {
        $categories = Category::all();
        $orders = Order::all();
        $seller_orders = OrderedProduct::where('seller_id', Auth::id())->get();
        $products = Product::all();
        $seller_products = Product::where('user_id', Auth::id())->get();
        $customers = User::where('role', 'CUSTOMER')->get();

        return view('backend.dashboard', [
            'categories' => $categories,
            'orders' => $orders,
            'seller_orders' => $seller_orders,
            'products' => $products,
            'seller_products' => $seller_products,
            'customers' => $customers,
        ]);
    }
}
