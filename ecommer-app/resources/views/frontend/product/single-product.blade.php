@extends('layouts.frontend_master')

@push('css')
    <style>
        .review-form {
            padding: 16px;
            border: 1px solid #dddddd;
            border-radius: 5px
        }

        .review-form .give-rat-sec p {
            margin-bottom: 0;
        }

        .review-form .give-rating {
            display: inline-block;
            position: relative;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
        }

        .review-form .give-rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .review-form .give-rating label:last-child {
            position: static;
        }

        .review-form .give-rating label:nth-child(1) {
            z-index: 5;
        }

        .review-form .give-rating label:nth-child(2) {
            z-index: 4;
        }

        .review-form .give-rating label:nth-child(3) {
            z-index: 3;
        }

        .review-form .give-rating label:nth-child(4) {
            z-index: 2;
        }

        .review-form .give-rating label:nth-child(5) {
            z-index: 1;
        }

        .review-form .give-rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .review-form .give-rating label .icon {
            float: left;
            color: transparent;
        }

        .review-form .give-rating label:last-child .icon {
            color: #ddd;
        }

        .review-form .give-rating:not(:hover) label input:checked~.icon,
        .review-form .give-rating:hover label:hover input~.icon {
            color: #ffb321;
        }

        .review-form .give-rating label input:focus:not(:checked)~.icon:last-child {
            color: #ddd;
            text-shadow: 0 0 5px #ffb321;
        }

        textarea.form-control {
            height: 100px !important;
        }
    </style>
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>{{ $product->rel_to_subcategory->name }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active">{{ $product->product_name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Product --}}
    <section class="product-section section-b-space">
        <div class="container-fluid">
            <div class="row">
                {{-- Left --}}
                <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row g-4">
                        {{-- Left --}}
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="product-main-2 no-arrow">
                                            @if ($product->thumbnail_image)
                                                <div>
                                                    <div class="slider-image">
                                                        <img src="{{ url('/') . Storage::url($product->thumbnail_image) }}"
                                                            id="img-1"
                                                            data-zoom-image="{{ url('/') . Storage::url($product->thumbnail_image) }}"
                                                            class="img-fluid image_zoom_cls-0 blur-up lazyload"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endif

                                            @foreach ($galleries as $gallery)
                                                <div>
                                                    <div class="slider-image">
                                                        <img src="{{ url('/') . Storage::url($gallery->gallery_image) }}"
                                                            data-zoom-image="{{ url('/') . Storage::url($gallery->gallery_image) }}"
                                                            class="img-fluid image_zoom_cls-1 blur-up lazyload"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            @if ($product->thumbnail_image)
                                                <div>
                                                    <div class="sidebar-image">
                                                        <img src="{{ url('/') . Storage::url($product->thumbnail_image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                </div>
                                            @endif

                                            @foreach ($galleries as $gallery)
                                                <div>
                                                    <div class="sidebar-image">
                                                        <img src="{{ url('/') . Storage::url($gallery->gallery_image) }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $avg = '';
                            $avg_round = '';

                            if ($total_reviews == 0) {
                                $avg = 0;
                            } else {
                                $avg = $total_stars / $total_reviews;
                                $avg_round = round($total_stars / $total_reviews);
                            }
                        @endphp

                        {{-- Right --}}
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="right-box-contain">
                                @if ($product->discount_type)
                                    <h6 class="offer-top">{{ $product->discount_amount }}
                                        {{ $product->discount_type == 'fixed' ? '£' : '%' }} Off</h6>
                                @endif
                                <h2 class="name">{{ $product->product_name }}</h2>
                                <div class="price-rating">
                                    <h3 class="theme-color price">&pound; {{ $product->calculation_price }}
                                        @if ($product->discount_type)
                                            <del class="text-content">&pound; {{ $product->sell_price }}</del>
                                            <span class="offer theme-color">{{ $product->discount_amount }}
                                                {{ $product->discount_type == 'fixed' ? '£' : '%' }} Off</span>
                                        @endif
                                    </h3>
                                    <div class="product-rating custom-rate">
                                        <ul class="rating">
                                            @for ($i = 1; $i <= $avg_round; $i++)
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            @endfor
                                            @for ($i = $avg_round; $i < 5; $i++)
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            @endfor
                                        </ul>
                                        <span class="review">{{ $total_reviews }} Customer Review</span>
                                    </div>
                                </div>

                                <div class="product-contain">
                                    {!! str($product->description)->words(30) !!}
                                </div>

                                {{-- Weight --}}
                                {{-- <div class="product-package">
                                    <div class="product-title">
                                        <h4>Weight</h4>
                                    </div>
                                    <ul class="select-package">
                                        <li>
                                            <a href="javascript:void(0)" class="active">1/2 KG</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">1 KG</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">1.5 KG</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Red Roses</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">With Pink Roses</a>
                                        </li>
                                    </ul>
                                </div> --}}

                                {{-- Hurry up! --}}
                                {{-- <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1"
                                    data-hours="1" data-minutes="2" data-seconds="3">
                                    <div class="product-title">
                                        <h4>Hurry up! Sales Ends In</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="days d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Days</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="hours d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Hours</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="minutes d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Min</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="seconds d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Sec</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}

                                <form action="{{ route('store.cart', $product->id) }}" method="POST">
                                    @csrf

                                    <div class="note-box product-package">
                                        <div class="cart_qty qty-box product-qty">
                                            <div class="quantity-price">
                                                <div class="cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus" data-type="minus"
                                                            data-field="">
                                                            <i class="fa fa-minus ms-0"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="1">
                                                        <button type="button" class="btn qty-right-plus" data-type="plus"
                                                            data-field="">
                                                            <i class="fa fa-plus ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="seller_id" value="{{ $product->user_id }}">
                                        <button type="submit" class="btn btn-md bg-dark cart-button text-white w-100">Add
                                            To Cart</button>

                                    </div>
                                    @if (session('error'))
                                        <small class="text-danger">{{ session('error') }}</small>
                                    @endif
                                    @if (session('success'))
                                        <small class="text-success">{{ session('success') }}</small>
                                    @endif
                                </form>

                                {{-- Stock Count --}}
                                {{-- <div class="progress-sec">
                                    <div class="left-progressbar">
                                        <h6>Please hurry! Only 5 left in stock</h6>
                                        <div role="progressbar" class="progress warning-progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- Buy box --}}
                                {{-- <div class="buy-box">
                                    <a href="wishlist.html">
                                        <i data-feather="heart"></i>
                                        <span>Add To Wishlist</span>
                                    </a>

                                    <a href="compare.html">
                                        <i data-feather="shuffle"></i>
                                        <span>Cash on delivary</span>
                                    </a>
                                </div> --}}

                                <div class="payment-option">
                                    <div class="product-title">
                                        <h4>Guaranteed Safe Checkout</h4>
                                    </div>
                                    <ul>
                                        {{-- <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend') }}/assets/images/product/payment/1.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend') }}/assets/images/product/payment/2.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend') }}/assets/images/product/payment/3.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend') }}/assets/images/product/payment/4.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend') }}/assets/images/product/payment/5.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Bottom --}}
                        <div class="col-12">
                            <div class="product-section-box">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button"
                                            role="tab">Description</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab"
                                            data-bs-target="#info" type="button" role="tab">Additional
                                            info</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab">Review</button>
                                    </li>
                                </ul>

                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                                        <div class="product-description">
                                            {!! $product->description !!}
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="info" role="tabpanel">
                                        <div class="product-description">
                                            {!! $product->additional_description !!}
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="review" role="tabpanel">
                                        <div class="review-box">
                                            @if (!($total_reviews == 0))
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="product-rating-box">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="product-main-rating">
                                                                        <h2>{{ $avg }}
                                                                            <i data-feather="star"></i>
                                                                        </h2>

                                                                        <h5>5 Overall Rating</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-12">
                                                                    <ul class="product-rating-list">
                                                                        @for ($i = 5; $i >= 1; $i--)
                                                                            @php
                                                                                $count = isset($distribution[$i])
                                                                                    ? $distribution[$i]
                                                                                    : 0;
                                                                                $percentage =
                                                                                    ($count / $reviews->count()) * 100;
                                                                            @endphp
                                                                            <li>
                                                                                <div class="rating-product">
                                                                                    <h5>{{ $i }}<i
                                                                                            data-feather="star"></i>
                                                                                    </h5>
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar"
                                                                                            style="width: {{ $percentage }}%;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="total">
                                                                                        {{ isset($distribution[$i]) ? $distribution[$i] : 0 }}
                                                                                    </h5>
                                                                                </div>
                                                                            </li>
                                                                        @endfor
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-7">
                                                        <div class="review-people">
                                                            <ul class="review-list">
                                                                @foreach ($reviews as $review)
                                                                    <li>
                                                                        <div class="people-box">
                                                                            <div>
                                                                                <div class="people-image people-text">
                                                                                    @if ($review->rel_to_user_get_customer->photo)
                                                                                        <img class="user"
                                                                                            src="{{ url('/') . '/storage/images/user_photos/' . $review->rel_to_user_get_customer->photo }}"
                                                                                            alt="profile pic" />
                                                                                    @else
                                                                                        <img class="user"
                                                                                            src="https://ui-avatars.com/api/?name={{ $review->rel_to_user_get_customer->name }}?rounded=true?background=random?bold=true"
                                                                                            alt="avatar" />
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="people-comment">
                                                                                <div class="people-name">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="name">{{ $review->rel_to_user_get_customer->name }}</a>
                                                                                    <div class="date-time">
                                                                                        <h6 class="text-content">
                                                                                            {{ $review->updated_at->diffForHumans() }}
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-rating">
                                                                                    <ul class="rating">
                                                                                        @for ($i = 1; $i <= $review->star; $i++)
                                                                                            <li>
                                                                                                <i data-feather="star"
                                                                                                    class="fill"></i>
                                                                                            </li>
                                                                                        @endfor
                                                                                        @for ($i = $review->star; $i < 5; $i++)
                                                                                            <li>
                                                                                                <i data-feather="star"></i>
                                                                                            </li>
                                                                                        @endfor
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="reply">
                                                                                    <p>{{ $review->review }}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="alert alert-info">This product isn't review yet!</div>
                                            @endif

                                            @if (Auth::user())
                                                @if (App\Models\OrderedProduct::where('customer_id', Auth::id())->where('product_id', $product->id)->exists())
                                                    @if (App\Models\OrderedProduct::where('customer_id', Auth::id())->where('product_id', $product->id)->whereNotNull('review')->first() == false)
                                                        <div class="col-xl-12 mt-4 review-form">
                                                            <div class="review-title mb-2">
                                                                <h4 class="fw-500">Add a review</h4>
                                                            </div>

                                                            <form action="{{ route('product.review', $product->id) }}"
                                                                method="POST">
                                                                @csrf

                                                                <div class="mb-3">
                                                                    <div class="give-rat-sec">
                                                                        <div class="give-rating">
                                                                            <label>
                                                                                <input type="radio" name="star"
                                                                                    value="1">
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="star"
                                                                                    value="2">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="star"
                                                                                    value="3">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="star"
                                                                                    value="4">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio" name="star"
                                                                                    value="5">
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                                <span class="icon">★</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-block d-md-flex gap-0 gap-md-3">
                                                                    <div class="mb-3 w-100">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="text" disabled
                                                                                class="form-control"
                                                                                value="{{ Auth::user()->name }}">
                                                                            <label for="comment">Name</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 w-100">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <input type="email" disabled
                                                                                class="form-control"
                                                                                value="{{ Auth::user()->email }}">
                                                                            <label for="comment">Email</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="form-floating theme-form-floating">
                                                                        <textarea name="review" id="comment" placeholder="Write Comment" class="form-control" rows="8"></textarea>
                                                                        <label for="comment">Write Comment</label>
                                                                    </div>
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-animation btn-md fw-bold mend-auto">Post
                                                                    Review</button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right --}}
                <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                    <div class="right-sidebar-box">
                        <div class="vendor-box">
                            <div class="vendor-contain">
                                <div class="vendor-image">
                                    @if ($product->rel_to_user->photo)
                                        <img src="{{ $product->rel_to_user->photo }}" class="blur-up lazyload"
                                            alt="seller brand logo" />
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ $product->rel_to_user->name }}?rounded=true?background=random?bold=true"
                                            alt="">
                                    @endif
                                </div>

                                <div class="vendor-name">
                                    <h5 class="fw-500">{{ $product->rel_to_user->name }}</h5>

                                    {{-- <div class="product-rating mt-1">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(36 Reviews)</span>
                                    </div> --}}
                                </div>
                            </div>

                            <p class="vendor-detail">{{ $product->rel_to_user->about }}</p>

                            <div class="vendor-list">
                                <ul>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="map-pin"></i>
                                            <h5>Address: <span
                                                    class="text-content">{{ $product->rel_to_user->address }}</span></h5>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="headphones"></i>
                                            <h5>Contact Seller: <span
                                                    class="text-content">{{ $product->rel_to_user->phone }}</span></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Trending Product -->
                        {{-- <div class="pt-25">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list product-right-sidebar border-0 p-0">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend') }}/assets/images/vegetable/product/23.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Meatigo Premium Goat Curry
                                                        </h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend') }}/assets/images/vegetable/product/24.png"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Dates Medjoul Premium
                                                            Imported</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend') }}/assets/images/vegetable/product/25.png"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Good Life Walnut Kernels
                                                        </h6>
                                                    </a>
                                                    <span>200 G</span>
                                                    <h6 class="price theme-color">$ 52.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-0">
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend') }}/assets/images/vegetable/product/26.png"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Apple Red Premium Imported
                                                        </h6>
                                                    </a>
                                                    <span>1 KG</span>
                                                    <h6 class="price theme-color">$ 80.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <!-- Banner Section -->
                        <div class="ratio_156 pt-25">
                            <div class="home-contain">
                                <img src="{{ asset('frontend') }}/assets/images/vegetable/banner/8.jpg"
                                    class="bg-img blur-up lazyload" alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h6 class="text-yellow home-banner">Seafood</h6>
                                        <h3 class="text-uppercase fw-normal"><span
                                                class="theme-color fw-bold">Freshes</span> Products
                                        </h3>
                                        <h3 class="fw-light">every hour</h3>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-md fw-bold mend-auto">Shop Now
                                            <i class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
