<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{ asset('frontend') }}/assets/images/favicon/6.png" type="image/x-icon">
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

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bulk-style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/vendors/animate.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/style.css">

    <!-- Custom CSS  -->
     <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom/header.css">

    @stack('css')
</head>

<body class="theme-color-4 bg-gradient-color">

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
    <header class="fixed-header position-sticky">
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
                                <img src="{{ asset('frontend') }}/assets/images/logo/1.png" class="img-fluid blur-up lazyload" alt="">
                            </a>

                            <div class="middle-box">
                                <div class="location-box">
                                    <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                        <span class="locat-name">Your Location</span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </div>

                                <!-- <div class="search-box">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="I'm searching for...">
                                        <button class="btn bg-theme" type="button" id="button-addon2">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div> -->
                            </div>

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
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
                                    <li class="right-side">
                                        <div class="onhover-dropdown header-badge">
                                            <button type="button" class="btn p-0 position-relative header-wishlist">
                                                <i data-feather="shopping-cart"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge">2
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                            </button>

                                            <div class="onhover-div">
                                                <ul class="cart-list">
                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="./pages/product-left-thumbnail.html" class="drop-image">
                                                                <img src="{{ asset('frontend') }}/assets/images/vegetable/product/1.png"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="./pages/product-left-thumbnail.html">
                                                                    <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                                                                </a>
                                                                <h6><span>1 x</span> $80.58</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="product-box-contain">
                                                        <div class="drop-cart">
                                                            <a href="./pages/product-left-thumbnail.html" class="drop-image">
                                                                <img src="{{ asset('frontend') }}/assets/images/vegetable/product/2.png"
                                                                    class="blur-up lazyload" alt="">
                                                            </a>

                                                            <div class="drop-contain">
                                                                <a href="./pages/product-left-thumbnail.html">
                                                                    <h5>Peanut Butter Bite Premium Butter Cookies 600 g
                                                                    </h5>
                                                                </a>
                                                                <h6><span>1 x</span> $25.68</h6>
                                                                <button class="close-button close_button">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <div class="price-box">
                                                    <h5>Total :</h5>
                                                    <h4 class="theme-color fw-bold">$106.58</h4>
                                                </div>

                                                <div class="button-group">
                                                    <a href="./pages/cart.html" class="btn btn-sm cart-button">View Cart</a>
                                                    <a href="./pages/checkout.html" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                @if(Auth::user())
                                                    <h5>{{ Auth::user()->name }}</h5>
                                                @else
                                                    <h5>My Account</h5>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                @if (Auth::user())
                                                <li class="product-box-contain">
                                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                                </li>
                                                @else
                                                    <li class="product-box-contain">
                                                        <a href="{{ route('login') }}">Log In</a>
                                                    </li>
                                                    <li class="product-box-contain">
                                                        <a href="">Sign Up</a>
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
                    <i class="iconly-Category icli js-link "  data-bs-toggle="offcanvas" data-bs-target="#primaryMenu"></i>
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
                            <img src="{{ asset('frontend') }}/assets/images/logo/1.png" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <ul>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#">Popular Items</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/cup.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#burger">Breakfast</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/frozen.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#pizza">Lunch</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/meats.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#Dinner">Dinner</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/breakfast.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#">Snacks</a>
                                    </h5>
                                </div>
                            </li>
                            
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/drink.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#">Cold Drinks</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/grocery.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#">Grocery</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="category-list">
                                    <img src="{{ asset('frontend') }}/assets/svg/1/milk.svg" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a href="#">Milk & Dairies</a>
                                    </h5>
                                </div>
                            </li>
                           
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
                                        <a href="index.html" class="foot-logo">
                                            <img src=".{{ asset('frontend') }}/assets/images/logo/3.png" class="img-fluid" alt="">
                                        </a>
                                        <p class="information-text">it is a long established fact that a reader will be distracted
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
                                                        <img src=".{{ asset('frontend') }}/assets/images/playstore.svg" class="blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.apple.com/in/app-store/" target="_blank">
                                                        <img src=".{{ asset('frontend') }}/assets/images/appstore.svg" class="blur-up lazyload" alt="">
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
                                                <a href="pages/about-us.html" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>About Us</a>
                                            </li>
                                            <li>
                                                <a href="pages/contact-us.html" class="footer-contain-2">
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
                                                <a href="pages/order-success.html" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>Your Order</a>
                                            </li>
                                            <li>
                                                <a href="pages/user-dashboard.html" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>Your Account</a>
                                            </li>
                                            <li>
                                                <a href="pages/order-tracking.html" class="footer-contain-2">
                                                    <i class="fas fa-angle-right"></i>Track Orders</a>
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
                                                        <p>Fastkart Online ,  Mirpur DHOS 325</p>
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

                                            <li>
                                                <a href="javascript:void(0)">
                                                    <div class="inform-box">
                                                        <i data-feather="printer"></i>
                                                        <p>Fax: 123456</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sub-footer section-small-space">
                                <div class="left-footer">
                                    <p>&copy; 2024, All Rights Reserved By Fastkart</p>
                                </div>
                                <div class="right-footer">
                                    <ul class="payment-box">
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/visa.png" alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/discover.png" alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/american.png" alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/master-card.png" alt="">
                                        </li>
                                        <li>
                                            <img src=".{{ asset('frontend') }}/assets/images/icon/paymant/giro-pay.png" alt="">
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
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="{{ asset('frontend') }}/assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="{{ asset('frontend') }}/assets/js/feather/feather.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset('frontend') }}/assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="{{ asset('frontend') }}/assets/js/slick/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick/slick-animation.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick/custom_slick.js"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset('frontend') }}/assets/js/auto-height.js"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset('frontend') }}/assets/js/fly-cart.js"></script>

    <!-- Quantity js -->
    <script src="{{ asset('frontend') }}/assets/js/quantity-2.js"></script>

    <!-- WOW js -->
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="{{ asset('frontend') }}/assets/js/script.js"></script>

    <!-- theme setting js -->
    <script src="{{ asset('frontend') }}/assets/js/theme-setting.js"></script>
</body>

</html>