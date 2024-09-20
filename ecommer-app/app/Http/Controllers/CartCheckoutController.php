<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\OrderInvoiceMail;
use App\Models\Billing;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\OrderList;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CartCheckoutController extends Controller
{
    /**
     * Viewing page
    */
    function checkout()
    {
        $carts = Cart::where('user_id', Auth::id())->latest()->get();

        return view('frontend.cart.checkout', [
            'carts' => $carts,
        ]);
    }

    /**
     * place order
    */
    function checkout_store(CheckoutRequest $request)
    {
        $order_id = Auth::id().random_int(1, 10).time().date(format: 'dmy');

        if($request->payment_type == 'cash') {
            if($request->shipping_type == 'ship_to_user') {
                $order_table_id = Order::insertGetId([
                    'order_id' => $order_id,
                    'customer_id' => Auth::id(),
                    'charge' => $request->charge,
                    'sub_total' => $request->sub_total,
                    'total' => ($request->sub_total + $request->charge),
                    'payment_type' => $request->payment_type,
                    'status' => 'placed',
                    'created_at' => now(),
                ]);

                Billing::insert([
                    'order_id' => $order_id,
                    'customer_id' => Auth::id(),
                    'name' => strtolower($request->name),
                    'email' => strtolower($request->email),
                    'phone' => $request->phone,
                    'zip_code' => $request->zip_code,
                    'address' => $request->address,
                    'created_at' => now(),
                ]);

                Shipping::insert([
                    'order_id' => $order_id,
                    'ship_name' => strtolower($request->name),
                    'ship_email' => strtolower($request->email),
                    'ship_phone' => $request->phone,
                    'ship_zip_code' => $request->zip_code,
                    'ship_address' => $request->address,
                    'created_at' => now(),
                ]);

                $user_carts = Cart::where('user_id', Auth::id())->get();

                foreach($user_carts as $user_cart) {
                    OrderedProduct::insert([
                        'order_id' => $order_id,
                        'customer_id' => Auth::id(),
                        'seller_id' => $user_cart->seller_id,
                        'product_id' => $user_cart->product_id,
                        'price' => $user_cart->rel_to_product->calculation_price,
                        'quantity' => $user_cart->quantity,
                        'created_at' => now(),
                    ]);

                    Cart::find($user_cart->id)->delete();
                }

                OrderList::insert([
                    'order_id' => $order_table_id,
                    'customer_id' => Auth::id(),
                    'created_at' => now(),
                ]);

                Mail::to($request->email)->send(new OrderInvoiceMail($order_id));

                return redirect(route('order.placed'))->with('order_id', $order_id);
            }elseif($request->shipping_type == 'ship_to_someone') {
                $order_table_id = Order::insertGetId([
                    'order_id' => $order_id,
                    'customer_id' => Auth::id(),
                    'charge' => $request->charge,
                    'sub_total' => $request->sub_total,
                    'total' => ($request->sub_total + $request->charge),
                    'payment_type' => $request->payment_type,
                    'status' => 'placed',
                    'created_at' => now(),
                ]);

                Billing::insert([
                    'order_id' => $order_id,
                    'customer_id' => Auth::id(),
                    'name' => strtolower($request->name),
                    'email' => strtolower($request->email),
                    'phone' => $request->phone,
                    'zip_code' => $request->zip_code,
                    'address' => $request->address,
                    'created_at' => now(),
                ]);

                Shipping::insert([
                    'order_id' => $order_id,
                    'ship_name' => strtolower($request->ship_name),
                    'ship_email' => strtolower($request->ship_email),
                    'ship_phone' => $request->ship_phone,
                    'ship_zip_code' => $request->ship_zip_code,
                    'ship_address' => $request->ship_address,
                    'created_at' => now(),
                ]);

                $user_carts = Cart::where('user_id', Auth::id())->get();

                foreach($user_carts as $user_cart) {
                    OrderedProduct::insert([
                        'order_id' => $order_id,
                        'customer_id' => Auth::id(),
                        'seller_id' => $user_cart->seller_id,
                        'product_id' => $user_cart->product_id,
                        'price' => $user_cart->rel_to_product->calculation_price,
                        'quantity' => $user_cart->quantity,
                        'created_at' => now(),
                    ]);

                    Cart::find($user_cart->id)->delete();
                }

                OrderList::insert([
                    'order_id' => $order_table_id,
                    'customer_id' => Auth::id(),
                    'created_at' => now(),
                ]);

                Mail::to($request->email)->send(new OrderInvoiceMail($order_id));

                return redirect(route('order.placed'))->with('order_id', $order_id);
            }else {
                return back();
            }
        }elseif($request->payment_type == 'stripe') {
            $data = $request->all();

            return redirect(route('stripe.payment'))->with('data', $data);
        }else {
            return back();
        }
    }
}
