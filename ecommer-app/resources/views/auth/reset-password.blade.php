@extends('layouts.frontend_master')
@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Reset Password</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Reset Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- reset password section start -->
    <main class="log-in-section section-b-space forgot-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10 mx-auto">
                    <div class="input-box">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                    
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                            <!-- Email Address -->
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <x-text-input id="email" class="form-control disabled" type="email" name="email" :value="old('email', $request->email)" disbaled required autocomplete="username" />
                                    <label for="email">Email</label>

                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                    
                            <!-- Password -->
                            <div class="col-12 mt-4">
                                <div class="form-floating theme-form-floating">
                                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" autofocus placeholder="Password" />
                                    <label for="password">Password</label>

                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="col-12 mt-4">
                                <div class="form-floating theme-form-floating">
                                    <input id="password_confirmation" class="form-control"
                                    placeholder="Confirm Password"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                    <label for="password_confirmation">Confirm Password</label>

                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-animation">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- reset password section end -->
@endsection
