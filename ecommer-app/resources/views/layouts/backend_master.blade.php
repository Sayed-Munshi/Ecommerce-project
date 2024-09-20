<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('backend') }}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.png" type="image/x-icon">

    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vendors/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/ratio.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/style.css">

    {{-- Page CSS --}}
    @stack('css')
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo" src="{{ asset('backend') }}/assets/images/logo/1.png"
                                alt="logo">
                            <img class="img-fluid white-logo"
                                src="{{ asset('backend') }}/assets/images/logo/1-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="index.html">
                            <img src="{{ asset('backend') }}/assets/images/logo/1.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                {{-- <form class="form-inline search-full" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Fastkart .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form> --}}
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        {{-- Notification --}}
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        {{-- <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="ri-notification-line"></i>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i class="ri-notification-line"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                            class="pull-right">10 min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- Mode --}}
                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>

                        {{-- User --}}
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">

                                {{-- <img class="user-profile rounded-circle"
                                    src="{{ url('/') . '/storage/images/user_photos/' . Auth::user()->photo }}"
                                    alt="photo" /> --}}
                                <img class="user-profile rounded-circle"
                                    src="{{ App\Helpers\ImageHelper::makeProfileImage(Auth::user()->photo) }}"
                                    alt="photo" />

                                <div class="user-name-hide media-body">
                                    <span>{{ Auth::user()->name }}</span>
                                    <p class="mb-0 font-roboto">
                                        {{ Auth::user()->role }}
                                        <i class="middle ri-arrow-down-s-line"></i>
                                    </p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="{{ route('settings') }}">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i data-feather="log-out"></i>
                                            <span>Log out</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="{{ route('dashboard') }}">
                            <img class="img-fluid for-white"
                                src="{{ asset('backend') }}/assets/images/logo/full-white.png" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{ route('dashboard') }}">
                            <img class="img-fluid main-logo main-white"
                                src="{{ asset('backend') }}/assets/images/logo/logo.png" alt="logo">
                            <img class="img-fluid main-logo main-dark"
                                src="{{ asset('backend') }}/assets/images/logo/logo-white.png" alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                {{-- Dashboard --}}
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard') }}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                @if (!(Auth::user()->role === 'SELLER'))
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.vendors') }}">
                                        <i class="ri-store-3-line"></i>
                                        <span>Vendors</span>
                                    </a>
                                </li>
                                @endif

                                {{-- Users --}}
                                @if (!(Auth::user()->role === 'SELLER'))
                                    <li class="sidebar-list">
                                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                            <i class="ri-user-3-line"></i>
                                            <span>Users</span>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="{{ route('admin.customers') }}">Customer</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.sellers') }}">Seller</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.admins') }}">Admin</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.registration') }}">Add Admin</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif



                                {{-- Products --}}
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>

                                    <ul class="sidebar-submenu">
                                        @if (!(Auth::user()->role === 'SELLER'))
                                            <li>
                                                <a href="{{ route('categories') }}">Category List</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('category') }}">Add Category</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('subcategories') }}">Sub Category List</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('subcategory') }}">Add Sub Category</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->role === 'SELLER')
                                            <li>
                                                <a href="{{ route('products') }}">Product List</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('product') }}">Add Product</a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>

                                {{-- Orders --}}
                                @if (Auth::user()->role === 'SELLER' || Auth::user()->role === 'ADMIN')
                                    <li class="sidebar-list">
                                        <a class="linear-icon-link sidebar-link sidebar-title"
                                            href="javascript:void(0)">
                                            <i class="ri-archive-line"></i>
                                            <span>Orders</span>
                                        </a>

                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="{{ route('orders.list') }}">Order List</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif

                                {{-- Report --}}
                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title"
                                        href="javascript:void(0)">
                                        <i class="ri-focus-3-line"></i>
                                        <span>Seller Sales</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="">Shops</a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">
                <div class="container">
                    {{-- @if ($errors->any() || session('error') || session('success'))
                        <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            @if (session('error'))
                                <li>{{ session('error') }}</li>
                            @endif
                            @if (session('success'))
                                <li>{{ session('success') }}</li>
                            @endif
                        </div>
                    @endif --}}
                    @yield('content')
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">&copy; 2024, All Rights Reserved By Sayed Munshi</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- footer End-->
            </div>
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- latest js -->
    <script src="{{ asset('backend') }}/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('backend') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="{{ asset('backend') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{ asset('backend') }}/assets/js/scrollbar/simplebar.js"></script>
    <script src="{{ asset('backend') }}/assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar jquery -->
    <script src="{{ asset('backend') }}/assets/js/config.js"></script>

    <!-- tooltip init js -->
    <script src="{{ asset('backend') }}/assets/js/tooltip-init.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('backend') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('backend') }}/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/notify/index.js"></script>

    <!-- Apexchar js -->
    <script src="{{ asset('backend') }}/assets/js/chart/apex-chart/apex-chart1.js"></script>
    <script src="{{ asset('backend') }}/assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{ asset('backend') }}/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{ asset('backend') }}/assets/js/chart/apex-chart/chart-custom1.js"></script>


    <!-- slick slider js -->
    <script src="{{ asset('backend') }}/assets/js/slick.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/custom-slick.js"></script>

    <!-- customizer js -->
    <script src="{{ asset('backend') }}/assets/js/customizer.js"></script>

    <!-- ratio js -->
    <script src="{{ asset('backend') }}/assets/js/ratio.js"></script>

    <!-- sidebar effect -->
    <script src="{{ asset('backend') }}/assets/js/sidebareffect.js"></script>

    {{-- Page JS --}}
    @stack('js')

    <!-- Theme js -->
    <script src="{{ asset('backend') }}/assets/js/script.js"></script>

    <!-- custom js  -->
    <script src="{{ asset('backend') }}/assets/js/custom/custom.js"></script>
</body>

</html>
