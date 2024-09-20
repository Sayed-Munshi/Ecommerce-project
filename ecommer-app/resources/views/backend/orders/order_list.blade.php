@extends('layouts.backend_master')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Order List</h5>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-primary">{{ session('success') }}</div>
                        @endif

                        <div>
                            <div class="table-responsive">
                                <table class="table all-package order-table theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Order Code</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Delivery Status</th>
                                            <th>Amount</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($AllOrder as $order)
                                            <tr>

                                                <td>{{ $order->order_id }}</td>

                                                <td>{{ $order->created_at->format('d M Y') }}</td>

                                                <td>{{ $order->payment_type }}</td>

                                                <td class="@if ($order->status == 'placed') order-pending
                                                          @elseif ($order->status == 'received') order-success
                                                          @elseif ($order->status == 'canceled') order-cancle
                                                          @elseif ($order->status == 'shipped') order-success
                                                          @elseif ($order->status == 'delivered') order-success
                                                          @endif">
                                                    <span>{{ $order->status }}</span>
                                                    <!-- Button to Open Modal -->
                                                    <button class="btn btn-light btn-sm m-1" data-bs-toggle="modal"
                                                        data-bs-target="#updateStatusModal{{ $order->order_id }}">
                                                        Update Status
                                                    </button>
                                                </td>

                                                <td>
                                                    <span class="badge bg-success">£{{ $order->total }}</span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('order.view', $order->order_id) }}">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="{{ route('order.track', $order->order_id) }}">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

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
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
