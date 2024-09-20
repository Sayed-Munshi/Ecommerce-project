<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerOrderController extends Controller
{
    /**
     * Orders table
    */
    function order_list()
    {

        if(Auth::user()->role == 'SUPER ADMIN' || Auth::user()->role == 'ADMIN') {
            $order = Order::with('ordered_products')->latest()->paginate(10);
            return view('backend.orders.order_list', [
                'AllOrder' => $order
            ]);
        }

        $products = OrderedProduct::where('seller_id', Auth::id())->get();
        $array = [];
        foreach($products as $product) {
            $order_id = $product->order_id;
            $array[] = $order_id;
        }

        $array = array_unique($array);

        $order = [];

        foreach($array as $order_id) {
            $order[] = Order::where('order_id', $order_id)->with('ordered_products')->latest()->first();
        }

        // set paggination limit to 10
        $order = collect($order)->paginate(10);

        return view('backend.orders.order_list', [
            'AllOrder' => $order
        ]);
    }

    /**
     * Changing status
    */
    function updateStatus(Request $request, $id)
    {
        $status = $request->status;

        Order::where('order_id', $id)->update([
            'status' => $status,
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Status updated successfully');
    }

    /**
     * Order tracking
    */
    function order_track($id)
    {
        $order = Order::where('order_id', $id)->with('ordered_products')->first();
        $billing = Billing::where('order_id', $id)->first();
        $customer = User::where('id', $order->customer_id)->first();
        return view('backend.orders.track', [
            'order' => $order,
            'billing' => $billing,
            'customer' => $customer
        ]);
    }

    /**
     * Order view
    */
    function order_view($id)
    {
        $order = Order::where('order_id', $id)->with('ordered_products.product.subcategory')->first();
        $billing = Billing::where('order_id', $id)->first();
        $customer = User::where('id', $order->customer_id)->first();
        return view('backend.orders.details', [
            'order' => $order,
            'billing' => $billing,
            'customer' => $customer
        ]);
    }

    function order_received($id)
    {
        Order::where('order_id', $id)->update([
            'status' => 'received',
            'updated_at' => now(),
        ]);

        return back();
    }
    function order_canceled($id)
    {
        Order::where('order_id', $id)->update([
            'status' => 'canceled',
            'updated_at' => now(),
        ]);

        return back();
    }
    function order_shipped($id)
    {
        Order::where('order_id', $id)->update([
            'status' => 'shipped',
            'updated_at' => now(),
        ]);

        return back();
    }
    function order_delivered($id)
    {
        Order::where('order_id', $id)->update([
            'status' => 'delivered',
            'updated_at' => now(),
        ]);

        return back();
    }
}
