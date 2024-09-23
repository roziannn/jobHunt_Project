@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Pricing and Packages</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Pricing and Packages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-90">
        <div class="container">
            <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Pricing Table</h2>
            <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">Choose The Best
                Plan That&rsquo;s For You</div>
            <div class="max-width-price">
                <div class="block-pricing mt-70">
                    <div class="row">
                        @forelse ($plans as $item)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeInUp">
                                <div class="box-pricing-item">
                                    <h3>{{ $item->label }}</h3>
                                    <div class="box-info-price"><span
                                            class="text-price color-brand-2">${{ $item->price }}</span></div>
                                    <ul class="list-package-feature">
                                        <li>{{ $item->job_limit }} job limit</li>
                                        <li>{{ $item->featured_job_limit }} featured job limit</li>
                                        <li>{{ $item->highlight_job_limit }} highlight job limit</li>
                                        @if ($item->profile_verified)
                                            <li>Profile verified</li>
                                        @else
                                            <li><strike> Profile verified </strike></li>
                                        @endif
                                    </ul>
                                    <div><a class="btn btn-border" href="{{ route('checkout.index', $item->id) }}">Choose
                                            plan</a></div>
                                </div>
                            </div>
                        @empty
                            <div class="my-5">
                                <h5 class="text-center">No data found!.</h5>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
