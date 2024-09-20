<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\OrderList;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerOrderStatus extends Controller
{
    /**
     * Returning order status
    */
    function order_placed()
    {
        $order_id = session('order_id');

        $order_details = Order::where('order_id', $order_id)->get();
        $order_detail = '';
        foreach($order_details as $detail) {
            $order_detail = $detail;
        }

        $ordered_products = OrderedProduct::where('order_id', $order_id)->latest()->get();
        $total_ordered_products = $ordered_products->count();

        $shipping_details = Shipping::where('order_id', $order_id)->get();
        $shipping_detail = '';
        foreach($shipping_details as $detail) {
            $shipping_detail = $detail;
        };

        if($order_id) {
            return view('frontend.order.placed', [
                'order_detail' => $order_detail,
                'ordered_products' => $ordered_products,
                'total_ordered_products' => $total_ordered_products,
                'shipping_detail' => $shipping_detail,
            ]);
        }else {
            return redirect(route('user.profile'));
        }
    }

    /**
     * Order Status
    */
    function order_status($id)
    {
        $order_details = Order::where('order_id', $id)->get();
        $order_detail = '';
        foreach($order_details as $detail) {
            $order_detail = $detail;
        }

        $ordered_products = OrderedProduct::where('order_id', $id)->latest()->get();
        $total_ordered_products = $ordered_products->count();

        $shipping_details = Shipping::where('order_id', $id)->get();
        $shipping_detail = '';
        foreach($shipping_details as $detail) {
            $shipping_detail = $detail;
        };

        return view('frontend.order.status', [
            'order_detail' => $order_detail,
            'ordered_products' => $ordered_products,
            'total_ordered_products' => $total_ordered_products,
            'shipping_detail' => $shipping_detail,
        ]);
    }

    public function order_track($orderId)
    {
        $order = Order::where('order_id', $orderId)->firstOrFail();

        return view('frontend.order.track', compact('order'));
    }

}
