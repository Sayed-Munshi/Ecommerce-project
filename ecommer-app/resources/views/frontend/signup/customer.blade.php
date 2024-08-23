@extends('layouts.frontend_master')

@push('css')
    <style>
        .small-size {
            font-size: 15px
        }

        .icon {
            position: absolute;
            top: 18px;
            right: 16px;
        }

        .icon i {
            font-size: 18px;
            cursor: pointer;
            opacity: .7;
        }
    </style>
@endpush

@section('content')
    <div class="section-b-space">
        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2 class="mb-2">Create your FastKart account</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('home') }}">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Sign Up</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- log in section start -->
        <main class="log-in-section background-image-2 section-b-space">
            <div class="container-fluid-lg w-100">
                <div class="row">
                    <aside class="col-xxl-4 col-lg-4 d-lg-block d-none ms-auto">
                        <div class="image-contain">
                            <img src="{{ asset('frontend') }}/assets//images/inner-page/sign-up.png" class="img-fluid"
                                alt="">
                        </div>
                    </aside>

                    <div class="col-lg-8 col-sm-8 mx-auto">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>Get Item Easily</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Create your account</h4>
                                    <h4 class="small-size">Become a seller? <a href="{{ route('seller.signup') }}"
                                            class="text-success">Seller Account</a></h4>
                                </div>
                            </div>

                            <div class="input-box">
                                <form method="POST" action="{{ route('store.customer') }}" class="row g-4">
                                    @csrf

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input id="name" class="form-control" placeholder="name" type="text"
                                                name="name" value="{{ old('name') }}" />
                                            <label for="name">Full Name</label>

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input id="email" class="form-control" placeholder="Email" type="email"
                                                name="email" value="{{ old('email') }}" />
                                            <label for="email">Email</label>

                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input class="form-control" placeholder="Password" type="password"
                                                name="password" id="for-password" />
                                            <label for="password">Password</label>
                                            <div class="icon">
                                                <i class="fa-solid fa-eye for-pass-show"></i>
                                            </div>

                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="forgot-box d-flex justify-content-between align-items-center">
                                            <div class="forgot-box">
                                                <div class="form-check ps-0 m-0 remember-box">
                                                    <input class="checkbox_animated check-box" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">I agree with
                                                        <span class="text-success">Terms</span> and
                                                        <span class="text-success">Privacy</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-animation w-100">
                                            Sign Up
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- log in section end -->
    </div>
@endsection

@push('js')
    <script>
        var forPassword = document.querySelector("#for-password"),
            forPassShow = document.querySelector(".for-pass-show");

        forPassShow.addEventListener("click", function() {
            if (forPassword.type === "password") {
                forPassword.type = 'text';
            } else {
                forPassword.type = 'password';
            }
        });
    </script>
@endpush
