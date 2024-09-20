@extends('layouts.backend_master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="title-header title-header-block package-card">
                    <div>
                        <h5>Order #{{ $order->order_id }}</h5>
                    </div>
                    <div class="card-order-section">
                        <ul>
                            <li>{{ $order->created_at->format('d M Y h:i A') }}</li>
                            <li>{{ count($order->ordered_products) }} {{ count($order->ordered_products) > 1 ? 'Items' : 'Item' }}</li>
                            <li>Total £{{ $order->total }}</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-inner cart-section order-details-table">
                    <div class="row g-4">
                        <div class="col-xl-8">
                            <div class="table-responsive table-details">
                                <table class="table cart-table table-borderless">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Items</th>
                                            <th class="text-end" colspan="2">

                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($order->ordered_products as $product)
                                            <tr class="table-order">
                                                <td>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ Storage::url($product->product->thumbnail_image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <p>{{ $product->product->product_name }}</p>
                                                    <h5>{{ $product->product->subcategory->name }}</h5>
                                                </td>
                                                <td>
                                                    <p>Quantity</p>
                                                    <h5>{{ $product->quantity }} * £{{ $product->price }}</h5>
                                                </td>
                                                <td>
                                                    <p>Price</p>
                                                    <h5>£{{ $product->quantity * $product->price }}</h5>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="table-order" colspan="4">
                                                <td>No items found</td>
                                            </tr>
                                        @endforelse

                                    </tbody>

                                    <tfoot>
                                        <tr class="table-order">
                                            <td colspan="3">
                                                <h5>Subtotal :</h5>
                                            </td>
                                            <td>
                                                <h4>£{{ $order->sub_total }}</h4>
                                            </td>
                                        </tr>

                                        <tr class="table-order">
                                            <td colspan="3">
                                                <h5>Shipping :</h5>
                                            </td>
                                            <td>
                                                <h4>£{{ $order->charge }}</h4>
                                            </td>
                                        </tr>

                                        <tr class="table-order">
                                            <td colspan="3">
                                                <h4 class="theme-color fw-bold">Total Price :</h4>
                                            </td>
                                            <td>
                                                <h4 class="theme-color fw-bold">£{{ $order->total }}</h4>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="order-success">
                                <div class="row g-4">
                                    <h4>summery</h4>
                                    <ul class="order-details">
                                        <li>Order ID: #{{ $order->order_id }}</li>
                                        <li>Order Date: {{ $order->created_at->format('d M Y h:i A') }}</li>
                                        <li>Order Total: £{{ $order->total }}</li>
                                    </ul>

                                    <h4>shipping address</h4>
                                    <ul class="order-details">
                                        <li>{{ $billing->name}}</li>
                                        <li>{{ $billing->address }}</li>
                                        <li>{{ $billing->city }}</li>
                                    </ul>

                                    <div class="payment-mode">
                                        <h4>payment method</h4>
                                        <p>{{ $order->payment_type }}</p>
                                    </div>

                                    <div class="delivery-sec">
                                        <a href={{ route('order.track', $order->order_id) }} class="btn btn-primary">Track Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end -->
            </div>
        </div>
    </div>
</div>
@endsection
