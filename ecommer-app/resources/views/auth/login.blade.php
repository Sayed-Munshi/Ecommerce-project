@extends('layouts.frontend_master')
@section('content')
<div class="section-b-space">
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-contain">
              <h2 class="mb-2">Log in to your account</h2>
              <nav>
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">
                      <i class="fa-solid fa-house"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item active">Log In</li>
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
          <aside class="col-xxl-4 col-xl-5 col-lg-5 d-lg-block d-none ms-auto">
            <div class="image-contain">
              <img src="{{ asset('frontend') }}/assets/images/inner-page/log-in.png" class="img-fluid" alt="">
            </div>
          </aside>

          <div class="col-xl-7 col-lg-7 col-sm-8 mx-auto">
            <div class="log-in-box">
              <div class="log-in-title">
                <h3>Welcome Back!</h3>
                <h4>Log in to your account</h4>
              </div>

              <div class="input-box">
                <form method="POST" action="{{ route('login') }}" class="row g-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="col-12">
                        <div class="form-floating theme-form-floating">
                            <input id="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <label for="email">Email</label>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="col-12">
                        <div class="form-floating theme-form-floating">
                            <input id="password" class="form-control" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                            <label for="password">Password</label>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="col-12">
                        <div class="forgot-box d-flex justify-content-between align-items-center">
                            <div class="form-check remember-box ps-0">
                                <input id="remember_me" type="checkbox" class="checkbox_animated check-box" name="remember">
                                <label for="remember_me" class="inline-flex items-center">
                                    Remember me
                                </label>
                            </div>
                            <div>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <p>New user? <a href="#">Sign Up</a></p>
                            <button type="submit" class="btn btn-animation">
                                Log In
                            </button>
                        </div>
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

