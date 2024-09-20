@extends('layouts.frontend_master')

@section('content')
    {{-- Breadcrumb --}}
    <section class="breadcrumb-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Cart</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Cart Table --}}
    <section class="cart-section section-b-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 {{ $total_items == '0' ? 'col-lg-12' : '' }}">
                    <form action="{{ route('update.cart') }}" method="POST">
                        @csrf
                        <div class="cart-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @php
                                            $subTotal = 0;
                                        @endphp
                                        @forelse ($carts as $cart)
                                            <tr class="product-box-contain">
                                                <td class="product-detail">
                                                    <div class="product border-0">
                                                        <a href="{{ route('single.product', $cart->rel_to_product->slug) }}"
                                                            class="product-image">
                                                            <img src="{{ url('/') . Storage::url($cart->rel_to_product->thumbnail_image) }}"
                                                                class="img-fluid blur-up lazyloaded" alt="">
                                                        </a>
                                                        <div class="product-detail">
                                                            <ul>
                                                                <li class="name">
                                                                    <a
                                                                        href="{{ route('single.product', $cart->rel_to_product->slug) }}">{{ str($cart->rel_to_product->product_name)->words(5) }}</a>
                                                                </li>
                                                                <li>
                                                                    <h5>Total:
                                                                        &pound;{{ $cart->rel_to_product->calculation_price * $cart->quantity }}
                                                                    </h5>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="quantity text-center">
                                                    <h4 class="table-title text-content">Qty</h4>
                                                    <div class="quantity-price mx-auto">
                                                        <div class="cart_qty">
                                                            <div class="input-group">
                                                                <button type="button" class="btn qty-left-minus"
                                                                    data-type="minus" data-field="">
                                                                    <i class="fa fa-minus ms-0"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input"
                                                                    type="text" name="quantity[{{ $cart->id }}]"
                                                                    value="{{ $cart->quantity }}" data-product-id="{{ $cart->product_id }}">
                                                                <button type="button" class="btn qty-right-plus"
                                                                    data-type="plus" data-field="">
                                                                    <i class="fa fa-plus ms-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="save-remove text-end">
                                                    <a class="remove close_button cart_close_btn"
                                                        href="{{ route('delete.cart', $cart->id) }}">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/delete.png"
                                                            alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                            @php
                                                $subTotal += $cart->rel_to_product->calculation_price * $cart->quantity;
                                            @endphp
                                        @empty
                                            <tr class="product-box-contain">
                                                <td>
                                                    <div class="alert alert-warning text-center">No item found in cart!
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <button type="submit"
                                class="btn btn-animation proceed-btn fw-bold d-inline-flex gap-2 align-items-center">
                                <i class="fa-solid fa-rotate-right"></i>
                                <span>Update Cart</span>
                            </button>

                            @if (session('success'))
                                <span class="text-success">{{ session('success') }}</span>
                            @endif
                        </div>
                    </form>
                </div>

                @php
                    session([
                        'sub_total' => $subTotal,
                    ]);
                @endphp

                @if (!$total_items == '0')
                    <div class="col-lg-4">
                        <div class="summery-box p-sticky">
                            <div class="summery-header">
                                <h3>Cart Total</h3>
                            </div>

                            {{-- <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">Coupon Apply</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Coupon Code Here...">
                                    <button class="btn-apply">Apply</button>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">$125.65</h4>
                                </li>

                                <li>
                                    <h4>Coupon Discount</h4>
                                    <h4 class="price">(-) 0.00</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>Shipping</h4>
                                    <h4 class="price text-end">$6.90</h4>
                                </li>
                            </ul>
                        </div> --}}

                            <ul class="summery-total">
                                <li class="list-total border-top-0">
                                    <h4>Total (GBP)</h4>
                                    <h4 class="price theme-color">&pound; {{ $subTotal }}</h4>
                                </li>
                            </ul>

                            <div class="button-group cart-button">
                                <ul>
                                    <li>
                                        <a href="{{ route('checkout') }}" class="btn btn-animation proceed-btn fw-bold">
                                            Process To Checkout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script></script>
@endpush
