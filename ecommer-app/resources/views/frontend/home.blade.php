@extends('layouts.frontend_master')

@section('content')
    <div class="section-b-space">
        <div class="row g-md-4 g-3">
            <div class="col-12">
                <div class="banner-contain hover-effect">
                    <img src="{{ asset('frontend') }}/assets/images/grocery/banner/11.jpg" class="bg-img blur-up lazyload"
                        alt="">
                    <div class="banner-details p-center-left p-sm-5 p-4">
                        <div>
                            <h2 class="text-kaushan fw-normal orange-color">Get Ready To</h2>
                            <h3 class="mt-2 mb-3 text-white">TAKE ON THE DAY!</h3>
                            <p class="text-content banner-text text-white opacity-75 d-md-block d-none">
                                In publishing and graphic design, Lorem ipsum is a placeholder text
                                commonly used to demonstrate.</p>
                            <button onclick="location.href = './pages/shop-left-sidebar.html';"
                                class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                    class="fa-solid fa-arrow-right icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="products-container">
        @foreach ($subcategories as $subcategory)
            <div class="title d-block" id="{{ $subcategory->rel_to_category->id . '-' . $subcategory->rel_to_category->name }}">
                <h2 class="text-theme font-sm">{{ $subcategory->name }}</h2>
                <p>A virtual assistant collects the products from your list</p>
            </div>

            <div class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 section-b-space">
                @forelse (App\Models\Product::where('subcategory_id', $subcategory->id)->where('vendor_id',$vendorId)->get() as $product)
                    <div>
                        <div class="product-box product-white-bg wow fadeIn">
                            <div class="product-image">
                                <a href="{{ route('single.product', $product->slug) }}">
                                    <img src="{{ url('/') . Storage::url($product->thumbnail_image) }}"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>

                            </div>
                            <div class="product-detail position-relative">
                                <a href="{{ route('single.product', $product->slug) }}">
                                    <h6 class="name">
                                        {{ str($product->product_name)->words(4) }}
                                    </h6>
                                </a>

                                {{-- <h6 class="sold weight text-content fw-normal">1 KG</h6> --}}

                                <h6 class="price theme-color">&pound; {{ $product->calculation_price }}</h6>

                                <div class="add-to-cart-btn-2 addtocart_btn" data-product-id="{{ $product->id }}">
                                    <button class="btn addcart-button btn buy-button"><i class="fa-solid fa-plus"></i></button>

                                    <div class="cart_qty qty-box-2 qty-box-3">
                                        <div class="input-group">
                                            <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text" name="quantity" value="1" data-product-id="{{ $product->id }}">
                                            <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-danger text-center">No Product Found</div>
                    </div>
                @endforelse
            </div>
        @endforeach
    </div>

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-xl">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our Facebook Page and get...</h2>
                                    <h5>Exited Offers & discount for your order</h5>
                                    <div class="input-box">
                                        <!-- <input type="email" class="form-control" id="exampleFormControlInput1"
                                                                                                                                                                    placeholder="Enter Your Email">
                                                                                                                                                                <i class="fa-solid fa-envelope arrow"></i> -->
                                        <button class="btn-animation p-3 B">
                                            <span class="d-sm-block d-none">Facebook</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->
@endsection
