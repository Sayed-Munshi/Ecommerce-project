@extends('layouts.backend_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Order Tracking</h5>
                            <a href="{{ route('orders.list') }}" class="btn btn-primary">Back</a>
                        </div>
                        <div class="row">
                            <div class="col-12 overflow-hidden">
                                <div class="order-left-image">
                                    <div class="tracking-product-image">
                                        <img src="{{ asset('uploads/users/'.$customer->photo) }}"
                                            class="img-fluid w-100 blur-up lazyload" alt="">
                                    </div>

                                    <div class="order-image-contain">
                                        <h4>{{ $customer->name }}</h4>
                                        <div class="tracker-number">
                                            <p>Order Number : <span>{{ $order->order_id }}</span></p>
                                            <p>Order Placed : <span>{{ $order->created_at->format('d M Y') }}</span></p>
                                            <p>Payment Method : <span>{{ $order->payment_type }}</span></p>
                                        </div>
                                        @if ($order->status == 'placed')
                                            <h5>This order is currently being processed.</h5>
                                        @elseif ($order->status == 'received')
                                            <h5>This order has been received and is being prepared for shipment.</h5>
                                        @elseif ($order->status == 'shipped')
                                            <h5>This order has been shipped and is on its way to Customer.</h5>
                                        @elseif ($order->status == 'delivered')
                                            <h5>This order has been delivered to Customer.</h5>
                                        @elseif ($order->status == 'canceled')
                                            <h5>This order has been canceled.</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <ol class="progtrckr">
                                <li class="{{ in_array($order->status, ['placed', 'received', 'shipped', 'delivered']) ? 'progtrckr-done' : 'progtrckr-todo' }}">
                                    <h5>Order Placed</h5>
                                    <h6>{{ $order->created_at->format('h:i A') }}</h6>
                                </li>

                                <li class="{{ in_array($order->status, ['received', 'shipped', 'delivered']) ? 'progtrckr-done' : 'progtrckr-todo' }}">
                                    <h5>Order Received</h5>
                                    <h6>{{ $order->updated_at ? $order->updated_at->format('h:i A') : $order->created_at->format('h:i A') }}
                                </li>

                                <li class="{{ in_array($order->status, ['shipped', 'delivered']) ? 'progtrckr-done' : 'progtrckr-todo' }}">
                                    <h5>Shipped</h5>
                                    <h6>{{ $order->status == 'shipped' ? $order->updated_at->format('h:i A') : 'Pending' }}</h6>
                                </li>

                                <li class="{{ $order->status == 'delivered' ? 'progtrckr-done' : 'progtrckr-todo' }}">
                                    <h5>Delivered</h5>
                                    <h6>{{ $order->status == 'delivered' ? $order->updated_at->format('h:i A') : 'Pending' }}</h6>
                                </li>

                                @if($order->status == 'canceled')
                                    <li class="progtrckr-done text-danger">
                                        <h5>Order Canceled</h5>
                                        <h6>{{ $order->updated_at->format('h:i A') }}</h6>
                                    </li>
                                @endif
                            </ol>

                            <button class="btn btn-light btn-sm m-1" data-bs-toggle="modal"
                                data-bs-target="#updateStatusModal{{ $order->order_id }}">
                                Update Status
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Status Modal -->
<div class="modal fade" id="updateStatusModal{{ $order->order_id }}" tabindex="-1"
    aria-labelledby="updateStatusModalLabel{{ $order->order_id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStatusModalLabel{{ $order->order_id }}">
                    Update Order Status for Order #{{ $order->order_id }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ route('order.updateStatus', $order->order_id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="statusSelect">Select New Status</label>
                        <select class="form-control" id="statusSelect" name="status">
                            <option value="placed" @if ($order->status == 'placed') selected @endif>Placed</option>
                            <option value="received" @if ($order->status == 'received') selected @endif>Received</option>
                            <option value="shipped" @if ($order->status == 'shipped') selected @endif>Shipped</option>
                            <option value="delivered" @if ($order->status == 'delivered') selected @endif>Delivered</option>
                            <option value="canceled" @if ($order->status == 'canceled') selected @endif>Canceled</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection
