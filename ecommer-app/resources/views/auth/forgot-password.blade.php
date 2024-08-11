@extends('layouts.frontend_master')

@push('css')
    <style>
        .forgot-password {
            font-size: 15px;
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
                        <h2>Forgot Password</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Forgot Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- forgot password section start -->
    <main class="log-in-section section-b-space forgot-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10 mx-auto">
                    <div class="input-box">
                        <div class="mb-4 forgot-password">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>
                    
                        <!-- Session Status -->
                        <strong>
                            <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                        </strong>
                    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                    
                            <!-- Email Address -->
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input placeholder="Email" class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus />
                                    <label for="email">Email</label>
                                    
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="flex items-center justify-end mt-4">
                                <button type="sumit" class="btn btn-animation">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- forgot password section end -->
</div>
@endsection
