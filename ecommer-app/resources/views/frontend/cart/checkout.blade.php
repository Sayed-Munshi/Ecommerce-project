@extends('layouts.frontend_master')

@push('css')
    <style>
        .checkout-section-2 .left-sidebar-checkout .checkout-detail-box>ul>li .checkout-box .checkout-detail .delivery-address-box>div .label {
            top: -30px;
            right: 0;
        }

        .checkout-section-2 .left-sidebar-checkout .checkout-detail-box>ul>li .checkout-box .checkout-detail .delivery-address-box>div .delivery-address-detail {
            width: calc(92% + (75 - 85) * ((100vw - 320px) / (1920 - 320)));
        }
    </style>
@endpush

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Checkout</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout section Start -->
    <section class="checkout-section-2 section-b-space">
        <div class="container-fluid">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf

                <div class="row g-sm-4 g-3">
                    <div class="col-lg-8">
                        <div class="left-sidebar-checkout">
                            <div class="checkout-detail-box">
                                <ul>
                                    <li>
                                        <div class="checkout-icon">
                                            <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                                trigger="loop-on-hover"
                                                colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                                class="lord-icon">
                                            </lord-icon>
                                        </div>
                                        <div class="checkout-box">
                                            <div class="checkout-title">
                                                <h4>Delivery Address</h4>
                                            </div>
                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                                        <div class="delivery-address-box pt-5">
                                                            <div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="shipping_type" value="ship_to_user"
                                                                        id="billing_address" checked />
                                                                </div>
                                                                <div class="label">
                                                                    <label for="billing_address">Billing Address</label>
                                                                </div>
                                                                <div class="delivery-address-detail">
                                                                    <div class="col-12 mb-2">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="name" name="name"
                                                                                placeholder="Name"
                                                                                value="{{ Auth::user()->name }}" />
                                                                            <label for="Name">Name</label>

                                                                            @error('name')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="email"
                                                                                class="form-control disabled" id="email"
                                                                                name="email" placeholder="Email"
                                                                                value="{{ Auth::user()->email }}" />
                                                                            <label for="email">Email</label>

                                                                            @error('email')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="number" class="form-control"
                                                                                id="phone" name="phone"
                                                                                placeholder="Phone"
                                                                                value="{{ Auth::user()->phone }}" />
                                                                            <label for="phone">Phone</label>

                                                                            @error('phone')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="number" class="form-control"
                                                                                id="zip_codde" name="zip_code"
                                                                                placeholder="Zip Code"
                                                                                value="{{ Auth::user()->zip_code }}" />
                                                                            <label for="zip_codde">Zip Code</label>

                                                                            @error('zip_code')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="address" name="address"
                                                                                placeholder="Shipping Address"
                                                                                value="{{ Auth::user()->address }}" />
                                                                            <label for="email">Shipping
                                                                                Address</label>

                                                                            @error('address')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                                        <div class="delivery-address-box pt-5">
                                                            <div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="shipping_type" value="ship_to_someone"
                                                                        id="different_address" />
                                                                </div>
                                                                <div class="label">
                                                                    <label for="different_address">Ship To Different
                                                                        Address</label>
                                                                </div>
                                                                <div>
                                                                    <ul>
                                                                        <div class="delivery-address-detail">
                                                                            <div class="col-12 mb-2">
                                                                                <div
                                                                                    class="form-floating theme-form-floating">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="name" name="ship_name"
                                                                                        placeholder="Name" />
                                                                                    <label for="Name">Name</label>

                                                                                    @error('ship_name')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 mb-2">
                                                                                <div
                                                                                    class="form-floating theme-form-floating">
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        id="email" name="ship_email"
                                                                                        placeholder="Email" />
                                                                                    <label for="email">Email</label>

                                                                                    @error('ship_email')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 mb-2">
                                                                                <div
                                                                                    class="form-floating theme-form-floating">
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        id="phone" name="ship_phone"
                                                                                        placeholder="Phone" />
                                                                                    <label for="phone">Phone</label>

                                                                                    @error('ship_phone')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 mb-2">
                                                                                <div
                                                                                    class="form-floating theme-form-floating">
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        id="zip_codde"
                                                                                        name="ship_zip_code"
                                                                                        placeholder="Zip Code" />
                                                                                    <label for="zip_codde">Zip Code</label>

                                                                                    @error('ship_zip_code')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 mb-2">
                                                                                <div
                                                                                    class="form-floating theme-form-floating">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="address" name="ship_address"
                                                                                        placeholder="Shipping Address" />
                                                                                    <label for="email">Shipping
                                                                                        Address</label>

                                                                                    @error('ship_address')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkout-icon">
                                            <lord-icon target=".nav-item" src="https://cdn.lordicon.com/oaflahpk.json"
                                                trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
                                            </lord-icon>
                                        </div>
                                        <div class="checkout-box">
                                            <div class="checkout-title">
                                                <h4>Delivery Option</h4>
                                            </div>
                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-xxl-6">
                                                        <div class="delivery-option">
                                                            <div class="delivery-category">
                                                                <div class="shipment-detail">
                                                                    <div
                                                                        class="form-check custom-form-check hide-check-box">
                                                                        <input data-subtotal="{{ session('sub_total') }}"
                                                                            class="form-check-input delivery-charge"
                                                                            type="radio" name="charge" value="8"
                                                                            id="inside" />
                                                                        <label class="form-check-label"
                                                                            for="inside">Inside
                                                                            City: <span>&pound;8</span></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6">
                                                        <div class="delivery-option">
                                                            <div class="delivery-category">
                                                                <div class="shipment-detail">
                                                                    <div
                                                                        class="form-check mb-0 custom-form-check show-box-checked">
                                                                        <input data-subtotal="{{ session('sub_total') }}"
                                                                            class="form-check-input delivery-charge"
                                                                            type="radio" name="charge" value="16"
                                                                            id="outside" />
                                                                        <label class="form-check-label"
                                                                            for="outside">Outside
                                                                            City: <span>&pound;16</span></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('charge')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkout-icon">
                                            <lord-icon target=".nav-item" src="https://cdn.lordicon.com/qmcsqnle.json"
                                                trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a"
                                                class="lord-icon">
                                            </lord-icon>
                                        </div>
                                        <div class="checkout-box">
                                            <div class="checkout-title">
                                                <h4>Payment Option</h4>
                                            </div>
                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-xxl-6">
                                                        <div class="delivery-option">
                                                            <div class="delivery-category">
                                                                <div class="shipment-detail">
                                                                    <div
                                                                        class="form-check custom-form-check hide-check-box">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="payment_type" value="cash"
                                                                            id="cash" />
                                                                        <label class="form-check-label"
                                                                            for="cash">Cash On
                                                                            Delivery</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6">
                                                        <div class="delivery-option">
                                                            <div class="delivery-category">
                                                                <div class="shipment-detail">
                                                                    <div
                                                                        class="form-check mb-0 custom-form-check show-box-checked">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="payment_type" value="stripe"
                                                                            id="stripe" />
                                                                        <label class="form-check-label" for="stripe">Pay
                                                                            With Stripe</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('payment_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-side-summery-box">
                            <div class="summery-box-2">
                                <div class="summery-header">
                                    <h3>Order Summery</h3>
                                </div>
                                <ul class="summery-contain">
                                    @foreach ($carts as $item)
                                        <li>
                                            <img src="{{ url('/') . Storage::url($item->rel_to_product->thumbnail_image) }}"
                                                class="img-fluid blur-up lazyloaded checkout-image" alt="" />
                                            <h4>{{ str($item->rel_to_product->product_name)->limit(10) }} <span>X
                                                    {{ $item->quantity }}</span>
                                            </h4>
                                            <h4 class="price">
                                                &pound;{{ $item->rel_to_product->calculation_price * $item->quantity }}
                                            </h4>
                                        </li>
                                    @endforeach
                                </ul>
                                <ul class="summery-total">
                                    <li>
                                        <h4>Subtotal</h4>
                                        <h4 class="price">&pound;{{ session('sub_total') }}</h4>
                                        <input type="hidden" name="sub_total" value="{{ session('sub_total') }}">
                                    </li>
                                    <li>
                                        <h4>Shipping</h4>
                                        <h4 class="price">(+) &pound;<span id="charge">0</span></h4>
                                    </li>
                                    {{-- <li>
                                        <h4>Tax</h4>
                                        <h4 class="price">$29.498</h4>
                                    </li> --}}
                                    {{-- <li>
                                        <h4>Coupon/Code</h4>
                                        <h4 class="price">$-23.10</h4>
                                    </li> --}}
                                    <li class="list-total">
                                        <h4>Total (GBP)</h4>
                                        <h4 class="price">&pound;<span id="total">{{ session('sub_total') }}</span>
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="checkout-offer">
                                <div class="offer-title">
                                    <div class="offer-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/inner-page/offer.svg" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="offer-name">
                                        <h6>Available Offers</h6>
                                    </div>
                                </div>
                                <ul class="offer-detail">
                                    <li>
                                        <p>
                                            Combo: BB Royal Almond/Badam Californian, Extra
                                            Bold 100 gm...
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            combo: Royal Cashew Californian, Extra Bold 100
                                            gm + BB Royal Honey 500 gm
                                        </p>
                                    </li>
                                </ul>
                            </div> --}}
                            <button type="submit" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout section End -->
@endsection

@push('js')
    <script>
        $('.delivery-charge').click(function() {
            var charge = $(this).val();
            var subTotal = $(this).attr('data-subtotal');
            var total = parseInt(subTotal) + parseInt(charge);

            $('#charge').html(charge);
            $('#total').html(total);
        })
    </script>
@endpush
