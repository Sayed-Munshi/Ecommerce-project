@extends('layouts.frontend_master')

@section('content')
<section class="order-tracking-section section-b-space">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="track-order text-center" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h3 style="color: #343a40; font-weight: 600;">Order Tracking</h3>
                    <p style="color: #6c757d;">Track the status of your order through each stage of its journey</p>

                    <div class="order-status mt-4">
                        <ul class="order-progress-bar" style="display: flex; justify-content: space-between; padding: 0; list-style-type: none;">
                            <li style="width: 20%; text-align: center; position: relative;" class="{{ in_array($order->status, ['placed', 'received', 'shipped', 'delivered']) ? 'active' : '' }}">
                                <span style="display: block; margin-top: 10px; font-size: 14px;">Placed</span>
                                <div style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ in_array($order->status, ['placed', 'received', 'shipped', 'delivered']) ? '#28a745' : '#ddd' }}; margin: 0 auto;"></div>
                            </li>

                            <li style="width: 20%; text-align: center; position: relative;" class="{{ in_array($order->status, ['received', 'shipped', 'delivered']) ? 'active' : '' }}">
                                <span style="display: block; margin-top: 10px; font-size: 14px;">Received</span>
                                <div style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ in_array($order->status, ['received', 'shipped', 'delivered']) ? '#28a745' : '#ddd' }}; margin: 0 auto;"></div>
                            </li>

                            <li style="width: 20%; text-align: center; position: relative;" class="{{ in_array($order->status, ['shipped', 'delivered']) ? 'active' : '' }}">
                                <span style="display: block; margin-top: 10px; font-size: 14px;">Shipped</span>
                                <div style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ in_array($order->status, ['shipped', 'delivered']) ? '#28a745' : '#ddd' }}; margin: 0 auto;"></div>
                            </li>

                            <li style="width: 20%; text-align: center; position: relative;" class="{{ $order->status === 'delivered' ? 'active' : '' }}">
                                <span style="display: block; margin-top: 10px; font-size: 14px;">Delivered</span>
                                <div style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ $order->status === 'delivered' ? '#28a745' : '#ddd' }}; margin: 0 auto;"></div>
                            </li>
                        </ul>

                        @if($order->status === 'canceled')
                            <div class="order-cancel mt-3">
                                <h5 class="text-danger">This order has been canceled.</h5>
                            </div>
                        @endif

                        <div class="order-details mt-4" style="border-top: 1px solid #ddd; padding-top: 15px;">
                            <p style="font-size: 16px; color: #495057;"><strong>Order ID:</strong> {{ $order->order_id }}</p>
                            <p style="font-size: 16px; color: #495057;"><strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
                            <p style="font-size: 16px; color: #495057;"><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('order.status', $order->order_id) }}" class="btn btn-primary" style="background-color: #007bff; border: none; padding: 10px 20px; font-size: 14px; border-radius: 5px;">
                                Back to Order Status
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
