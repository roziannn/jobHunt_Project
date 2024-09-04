@extends('frontend.layouts.master')
@section('contents')
    @include('frontend.home.sections.hero-section')

    <div class="mt-100"></div>

    @include('frontend.home.sections.category-section')

    @include('frontend.home.sections.featured-job-section')

    @include('frontend.home.sections.why-choose-us-section')

    {{-- @include('frontend.home.sections.learn-more-section') --}}

    {{-- @include('frontend.home.sections.counter-section') --}}

    {{-- @include('frontend.home.sections.top-recruiters-section') --}}

    @include('frontend.home.sections.pricing-plan-section')

    {{-- @include('frontend.home.sections.job-by-location-section') --}}

    {{-- @include('frontend.home.sections.review-section') --}}

    {{-- @include('frontend.home.sections.blog-section') --}}
@endsection
