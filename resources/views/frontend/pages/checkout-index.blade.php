@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Check Out</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Check Out</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-90">
        <div class="container">
            <div class="max-width-price">
                <div class="block-pricing mt-70">
                    <div class="row">
                        <div class="col-md-8" data-wow-delay=".1s">
                            <h5 class="">Choose Your Payment Method</h5>
                            <div class="row pt-40">
                                @if (config('gatewaySettings.paypal_status') === 'active')
                                    <div class="col-md-3">
                                        <a href="{{ route('company.paypal.payment') }}"><img class=""
                                                style="width: 200px;border-radius: 5px;border: 3px solid #1ca774;
                                            height: 114px; object-fit: contain; padding:10px;"
                                                src="{{ asset('default_uploads/paypal.jpg') }}" alt=""></a>
                                    </div>
                                @endif
                                @if (config('gatewaySettings.stripe_status') === 'active')
                                    <div class="col-md-3">
                                        {{-- <a href=""><img class=""
                                            style="width: 200px;border-radius: 5px;border: 3px solid #1ca774;"
                                            src="https://placehold.co/600x400" alt=""></a> --}}
                                        <a href="{{ route('company.stripe.payment') }}"><img class=""
                                                style="width: 200px;border-radius: 5px;border: 3px solid #1ca774;
                                            height: 114px; object-fit: contain; padding:10px;"
                                                src="{{ asset('default_uploads/stripe.png') }}" alt=""></a>
                                    </div>
                                @endif
                                @if (config('gatewaySettings.razorpay_status') === 'active')
                                    <div class="col-md-3">
                                        <a href="{{ route('company.razorpay-redirect') }}"><img class=""
                                                style="width: 200px;border-radius: 5px;border: 3px solid #1ca774;
                                                height: 114px; object-fit: contain;"
                                                src="{{ asset('default_uploads/razorpay.png') }}" alt=""></a>
                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-4" data-wow-delay=".1s">
                            <div class="box-pricing-item">
                                <h3>{{ $plan->label }}</h3>
                                <div class="box-info-price"><span
                                        class="text-price color-brand-2">${{ $plan->price }}</span>
                                </div>
                                <ul class="list-package-feature">
                                    <li>{{ $plan->job_limit }} job limit</li>
                                    <li>{{ $plan->featured_job_limit }} featured job limit</li>
                                    <li>{{ $plan->highlight_job_limit }} highlight job limit</li>
                                    @if ($plan->profile_verified)
                                        <li>Profile verified</li>
                                    @else
                                        <li><strike> Profile verified </strike></li>
                                    @endif
                                </ul>
                                <div><a class="btn btn-border" href="{{ route('checkout.index', $plan->id) }}">Choose
                                        plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
