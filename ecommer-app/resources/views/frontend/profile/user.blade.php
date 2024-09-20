@extends('layouts.frontend_master')

@push('css')
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .btn-dark {
            color: white;
            background: #212529;
            padding: 8px 12px !important;
        }

        span.badge {
            background-color: #212529 !important;
        }
    </style>
@endpush

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
                                    <img src="{{ asset('frontend/assets/images/inner-page/cover-img.jpg') }}"
                                        class="img-fluid blur-up lazyloaded" alt="">
                                </div>

                                <div class="profile-contain">
                                    <div class="profile-image">
                                        <div class="position-relative">
                                            @if (Auth::user()->photo)
                                                <img class="blur-up update_img lazyloaded"
                                                    src="{{ asset('uploads/users/' . Auth::user()->photo) }}"
                                                    alt="profile pic" />
                                            @else
                                                <img class="blur-up update_img lazyloaded"
                                                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}?rounded=true?background=random?bold=true"
                                                    alt="avatar" />
                                            @endif
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
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="nav-link cursor-pointer" :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-log-out">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            Log out
                                        </a>
                                    </form>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-xxl-9 col-lg-8">
                        <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                            Menu</button>
                        <div class="dashboard-right-sidebar">
                            <div class="tab-content" id="pills-tabContent">
                                {{-- Dashboard --}}
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
                                                            <h3>{{ $total}}</h3>
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
                                                            <h3>{{$pendingTotal}}</h3>
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
                                                    <h4>Contact Information
                                                    </h4>
                                                </div>
                                                <div class="dashboard-detail">
                                                    <h6 class="text-content">{{ Auth::user()->name }}</h6>
                                                    <h6 class="text-content">{{ Auth::user()->email }}</h6>
                                                    <h6 class="text-content">{{ Auth::user()->phone }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Order --}}
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

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Total order list</h4>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>SL</th>
                                                            <th>ORDER ID</th>
                                                            <th>ORDER AT</th>
                                                            <th>STATUS</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($orders as $order)
                                                            <tr>
                                                                <td>
                                                                    {{ $loop->index + 1 }}
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('order.status', $order->rel_to_order->order_id) }}">
                                                                        <small>{{ $order->rel_to_order->order_id }}</small>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <small>{{ $order->created_at->diffForHumans() }}</small>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge badge-secondary">{{ ucwords($order->rel_to_order->status) }}</span>
                                                                </td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('download.invoice', $order->rel_to_order->order_id) }}"
                                                                        method="POST">
                                                                        @csrf

                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-dark">Download
                                                                            Invoice
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="5">
                                                                    <div class="text-center alert alert-warning">Order list
                                                                        is empty!</div>
                                                                </td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Profile --}}
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
                                                    <h3>{{ Auth::user()->name }}</h3>
                                                </div>
                                            </div>
                                            <div class="location-profile">
                                                <ul>

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
                                                            <h6>Joined {{ Auth::user()->created_at->diffForHumans() }} </h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="profile-description">
                                                <p>{{ Auth::user()->about }}</p>
                                            </div>
                                        </div>

                                        <div class="profile-about dashboard-bg-box">
                                            <div class="row">
                                                <div class="col-xxl-7">
                                                    <div class="dashboard-title mb-3">
                                                        <h3>Profile About</h3>
                                                    </div>
                                                    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Email :</td>
                                                                        <td>{{Auth::user()->email}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Name :</td>
                                                                        <td>
                                                                            <input type="text" class="form-control" name="name"
                                                                                value="{{Auth::user()->name}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phone :</td>
                                                                        <td>
                                                                            <input type="text" class="form-control" name="phone"
                                                                                value="{{Auth::user()->phone}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Addres :</td>
                                                                        <td>
                                                                            <input type="text" class="form-control" name="address"
                                                                                value="{{Auth::user()->address}}">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Photo :</td>
                                                                        <td>
                                                                            <input type="file" name="photo" class="form-control">
                                                                        </td>
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
                                                                            {{Auth::user()->email}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Password :</td>
                                                                        <td>
                                                                            <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                                                                            <input type="password" name="new_password" class="form-control mt-2" placeholder="New Password">
                                                                            <input type="password" name="new_password_confirmation" class="form-control mt-2" placeholder="Confirm New Password">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                                    </form>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- User Dashboard Section End -->
    </div>
@endsection
