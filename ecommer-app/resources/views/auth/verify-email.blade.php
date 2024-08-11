@extends('layouts.frontend_master')

@push('css')
    <style>
        .resend-btn {
            background-color: #dddddd;
            border: none;
            color: black;
            padding: 12px 24px;
            border-radius: 3px;
            font-weight: 500;
            transition: all ease-in-out .5s;
        }

        .resend-btn:hover {
            opacity: .8;
        }

        .verify-email {
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
              <h2 class="mb-2">Verify your account</h2>
              <nav>
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">
                      <i class="fa-solid fa-house"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item active">Verify Email</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- verify email section start -->
    <main class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 mx-auto">
                    <div class="input-box">
                        <div class="col-12">
                            <div class="mb-4 verify-email">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <strong class="mb-4 text-success">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </strong>
                            @endif
                            
                            <div class="mt-4 d-flex align-items-center justify-content-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <div>
                                        <button class="resend-btn" type="submit" >Resend Verification Email</button>
                                    </div>
                                </form>
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-animation">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- verify email section end -->
</div>
@endsection

