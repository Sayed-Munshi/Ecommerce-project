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

    <div class="title d-block" id="burger">
        <h2 class="text-theme font-sm">Burger Cupboard</h2>
        <p>A virtual assistant collects the products from your list</p>
    </div>

    <div
        class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 section-b-space">
        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/1.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Muffets & Tuffets Whole Wheat Bread 400 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/2.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fresh Bread and Pastry Flour 200 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/3.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Peanut Butter Bite Premium Butter Cookies 600 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/4.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            SnackAmor Combo Pack of Jowar Stick and Jowar Chips
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/5.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Yumitos Chilli Sprinkled Potato Chips 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/6.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fantasy Crunchy Choco Chip Cookies
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/7.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fresh Bread and Pastry Flour 200 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/8.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Milky Silicone Heart Chocolate Mould ( Pack of 1 )
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/9.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">chocolate-chip-cookies 250 g</h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/10.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Cupcake Holder for Birthday and Wedding Party 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/5.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Yumitos Chilli Sprinkled Potato Chips 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/burger/6.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fantasy Crunchy Choco Chip Cookies
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title d-block" id="pizza">
        <h2 class="text-theme font-sm">Pizza Cupboard</h2>
        <p>A virtual assistant collects the products from your list</p>
    </div>

    <div
        class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 section-b-space">
        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/1.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Muffets & Tuffets Whole Wheat Bread 400 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza//2.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fresh Bread and Pastry Flour 200 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/3.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Peanut Butter Bite Premium Butter Cookies 600 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>

            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/4.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            SnackAmor Combo Pack of Jowar Stick and Jowar Chips
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/5.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Yumitos Chilli Sprinkled Potato Chips 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/6.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fantasy Crunchy Choco Chip Cookies
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/7.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fresh Bread and Pastry Flour 200 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/8.png"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Milky Silicone Heart Chocolate Mould ( Pack of 1 )
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/9.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">chocolate-chip-cookies 250 g</h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/10.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Cupcake Holder for Birthday and Wedding Party 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/11.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Yumitos Chilli Sprinkled Potato Chips 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/pizza/5.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fantasy Crunchy Choco Chip Cookies
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="title d-block" id="meat">
        <h2 class="text-theme font-sm">Meat Cupboard</h2>
        <p>A virtual assistant collects the products from your list</p>
    </div>

    <div
        class="row row-cols-xxl-6 row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 section-b-space">
        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/1.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Muffets & Tuffets Whole Wheat Bread 400 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/2.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fresh Bread and Pastry Flour 200 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/3.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Peanut Butter Bite Premium Butter Cookies 600 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/4.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            SnackAmor Combo Pack of Jowar Stick and Jowar Chips
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/5.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Yumitos Chilli Sprinkled Potato Chips 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/6.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fantasy Crunchy Choco Chip Cookies
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/7.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fresh Bread and Pastry Flour 200 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/8.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Milky Silicone Heart Chocolate Mould ( Pack of 1 )
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/9.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">chocolate-chip-cookies 250 g</h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/10.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Cupcake Holder for Birthday and Wedding Party 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/11.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Yumitos Chilli Sprinkled Potato Chips 100 g
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="product-box product-white-bg wow fadeIn" data-wow-delay="0.1s">
                <div class="product-image">
                    <a href="./pages/product-left-thumbnail.html">
                        <img src="{{ asset('frontend') }}/assets/images/cake/product/meat/12.jpg"
                            class="img-fluid blur-up lazyload" alt="">
                    </a>
                    
                </div>
                <div class="product-detail position-relative">
                    <a href="./pages/product-left-thumbnail.html">
                        <h6 class="name">
                            Fantasy Crunchy Choco Chip Cookies
                        </h6>
                    </a>

                    <h6 class="sold weight text-content fw-normal">1 KG</h6>

                    <h6 class="price theme-color">$ 80.00</h6>

                    <div class="add-to-cart-btn-2 addtocart_btn">
                        <button class="btn addcart-button btn buy-button"><i
                                class="fa-solid fa-plus"></i></button>
                        <div class="cart_qty qty-box-2 qty-box-3">
                            <div class="input-group">
                                <button type="button" class="qty-left-minus" data-type="minus"
                                    data-field="">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <input class="form-control input-number qty-input" type="text"
                                    name="quantity" value="0">
                                <button type="button" class="qty-right-plus" data-type="plus"
                                    data-field="">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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