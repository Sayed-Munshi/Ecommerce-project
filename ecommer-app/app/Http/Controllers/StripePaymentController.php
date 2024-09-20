<?php

namespace App\Http\Controllers;

use App\Mail\OrderInvoiceMail;
use App\Models\Billing;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\OrderList;
use App\Models\Shipping;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $data = session('data');

        return view('frontend.payment.stripe.stripe')->with('data', $data);
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $data = session('checkout_data');

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
            "amount" => 100 * ($data['sub_total'] + $data['charge']),
            "currency" => "gbp",
            "source" => $request->stripeToken,
            "description" => "Payment from ".$request->card_name,
        ]);

        $order_id = Auth::id().random_int(1, 10).time().date(format: 'dmy');

        if($data['shipping_type'] == 'ship_to_user') {
            $order_table_id = Order::insertGetId([
                'order_id' => $order_id,
                'customer_id' => Auth::id(),
                'charge' => $data['charge'],
                'sub_total' => $data['sub_total'],
                'total' => ($data['sub_total'] + $data['charge']),
                'payment_type' => $data['payment_type'],
                'status' => 'placed',
                'created_at' => now(),
            ]);

            Billing::insert([
                'order_id' => $order_id,
                'customer_id' => Auth::id(),
                'name' => strtolower($data['name']),
                'email' => strtolower($data['email']),
                'phone' => $data['phone'],
                'zip_code' => $data['zip_code'],
                'address' => $data['address'],
                'created_at' => now(),
            ]);

            Shipping::insert([
                'order_id' => $order_id,
                'ship_name' => strtolower($data['name']),
                'ship_email' => strtolower($data['email']),
                'ship_phone' => $data['phone'],
                'ship_zip_code' => $data['zip_code'],
                'ship_address' => $data['address'],
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

            Mail::to($data['email'])->send(new OrderInvoiceMail($order_id));

            return redirect(route('order.placed'))->with('order_id', $order_id);
        }elseif($data['shipping_type']  == 'ship_to_someone') {
            $order_table_id = Order::insertGetId([
                'order_id' => $order_id,
                'customer_id' => Auth::id(),
                'charge' => $data['charge'],
                'sub_total' => $data['sub_total'],
                'total' => ($data['sub_total'] + $data['charge']),
                'payment_type' => $data['payment_type'],
                'status' => 'placed',
                'created_at' => now(),
            ]);

            Billing::insert([
                'order_id' => $order_id,
                'customer_id' => Auth::id(),
                'name' => strtolower($data['name']),
                'email' => strtolower($data['email']),
                'phone' => $data['phone'],
                'zip_code' => $data['zip_code'],
                'address' => $data['address'],
                'created_at' => now(),
            ]);

            Shipping::insert([
                'order_id' => $order_id,
                'ship_name' => strtolower($data['ship_name']),
                'ship_email' => strtolower($data['ship_email']),
                'ship_phone' => $data['ship_phone'],
                'ship_zip_code' => $data['ship_zip_code'],
                'ship_address' => $data['ship_address'],
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

            Mail::to($data['email'])->send(new OrderInvoiceMail($order_id));

            return redirect(route('order.placed'))->with('order_id', $order_id);
        }else {
            return back();
        }
    }
}
