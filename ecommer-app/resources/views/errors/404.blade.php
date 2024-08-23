@extends('layouts.frontend_master')

@section('content')
    {{-- Breadcrumb --}}
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>404 Page</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Custom 404 --}}
    <section class="section-404 section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="image-404">
                        <img src="{{ asset('frontend') }}/assets/images/inner-page/404.png"
                            class="img-fluid blur-up lazyloaded" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="contain-404">
                        <h3 class="text-content">The page you are looking for could not be found. The link to this
                            address may be outdated or we may have moved the since you last bookmarked it.</h3>
                        <a href="{{ route('home') }}" class="btn btn-md text-white theme-bg-color mt-4 mx-auto">Back To Home
                            Screen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
