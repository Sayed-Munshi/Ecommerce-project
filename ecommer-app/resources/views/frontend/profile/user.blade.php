@extends('layouts.frontend_master')

@section('content')
    <div class="section-b-space">
        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2>Dashboard</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('home') }}">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Customer Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- User Dashboard Section Start -->
        <section class="user-dashboard-section section-b-space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="dashboard-left-sidebar">
                            <div class="close-button d-flex d-lg-none">
                                <button class="close-sidebar">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="profile-box">
                                <div class="cover-image">
                                    <img src="{{ asset('frontend') }}/assets/images/inner-page/cover-img.jpg"
                                        class="img-fluid blur-up lazyloaded" alt="">
                                </div>

                                <div class="profile-contain">
                                    <div class="profile-image">
                                        <div class="position-relative">
                                            @if (Auth::user()->photo)
                                                <img class="blur-up update_img lazyloaded"
                                                    src="{{ url('/') . '/storage/images/user_photos/' . Auth::user()->photo }}"
                                                    alt="profile pic" />
                                            @else
                                                <img class="blur-up update_img lazyloaded"
                                                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}?rounded=true?background=random?bold=true"
                                                    alt="avatar" />
                                            @endif
                                            {{-- <div class="cover-icon">
                                                <i class="fa-solid fa-pen">
                                                    <input type="file" onchange="readURL(this,0)">
                                                </i>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="profile-name">
                                        <h3>{{ Auth::user()->name }}</h3>
                                        <h6 class="text-content">{{ Auth::user()->email }}</h6>
                                    </div>
                                </div>
                            </div>

                            {{-- Sidebar --}}
                            <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-dashboard" type="button"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        DashBoard</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-order" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>Order</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-wishlist-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-wishlist" type="button"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                        Wishlist</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-card-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-card" type="button" role="tab"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-credit-card">
                                            <rect x="1" y="4" width="22" height="16" rx="2"
                                                ry="2"></rect>
                                            <line x1="1" y1="10" x2="23" y2="10"></line>
                                        </svg> Saved Card</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-address-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-address" type="button" role="tab"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>Address</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-download-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-download" type="button" role="tab"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-download">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>Download</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-security" type="button" role="tab"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shield">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        </svg>
                                        Privacy</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-out-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-out" type="button" role="tab"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        Log Out</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-9 col-lg-8">
                        <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                            Menu</button>
                        <div class="dashboard-right-sidebar">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                                    <div class="dashboard-home">
                                        <div class="title">
                                            <h2>My Dashboard</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                    </use>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="dashboard-user-name">
                                            <h6 class="text-content">Hello, <b
                                                    class="text-title">{{ Auth::user()->name }}</b></h6>
                                            <p class="text-content">From your My Account Dashboard you have the ability to
                                                view a snapshot of your recent account activity and update your account
                                                information. Select a link below to view or edit information.</p>
                                        </div>

                                        <div class="total-box">
                                            <div class="row g-sm-4 g-3">
                                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="total-contain">
                                                        <img src="{{ asset('frontend') }}/assets/images/svg/order.svg"
                                                            class="img-1 blur-up lazyloaded" alt="">
                                                        <img src="{{ asset('frontend') }}/assets/images/svg/order.svg"
                                                            class="blur-up lazyloaded" alt="">
                                                        <div class="total-detail">
                                                            <h5>Total Order</h5>
                                                            <h3>3658</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="total-contain">
                                                        <img src="{{ asset('frontend') }}/assets/images/svg/pending.svg"
                                                            class="img-1 blur-up lazyloaded" alt="">
                                                        <img src="{{ asset('frontend') }}/assets/images/svg/pending.svg"
                                                            class="blur-up lazyloaded" alt="">
                                                        <div class="total-detail">
                                                            <h5>Total Pending Order</h5>
                                                            <h3>254</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="total-contain">
                                                        <img src="{{ asset('frontend') }}/assets/images/svg/wishlist.svg"
                                                            class="img-1 blur-up lazyloaded" alt="">
                                                        <img src="{{ asset('frontend') }}/assets/images/svg/wishlist.svg"
                                                            class="blur-up lazyloaded" alt="">
                                                        <div class="total-detail">
                                                            <h5>Total Wishlist</h5>
                                                            <h3>32158</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dashboard-title">
                                            <h3>Account Information</h3>
                                        </div>

                                        <div class="row g-4">
                                            <div class="col-xxl-6">
                                                <div class="dashboard-content-title">
                                                    <h4>Contact Information <a href="javascript:void(0)"
                                                            data-bs-toggle="modal" data-bs-target="#editProfile">Edit</a>
                                                    </h4>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">MARK JECNO</h6>
                                                    <h6 class="text-content">vicki.pope@gmail.com</h6>
                                                    <a href="javascript:void(0)">Change Password</a>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6">
                                                <div class="dashboard-content-title">
                                                    <h4>Newsletters <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#editProfile">Edit</a></h4>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">You are currently not subscribed to any
                                                        newsletter</h6>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="dashboard-content-title">
                                                    <h4>Address Book <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#editProfile">Edit</a></h4>
                                                </div>

                                                <div class="row g-4">
                                                    <div class="col-xxl-6">
                                                        <div class="dashboard-detail">
                                                            <h6 class="text-content">Default Billing Address</h6>
                                                            <h6 class="text-content">You have not set a default billing
                                                                address.</h6>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#editProfile">Edit Address</a>
                                                        </div>
                                                    </div>

                                                    <div class="col-xxl-6">
                                                        <div class="dashboard-detail">
                                                            <h6 class="text-content">Default Shipping Address</h6>
                                                            <h6 class="text-content">You have not set a default shipping
                                                                address.</h6>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#editProfile">Edit Address</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-wishlist" role="tabpanel">
                                    <div class="dashboard-wishlist">
                                        <div class="title">
                                            <h2>My Wishlist History</h2>
                                            <span class="title-leaf title-leaf-gray">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                    </use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="row g-sm-4 g-3">
                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/2.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Vegetable</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet
                                                                cheesy grin brie. Mascarpone cheese and wine hard cheese the
                                                                big cheese everyone loves smelly cheese macaroni cheese
                                                                croque monsieur.</p>
                                                            <h6 class="unit mt-1">250 ml</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$08.02</span>
                                                                <del>$15.15</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/3.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Vegetable</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">Peanut Butter Bite Premium Butter
                                                                    Cookies
                                                                    600 g</h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Feta taleggio
                                                                croque monsieur swiss manchego cheesecake dolcelatte
                                                                jarlsberg. Hard cheese danish fontina boursin melted cheese
                                                                fondue.</p>
                                                            <h6 class="unit mt-1">350 G</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$04.33</span>
                                                                <del>$10.36</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/4.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Snacks</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">SnackAmor Combo Pack of Jowar Stick and
                                                                    Jowar Chips</h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Lancashire
                                                                hard cheese parmesan. Danish fontina mozzarella cream cheese
                                                                smelly cheese cheese and wine cheesecake dolcelatte stilton.
                                                                Cream cheese parmesan who moved my cheese when the cheese
                                                                comes out everybody's happy cream cheese red leicester
                                                                ricotta edam.</p>
                                                            <h6 class="unit mt-1">570 G</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$12.52</span>
                                                                <del>$13.62</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/5.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Snacks</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">Yumitos Chilli Sprinkled Potato Chips
                                                                    100 g
                                                                </h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Cheddar
                                                                cheddar pecorino hard cheese hard cheese cheese and biscuits
                                                                bocconcini babybel. Cow goat paneer cream cheese fromage
                                                                cottage cheese cauliflower cheese jarlsberg.</p>
                                                            <h6 class="unit mt-1">100 G</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$10.25</span>
                                                                <del>$12.36</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/6.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Vegetable</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Bavarian
                                                                bergkase smelly cheese swiss cut the cheese lancashire who
                                                                moved my cheese manchego melted cheese. Red leicester paneer
                                                                cow when the cheese comes out everybody's happy croque
                                                                monsieur goat melted cheese port-salut.</p>
                                                            <h6 class="unit mt-1">550 G</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$14.25</span>
                                                                <del>$16.57</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/7.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Vegetable</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Melted cheese
                                                                babybel chalk and cheese. Port-salut port-salut cream cheese
                                                                when the cheese comes out everybody's happy cream cheese
                                                                hard cheese cream cheese red leicester.</p>
                                                            <h6 class="unit mt-1">1 Kg</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$12.68</span>
                                                                <del>$14.69</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                                <div class="product-box-3 theme-bg-white h-100">
                                                    <div class="product-header">
                                                        <div class="product-image">
                                                            <a href="product-left-thumbnail.html">
                                                                <img src="{{ asset('frontend') }}/assets/images/cake/product/2.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="product-header-top">
                                                                <button class="btn wishlist-button close_button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-footer">
                                                        <div class="product-detail">
                                                            <span class="span-name">Vegetable</span>
                                                            <a href="product-left-thumbnail.html">
                                                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                            </a>
                                                            <p class="text-content mt-1 mb-2 product-content">Squirty
                                                                cheese
                                                                cottage cheese cheese strings. Red leicester paneer danish
                                                                fontina queso lancashire when the cheese comes out
                                                                everybody's happy cottage cheese paneer.</p>
                                                            <h6 class="unit mt-1">250 ml</h6>
                                                            <h5 class="price">
                                                                <span class="theme-color">$08.02</span>
                                                                <del>$15.15</del>
                                                            </h5>
                                                            <div class="add-to-cart-box mt-2">
                                                                <button class="btn btn-add-cart addcart-button"
                                                                    tabindex="0">Add
                                                                    <span class="add-icon">
                                                                        <i class="fa-solid fa-plus"></i>
                                                                    </span>
                                                                </button>
                                                                <div class="cart_qty qty-box">
                                                                    <div class="input-group">
                                                                        <button type="button" class="qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity"
                                                                            value="0">
                                                                        <button type="button" class="qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-order" role="tabpanel">
                                    <div class="dashboard-order">
                                        <div class="title">
                                            <h2>My Orders History</h2>
                                            <span class="title-leaf title-leaf-gray">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                    </use>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="order-contain">
                                            <div class="order-box dashboard-bg-box">
                                                <div class="order-container">
                                                    <div class="order-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-box">
                                                            <path
                                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                            </path>
                                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                            <line x1="12" y1="22.08" x2="12"
                                                                y2="12"></line>
                                                        </svg>
                                                    </div>

                                                    <div class="order-detail">
                                                        <h4>Delivers <span>Pending</span></h4>
                                                        <h6 class="text-content">Gouda parmesan caerphilly mozzarella
                                                            cottage cheese cauliflower cheese taleggio gouda.</h6>
                                                    </div>
                                                </div>

                                                <div class="product-order-detail">
                                                    <a href="product-left-thumbnail.html" class="order-image">
                                                        <img src="{{ asset('frontend') }}/assets/images/vegetable/product/1.png"
                                                            class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="order-wrap">
                                                        <a href="product-left-thumbnail.html">
                                                            <h3>Fantasy Crunchy Choco Chip Cookies</h3>
                                                        </a>
                                                        <p class="text-content">Cheddar dolcelatte gouda. Macaroni cheese
                                                            cheese strings feta halloumi cottage cheese jarlsberg cheese
                                                            triangles say cheese.</p>
                                                        <ul class="product-size">
                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Price : </h6>
                                                                    <h5>$20.68</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Rate : </h6>
                                                                    <div class="product-rating ms-2">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Sold By : </h6>
                                                                    <h5>Fresho</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Quantity : </h6>
                                                                    <h5>250 G</h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-box dashboard-bg-box">
                                                <div class="order-container">
                                                    <div class="order-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-box">
                                                            <path
                                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                            </path>
                                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                            <line x1="12" y1="22.08" x2="12"
                                                                y2="12"></line>
                                                        </svg>
                                                    </div>

                                                    <div class="order-detail">
                                                        <h4>Delivered <span class="success-bg">Success</span></h4>
                                                        <h6 class="text-content">Cheese on toast cheesy grin cheesy grin
                                                            cottage cheese caerphilly everyone loves cottage cheese the big
                                                            cheese.</h6>
                                                    </div>
                                                </div>

                                                <div class="product-order-detail">
                                                    <a href="product-left-thumbnail.html" class="order-image">
                                                        <img src="{{ asset('frontend') }}/assets/images/vegetable/product/2.png"
                                                            alt="" class="blur-up lazyload">
                                                    </a>

                                                    <div class="order-wrap">
                                                        <a href="product-left-thumbnail.html">
                                                            <h3>Cold Brew Coffee Instant Coffee 50 g</h3>
                                                        </a>
                                                        <p class="text-content">Pecorino paneer port-salut when the cheese
                                                            comes out everybody's happy red leicester mascarpone blue
                                                            castello cauliflower cheese.</p>
                                                        <ul class="product-size">
                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Price : </h6>
                                                                    <h5>$20.68</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Rate : </h6>
                                                                    <div class="product-rating ms-2">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Sold By : </h6>
                                                                    <h5>Fresho</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Quantity : </h6>
                                                                    <h5>250 G</h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-box dashboard-bg-box">
                                                <div class="order-container">
                                                    <div class="order-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-box">
                                                            <path
                                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                            </path>
                                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                            <line x1="12" y1="22.08" x2="12"
                                                                y2="12"></line>
                                                        </svg>
                                                    </div>

                                                    <div class="order-detail">
                                                        <h4>Delivere <span>Pending</span></h4>
                                                        <h6 class="text-content">Cheesy grin boursin cheesy grin cheesecake
                                                            blue castello cream cheese lancashire melted cheese.</h6>
                                                    </div>
                                                </div>

                                                <div class="product-order-detail">
                                                    <a href="product-left-thumbnail.html" class="order-image">
                                                        <img src="{{ asset('frontend') }}/assets/images/vegetable/product/3.png"
                                                            alt="" class="blur-up lazyload">
                                                    </a>

                                                    <div class="order-wrap">
                                                        <a href="product-left-thumbnail.html">
                                                            <h3>Peanut Butter Bite Premium Butter Cookies 600 g</h3>
                                                        </a>
                                                        <p class="text-content">Cow bavarian bergkase mascarpone paneer
                                                            squirty cheese fromage frais cheese slices when the cheese comes
                                                            out everybody's happy.</p>
                                                        <ul class="product-size">
                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Price : </h6>
                                                                    <h5>$20.68</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Rate : </h6>
                                                                    <div class="product-rating ms-2">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Sold By : </h6>
                                                                    <h5>Fresho</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Quantity : </h6>
                                                                    <h5>250 G</h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-box dashboard-bg-box">
                                                <div class="order-container">
                                                    <div class="order-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-box">
                                                            <path
                                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                            </path>
                                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                            <line x1="12" y1="22.08" x2="12"
                                                                y2="12"></line>
                                                        </svg>
                                                    </div>

                                                    <div class="order-detail">
                                                        <h4>Delivered <span class="success-bg">Success</span></h4>
                                                        <h6 class="text-content">Caerphilly port-salut parmesan pecorino
                                                            croque monsieur dolcelatte melted cheese cheese and wine.</h6>
                                                    </div>
                                                </div>

                                                <div class="product-order-detail">
                                                    <a href="product-left-thumbnail.html" class="order-image">
                                                        <img src="{{ asset('frontend') }}/assets/images/vegetable/product/4.png"
                                                            class="blur-up lazyload" alt="">
                                                    </a>

                                                    <div class="order-wrap">
                                                        <a href="product-left-thumbnail.html">
                                                            <h3>SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h3>
                                                        </a>
                                                        <p class="text-content">The big cheese cream cheese pepper jack
                                                            cheese slices danish fontina everyone loves cheese on toast
                                                            bavarian bergkase.</p>
                                                        <ul class="product-size">
                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Price : </h6>
                                                                    <h5>$20.68</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Rate : </h6>
                                                                    <div class="product-rating ms-2">
                                                                        <ul class="rating">
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star fill">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                            <li>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Sold By : </h6>
                                                                    <h5>Fresho</h5>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="size-box">
                                                                    <h6 class="text-content">Quantity : </h6>
                                                                    <h5>250 G</h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-address" role="tabpanel">
                                    <div class="dashboard-address">
                                        <div class="title title-flex">
                                            <div>
                                                <h2>My Address Book</h2>
                                                <span class="title-leaf">
                                                    <svg class="icon-width bg-gray">
                                                        <use
                                                            xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                        </use>
                                                    </svg>
                                                </span>
                                            </div>

                                            <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3"
                                                data-bs-toggle="modal" data-bs-target="#add-address"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus me-2">
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19"></line>
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12"></line>
                                                </svg> Add New Address</button>
                                        </div>

                                        <div class="row g-sm-4 g-3">
                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                                <div class="address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jack" id="flexRadioDefault2" checked="">
                                                        </div>

                                                        <div class="label">
                                                            <label>Home</label>
                                                        </div>

                                                        <div class="table-responsive address-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2">Jack Jennas</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Address :</td>
                                                                        <td>
                                                                            <p>8424 James Lane South San Francisco, CA 94080
                                                                            </p>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Pin Code :</td>
                                                                        <td>+380</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Phone :</td>
                                                                        <td>+ 812-710-3798</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#editProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>
                                                            Edit</button>
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#removeProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                            Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                                <div class="address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jack" id="flexRadioDefault3">
                                                        </div>

                                                        <div class="label">
                                                            <label>Office</label>
                                                        </div>

                                                        <div class="table-responsive address-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2">Terry S. Sutton</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Address :</td>
                                                                        <td>
                                                                            <p>2280 Rose Avenue Kenner, LA 70062</p>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Pin Code :</td>
                                                                        <td>+25</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Phone :</td>
                                                                        <td>+ 504-228-0969</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#editProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>
                                                            Edit</button>
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#removeProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                            Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                                <div class="address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jack" id="flexRadioDefault4">
                                                        </div>

                                                        <div class="label">
                                                            <label>Neighbour</label>
                                                        </div>

                                                        <div class="table-responsive address-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2">Juan M. McKeon</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Address :</td>
                                                                        <td>
                                                                            <p>1703 Carson Street Lexington, KY 40593</p>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Pin Code :</td>
                                                                        <td>+78</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Phone :</td>
                                                                        <td>+ 859-257-0509</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#editProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>
                                                            Edit</button>
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#removeProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                            Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                                <div class="address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jack" id="flexRadioDefault5">
                                                        </div>

                                                        <div class="label">
                                                            <label>Home 2</label>
                                                        </div>

                                                        <div class="table-responsive address-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2">Gary M. Bailey</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Address :</td>
                                                                        <td>
                                                                            <p>2135 Burning Memory Lane Philadelphia, PA
                                                                                19135</p>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Pin Code :</td>
                                                                        <td>+26</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Phone :</td>
                                                                        <td>+ 215-335-9916</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#editProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>
                                                            Edit</button>
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#removeProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                            Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6">
                                                <div class="address-box">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jack" id="flexRadioDefault1">
                                                        </div>

                                                        <div class="label">
                                                            <label>Home 2</label>
                                                        </div>

                                                        <div class="table-responsive address-table">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2">Gary M. Bailey</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Address :</td>
                                                                        <td>
                                                                            <p>2135 Burning Memory Lane Philadelphia, PA
                                                                                19135</p>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Pin Code :</td>
                                                                        <td>+26</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Phone :</td>
                                                                        <td>+ 215-335-9916</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="button-group">
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#editProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>
                                                            Edit</button>
                                                        <button class="btn btn-sm add-button w-100"
                                                            data-bs-toggle="modal" data-bs-target="#removeProfile"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                            Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-card" role="tabpanel">
                                    <div class="dashboard-card">
                                        <div class="title title-flex">
                                            <div>
                                                <h2>My Card Details</h2>
                                                <span class="title-leaf">
                                                    <svg class="icon-width bg-gray">
                                                        <use
                                                            xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                        </use>
                                                    </svg>
                                                </span>
                                            </div>

                                            <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3"
                                                data-bs-toggle="modal" data-bs-target="#editCard"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus me-2">
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19"></line>
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12"></line>
                                                </svg> Add New Card</button>
                                        </div>

                                        <div class="row g-4">
                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                                <div class="payment-card-detail">
                                                    <div class="card-details">
                                                        <div class="card-number">
                                                            <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                        </div>

                                                        <div class="valid-detail">
                                                            <div class="title">
                                                                <span>valid</span>
                                                                <span>thru</span>
                                                            </div>
                                                            <div class="date">
                                                                <h3>08/05</h3>
                                                            </div>
                                                            <div class="primary">
                                                                <span class="badge bg-pill badge-light">primary</span>
                                                            </div>
                                                        </div>

                                                        <div class="name-detail">
                                                            <div class="name">
                                                                <h5>Audrey Carol</h5>
                                                            </div>
                                                            <div class="card-img">
                                                                <img src="{{ asset('frontend') }}/assets/images/payment-icon/1.jpg"
                                                                    class="img-fluid blur-up lazyloaded" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="edit-card">
                                                        <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                            href="javascript:void(0)"><i class="far fa-edit"></i>
                                                            edit</a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#removeProfile"><i
                                                                class="far fa-minus-square"></i> delete</a>
                                                    </div>
                                                </div>

                                                <div class="edit-card-mobile">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                        href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                        delete</a>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                                <div class="payment-card-detail">
                                                    <div class="card-details card-visa">
                                                        <div class="card-number">
                                                            <h4>XXXX - XXXX - XXXX - 1536</h4>
                                                        </div>

                                                        <div class="valid-detail">
                                                            <div class="title">
                                                                <span>valid</span>
                                                                <span>thru</span>
                                                            </div>
                                                            <div class="date">
                                                                <h3>12/23</h3>
                                                            </div>
                                                            <div class="primary">
                                                                <span class="badge bg-pill badge-light">primary</span>
                                                            </div>
                                                        </div>

                                                        <div class="name-detail">
                                                            <div class="name">
                                                                <h5>Leah Heather</h5>
                                                            </div>
                                                            <div class="card-img">
                                                                <img src="{{ asset('frontend') }}/assets/images/payment-icon/2.jpg"
                                                                    class="img-fluid blur-up lazyloaded" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="edit-card">
                                                        <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                            href="javascript:void(0)"><i class="far fa-edit"></i>
                                                            edit</a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#removeProfile"><i
                                                                class="far fa-minus-square"></i> delete</a>
                                                    </div>
                                                </div>

                                                <div class="edit-card-mobile">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                        href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                        delete</a>
                                                </div>
                                            </div>

                                            <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                                <div class="payment-card-detail">
                                                    <div class="card-details debit-card">
                                                        <div class="card-number">
                                                            <h4>XXXX - XXXX - XXXX - 1366</h4>
                                                        </div>

                                                        <div class="valid-detail">
                                                            <div class="title">
                                                                <span>valid</span>
                                                                <span>thru</span>
                                                            </div>
                                                            <div class="date">
                                                                <h3>05/21</h3>
                                                            </div>
                                                            <div class="primary">
                                                                <span class="badge bg-pill badge-light">primary</span>
                                                            </div>
                                                        </div>

                                                        <div class="name-detail">
                                                            <div class="name">
                                                                <h5>mark jecno</h5>
                                                            </div>
                                                            <div class="card-img">
                                                                <img src="{{ asset('frontend') }}/assets/images/payment-icon/3.jpg"
                                                                    class="img-fluid blur-up lazyloaded" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="edit-card">
                                                        <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                            href="javascript:void(0)"><i class="far fa-edit"></i>
                                                            edit</a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#removeProfile"><i
                                                                class="far fa-minus-square"></i> delete</a>
                                                    </div>
                                                </div>

                                                <div class="edit-card-mobile">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard"
                                                        href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                        delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                    <div class="dashboard-profile">
                                        <div class="title">
                                            <h2>My Profile</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                    </use>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="profile-detail dashboard-bg-box">
                                            <div class="dashboard-title">
                                                <h3>Profile Name</h3>
                                            </div>
                                            <div class="profile-name-detail">
                                                <div class="d-sm-flex align-items-center d-block">
                                                    <h3>Vicki E. Pope</h3>
                                                    <div class="product-rating profile-rating">
                                                        <ul class="rating">
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star fill">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star fill">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star fill">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#editProfile">Edit</a>
                                            </div>

                                            <div class="location-profile">
                                                <ul>
                                                    <li>
                                                        <div class="location-box">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-map-pin">
                                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z">
                                                                </path>
                                                                <circle cx="12" cy="10" r="3"></circle>
                                                            </svg>
                                                            <h6>Downers Grove, IL</h6>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="location-box">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-mail">
                                                                <path
                                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                                </path>
                                                                <polyline points="22,6 12,13 2,6"></polyline>
                                                            </svg>
                                                            <h6>vicki.pope@gmail.com</h6>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="location-box">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-check-square">
                                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                                <path
                                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                                </path>
                                                            </svg>
                                                            <h6>Licensed for 2 years</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="profile-description">
                                                <p>Residences can be classified by and how they are connected to
                                                    neighbouring residences and land. Different types of housing tenure can
                                                    be used for the same physical type.</p>
                                            </div>
                                        </div>

                                        <div class="profile-about dashboard-bg-box">
                                            <div class="row">
                                                <div class="col-xxl-7">
                                                    <div class="dashboard-title mb-3">
                                                        <h3>Profile About</h3>
                                                    </div>

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Gender :</td>
                                                                    <td>Female</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Birthday :</td>
                                                                    <td>21/05/1997</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone Number :</td>
                                                                    <td>
                                                                        <a href="javascript:void(0)"> +91 846 - 547 -
                                                                            210</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address :</td>
                                                                    <td>549 Sulphur Springs Road, Downers, IL</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="dashboard-title mb-3">
                                                        <h3>Login Details</h3>
                                                    </div>

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Email :</td>
                                                                    <td>
                                                                        <a href="javascript:void(0)">vicki.pope@gmail.com
                                                                            <span data-bs-toggle="modal"
                                                                                data-bs-target="#editProfile">Edit</span></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Password :</td>
                                                                    <td>
                                                                        <a href="javascript:void(0)">●●●●●●
                                                                            <span data-bs-toggle="modal"
                                                                                data-bs-target="#editProfile">Edit</span></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-5">
                                                    <div class="profile-image">
                                                        <img src="{{ asset('frontend') }}/assets/images/inner-page/dashboard-profile.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-download" role="tabpanel">
                                    <div class="dashboard-download">
                                        <div class="title">
                                            <h2>My Download</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="{{ asset('frontend') }}/assets/svg/leaf.svg#leaf">
                                                    </use>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="download-detail dashboard-bg-box">
                                            <form>
                                                <div class="input-group download-form">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search your download">
                                                    <button class="btn theme-bg-color text-light" type="button"
                                                        id="button-addon2">Search</button>
                                                </div>
                                            </form>

                                            <div class="select-filter-box">
                                                <select class="form-select">
                                                    <option selected="">All marketplaces</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>


                                                <ul class="nav nav-pills filter-box" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-data-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-data"
                                                            type="button">Data Purchased</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-title-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-title"
                                                            type="button">Title</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-rating-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-rating"
                                                            type="button">My Rating</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-recent-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-recent"
                                                            type="button">Recent
                                                            Updates</button>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-data"
                                                    role="tabpanel">
                                                    <div class="download-table">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Image</th>
                                                                        <th>Name</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/1.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Sheltos - Real Estate Angular 17 Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/2.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Oslo - Multipurpose Shopify Theme. Fast, Clean,
                                                                            and
                                                                            Flexible. OS 2.0</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/3.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Boho - React JS Admin Dashboard Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-title">
                                                    <div class="download-table">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Image</th>
                                                                        <th>Name</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/1.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Sheltos - Real Estate Angular 17 Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/2.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Oslo - Multipurpose Shopify Theme. Fast, Clean,
                                                                            and
                                                                            Flexible. OS 2.0</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/3.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Boho - React JS Admin Dashboard Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-rating">
                                                    <div class="download-table">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Image</th>
                                                                        <th>Name</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/1.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Sheltos - Real Estate Angular 17 Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/2.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Oslo - Multipurpose Shopify Theme. Fast, Clean,
                                                                            and
                                                                            Flexible. OS 2.0</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/3.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Boho - React JS Admin Dashboard Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-recent">
                                                    <div class="download-table">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Image</th>
                                                                        <th>Name</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/1.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Sheltos - Real Estate Angular 17 Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/2.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Oslo - Multipurpose Shopify Theme. Fast, Clean,
                                                                            and
                                                                            Flexible. OS 2.0</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>
                                                                            <img src="{{ asset('frontend') }}/assets/images/theme-icon/3.png"
                                                                                class="img-fluid" alt="">
                                                                        </td>
                                                                        <td>Boho - React JS Admin Dashboard Template</td>
                                                                        <td>
                                                                            <div class="dropdown download-dropdown">
                                                                                <button class="btn dropdown-toggle"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown">Download</button>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">All files
                                                                                            &amp; documentation</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (PDF)</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="dropdown-item"
                                                                                            href="#">License
                                                                                            certificate &amp; purchase code
                                                                                            (text)</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-security" role="tabpanel">
                                    <div class="dashboard-privacy">
                                        <div class="dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Privacy</h3>
                                            </div>

                                            <div class="privacy-box">
                                                <div class="d-flex align-items-start">
                                                    <h6>Allows others to see my profile</h6>
                                                    <div class="form-check form-switch switch-radio ms-auto">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="redio">
                                                        <label class="form-check-label" for="redio"></label>
                                                    </div>
                                                </div>

                                                <p class="text-content">all peoples will be able to see my profile</p>
                                            </div>

                                            <div class="privacy-box">
                                                <div class="d-flex align-items-start">
                                                    <h6>who has save this profile only that people see my profile</h6>
                                                    <div class="form-check form-switch switch-radio ms-auto">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="redio2">
                                                        <label class="form-check-label" for="redio2"></label>
                                                    </div>
                                                </div>

                                                <p class="text-content">all peoples will not be able to see my profile</p>
                                            </div>

                                            <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Save
                                                Changes</button>
                                        </div>

                                        <div class="dashboard-bg-box mt-4">
                                            <div class="dashboard-title mb-4">
                                                <h3>Account settings</h3>
                                            </div>

                                            <div class="privacy-box">
                                                <div class="d-flex align-items-start">
                                                    <h6>Deleting Your Account Will Permanently</h6>
                                                    <div class="form-check form-switch switch-radio ms-auto">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="redio3">
                                                        <label class="form-check-label" for="redio3"></label>
                                                    </div>
                                                </div>
                                                <p class="text-content">Once your account is deleted, you will be logged
                                                    out
                                                    and will be unable to log in back.</p>
                                            </div>

                                            <div class="privacy-box">
                                                <div class="d-flex align-items-start">
                                                    <h6>Deleting Your Account Will Temporary</h6>
                                                    <div class="form-check form-switch switch-radio ms-auto">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="redio4">
                                                        <label class="form-check-label" for="redio4"></label>
                                                    </div>
                                                </div>

                                                <p class="text-content">Once your account is deleted, you will be logged
                                                    out
                                                    and you will be create new account</p>
                                            </div>

                                            <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Delete My
                                                Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- User Dashboard Section End -->
    </div>
@endsection
