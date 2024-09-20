<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon/6.png') }}" type="image/x-icon">
    <title>On-deliveryX</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css"
        href="{{ asset('frontend/assets/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bulk-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/vendors/animate.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom/header.css') }}">
    <style>
        .logout-anchor {
            cursor: pointer;
        }
    </style>

    @stack('css')
</head>

<body class="theme-color-4">

    <!-- Loader Start -->
    {{-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> --}}
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="fixed-header">
        <div class="top-nav top-header">
            <div class="container-fluid-xs">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon navbar-toggler-icon-2 js-link">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="{{ route('home') }}" class="web-logo nav-logo d-xl-none">
                                <img src="{{ asset('frontend') }}/assets/images/logo/1.png"
                                    class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="middle-box">
                                <div class="location-box">
                                    {{-- <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                        <span class="locat-name">Your Location</span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button> --}}

                                    {{-- select dorpdown for vendor location --}}
                                    {{-- vendors --}}

                                    <select class="btn location-button" aria-label="Default select example">
                                        <option selected disabled>Select Vendor</option>
                                        @foreach (App\Models\vendor::all() as $vendor)
                                            <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="search-box position-relative">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="I'm searching for..." id="search-input">
                                        <button class="btn bg-theme" type="button" id="search-button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>

                                    <!-- Search Results Dropdown (Hidden by default) -->
                                    <div id="search-results" class="search-results position-absolute w-100 bg-white" style="display: none; z-index: 1000; max-height: 300px; overflow-y: auto;">
                                        <!-- Search results will be appended here -->
                                    </div>
                                </div>
                            </div>

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type"
                                            placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <a href="./pages/contact-us.html" class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="phone-call"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>24/7 Delivery</h6>
                                                <h5>+91 888 104 2340</h5>
                                            </div>
                                        </a>
                                    </li>

                                    {{-- Cart --}}
                                    <li class="right-side">
                                        <div class="onhover-dropdown header-badge">
                                            <button type="button" class="btn p-0 position-relative header-wishlist">
                                                <i data-feather="shopping-cart"></i>
                                                @if (!App\Models\Cart::where('user_id', Auth::id())->get()->count() == 0)
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge">{{ App\Models\Cart::where('user_id', Auth::id())->get()->count() }}
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                @endif
                                            </button>

                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    @php
                                                        $subTotal = 0;
                                                    @endphp
                                                    @forelse (App\Models\Cart::where('user_id', Auth::id())->latest()->get() as $item)
                                                        <li class="product-box-contain w-100">
                                                            <div class="drop-cart justify-content-between">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <a href="{{ route('single.product', $item->rel_to_product->slug) }}"
                                                                        class="drop-image">
                                                                        <img src="{{ url('/') . Storage::url($item->rel_to_product->thumbnail_image) }}"
                                                                            class="blur-up lazyload"
                                                                            alt="{{ $item->rel_to_product->product_name }}">
                                                                    </a>
                                                                    <div class="drop-contain">
                                                                        <a
                                                                            href="{{ route('single.product', $item->rel_to_product->slug) }}">
                                                                            <h5>{{ str($item->rel_to_product->product_name)->words(3) }}
                                                                            </h5>
                                                                        </a>
                                                                        <h6>
                                                                            <span>{{ $item->quantity }} x</span>
                                                                            <span>
                                                                                &pound;{{ $item->rel_to_product->calculation_price }}
                                                                            </span>
                                                                        </h6>
                                                                    </div>
                                                                </div>

                                                                <a href="{{ route('delete.cart', $item->id) }}">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        @php
                                                            $subTotal +=
                                                                $item->rel_to_product->calculation_price *
                                                                $item->quantity;
                                                        @endphp
                                                    @empty
                                                        <li class="product-box-contain w-100 text-center">
                                                            <p>No item added to the cart!</p>
                                                        </li>
                                                    @endforelse
                                                    @php
                                                        session([
                                                            'sub_total' => $subTotal,
                                                        ]);
                                                    @endphp
                                                </ul>

                                                <div class="price-box">
                                                    <h5>Total :</h5>
                                                    <h4 class="theme-color fw-bold">&pound;{{ $subTotal }}</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="{{ route('cart') }}" class="btn btn-sm cart-button">View
                                                        Cart</a>
                                                    <a href="{{ route('checkout') }}"
                                                        class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    {{-- User --}}
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                @if (Auth::user())
                                                    <h5>{{ Auth::user()->name }}</h5>
                                                @else
                                                    <h5>My Account</h5>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                @if (Auth::user())
                                                    @if (Auth::user()->role == 'CUSTOMER')
                                                        <li class="product-box-contain">
                                                            <a href="{{ route('user.profile') }}">Profile</a>
                                                        </li>
                                                        <li class="product-box-contain">
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf

                                                                <a class="logout-anchor" :href="route('logout')"
                                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                                    Log out
                                                                </a>
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li class="product-box-contain">
                                                            <a href="{{ route('dashboard') }}">Dashboard</a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="product-box-contain">
                                                        <a href="{{ route('login') }}">Log In</a>
                                                    </li>
                                                    <li class="product-box-contain">
                                                        <a href="{{ route('customer.signup') }}">Sign Up</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="#">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link " data-bs-toggle="offcanvas"
                        data-bs-target="#primaryMenu"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="./pages/cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="./pages/user-dashboard.html" class="notifi-wishlist">
                    <i class="iconly-User2 icli"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Main Section Start -->
    <main class="product-section pt-3">
        <div class="container-fluid p-0">
            <div class="custom-row">
                <aside class="sidebar-col">
                    <div class="category-menu">
                        <a href="{{ route('home') }}" class="web-logo nav-logo">
                            <img src="{{ asset('frontend') }}/assets/images/logo/1.png"
                                class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <ul>
                            @foreach (App\Models\Category::all() as $category)
                                <li>
                                    <div class="category-list">
                                        <img src="{{ url('/') . Storage::url($category->icon) }}"
                                            class="blur-up lazyload" alt="">
                                        <h5>
                                            <a
                                                href="{{ url('/') }}#{{ $category->id . '-' . $category->name }}">{{ ucwords($category->name) }}</a>
                                        </h5>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                <div class="content-col">
                    @yield('content')

                    <!-- Footer Start -->
                    <footer class="section-t-space footer-section-2">
                        <div class="container-fluid">
                            <div class="main-footer">
                                <div class="row g-md-4 gy-sm-5 gy-2 p-sm-3">
                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <a href="{{ route('home')}}" class="foot-logo">
                                            <img src="{{ asset('frontend/assets/images/logo/3.png') }}"
                                                class="img-fluid" alt="">
                                        </a>
                                        <p class="information-text">it is a long established fact that a reader will be
                                            distracted
                                            by the readable content.</p>
                                        <ul class="social-icon">
                                            <li>
                                                <a href="www.facebook.com">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="www.goolge.com">
                                                    <i class="fab fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="www.twitter.com">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="www.instagram.com">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="www.pinterest.com">
                                                    <i class="fab fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="social-app mt-sm-4 mt-3 mb-4">
                                            <ul>
                                                <li>
                                                    <a href="https://play.google.com/store/apps" target="_blank">
                                                        <img src=".{{ asset('frontend') }}/assets/images/playstore.svg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.apple.com/in/app-store/" target="_blank">
                                                        <img src=".{{ asset('frontend') }}/assets/images/appstore.svg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="footer-title">
                                            <h4>About Fastkart</h4>
                                        </div>
                                        <ul class="footer-list footer-contact mb-sm-0 mb-3">
                                            <li>
                                                <a href="{{ route('about.us')}}" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact.us')}}" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>Contact Us</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="footer-title">
                                            <h4>Useful Link</h4>
                                        </div>
                                        <ul class="footer-list footer-contact mb-sm-0 mb-3">
                                            <li>
                                                <a href="{{ route('user.profile')}}" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>Your Order</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('user.profile')}}" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>Your Account</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                                        <div class="footer-title">
                                            <h4>Store infomation</h4>
                                        </div>
                                        <ul class="footer-address footer-contact">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <div class="inform-box flex-start-box">
                                                        <i data-feather="map-pin"></i>
                                                        <p>Fastkart Online , Mirpur DHOS 325</p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <div class="inform-box">
                                                        <i data-feather="phone"></i>
                                                        <p>Call us: 123-456-7890</p>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <div class="inform-box">
                                                        <i data-feather="mail"></i>
                                                        <p>Email Us: Support@Fastkart.com</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sub-footer section-small-space">
                                <div class="left-footer">
                                    <p>&copy; 2024, All Rights Reserved By Sayed Munshi</p>
                                </div>
                                <div class="right-footer">
                                    <ul class="payment-box">
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/visa.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/discover.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/american.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/master-card.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/giro-pay.png"
                                                alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer End -->
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend/assets/js/feather/feather.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/feather/feather-icon.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('frontend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick/custom_slick.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('frontend/assets/js/auto-height.js') }}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('frontend/assets/js/fly-cart.js') }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset('frontend/assets/js/quantity-2.js') }}"></script>

    <!-- WOW js -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom-wow.js') }}"></script>

    <!-- Sweetalert2 js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Page Js --}}
    @stack('js')

    <!-- script js -->
    <script src="{{ asset('frontend') }}/assets/js/script.js"></script>

    <!-- theme setting js -->
    <script src="{{ asset('frontend') }}/assets/js/theme-setting.js"></script>

    <script>
        $(document).ready(function() {
            // Check if there are vendor options
            var firstVendor = $('.location-button option:not([disabled])').eq(0);
            if (firstVendor.length) {
                // Set the first vendor as selected
                firstVendor.prop('selected', true);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            console.log('Document ready');
            $('.location-button').on('change', function() {
                console.log('Vendor selected');
                var vendorId = $(this).val(); // Get the selected vendor ID

                // Perform the AJAX request to fetch products by vendor
                $.ajax({
                    url: '{{ route('vendor.products') }}', // The route to fetch products
                    type: 'GET',
                    data: {
                        vendor_id: vendorId
                    },
                    success: function(response) {
                        // Replace the product list with the new products
                        $('#products-container').html(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText); // Log errors
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var typingTimer; // Timer identifier
            var doneTypingInterval = 500; // Time in ms (500ms = 0.5 seconds)

            // Trigger the search when typing in the input box
            $('#search-input').on('input', function() {
                clearTimeout(typingTimer); // Clear the previous timer
                var searchQuery = $(this).val(); // Get the search query

                // Set a new timer to wait until the user stops typing
                typingTimer = setTimeout(function() {
                    // If there's a search query, perform the AJAX request
                    if (searchQuery.length > 0) {
                        $.ajax({
                            url: '{{ route('search.products') }}', // The route to fetch products
                            type: 'GET',
                            data: {
                                search_query: searchQuery,
                                vendor_id: $('.location-button').val()
                            },
                            success: function(response) {
                                // Show the search results dropdown and fill it with the response
                                $('#search-results').html(response).show();
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText); // Log errors
                            }
                        });
                    } else {
                        // Hide the search results if the input is empty
                        $('#search-results').hide();
                    }
                }, doneTypingInterval);
            });

            // Hide the search results when clicking outside of the search box
            $(document).on('click', function(event) {
                if (!$(event.target).closest('.search-box').length) {
                    $('#search-results').hide();
                }
            });

            // Keep showing search results when clicking inside the search box
            $('#search-input').on('click', function() {
                if ($('#search-results').html().trim() !== '') {
                    $('#search-results').show(); // Show only if there are search results
                }
            });


            // Listen for clicks on the plus and minus buttons
            $('.qty-left-minus, .qty-right-plus').on('click', function() {
                var input = $(this).closest('.input-group').find('.qty-input');
                var currentQuantity = parseInt(input.val());
                console.log('Current Quantity: ' + currentQuantity);
                var newQuantity = currentQuantity;

                if (newQuantity < 1) {
                    newQuantity = 1;
                }

                // Update the quantity input value
                // input.val(newQuantity);

                // Get the product ID from the data attribute
                var productId = input.data('product-id');
                console.log('Product ID: ' + productId);

                // Perform AJAX request to add the updated quantity to the cart
                addToCart(productId, newQuantity);
            });

            // Function to send AJAX request for adding to the cart
            function addToCart(productId, quantity) {
                // check user login or not
                @if (!Auth::check())
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Please login to add product to cart!',
                    });
                    return;
                @endif
                $.ajax({
                    url: '{{ route('cart.add') }}',  // Change this to your actual "Add to Cart" route
                    type: 'POST',
                    data: {
                        product_id: productId,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'  // Include CSRF token for security
                    },
                    success: function(response) {
                        // Handle the success response (e.g., update cart count, show notification, etc.)
                        console.log('Product added to cart successfully!');

                        // Show a success notification
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Product added to cart successfully!',
                            timer: 1000,
                        });
                    },
                    error: function(xhr) {
                        // Handle any errors
                        console.log('Error adding product to cart: ' + xhr.responseText);

                        // Show an error notification
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Error adding product to cart!',
                        });
                    }
                });
            }
        });

    </script>



</body>

</html>
