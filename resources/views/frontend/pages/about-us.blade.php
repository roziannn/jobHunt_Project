@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">About Us</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{ url('/') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="post-loop-grid">
            <div class="container">
                <div class="text-center">
                    <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">About Our Company</h2>
                    <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto">
                        {{ config('settings.site_name') }} is your go-to online platform connecting job seekers with
                        exciting opportunities. We're dedicated to
                        bridging the gap between talent and employers, offering an experience for both.</p>
                </div>

                <div class="row justify-content-between mt-70">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h3 class="mt-15">{{ $about?->title }}</h3>
                        <div class="mt-20">
                            <p class="font-md color-text-paragraph mt-20">{!! $about?->description !!}</p>
                        </div>
                        @if ($about?->url)
                            <div class="mt-30"><a class="btn btn-default" href="{{ $about?->url }}">Read More</a>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12"><img src="{{ asset($about?->image) }}" alt="joxBox">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-box mt-80">
        <div class="post-loop-grid">
            <div class="container">
                <div class="text-center">
                    <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
                    <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Meet Our Team</h2>
                    <p class="font-sm color-text-paragraph w-lg-50 mx-auto wow animate__animated animate__fadeInUp">Lorem
                        ipsum
                        dolor sit amet, consectetur adipiscing elit. Quisque ligula ante, dictum non aliquet eu, dapibus ac
                        quam.
                        Morbi vel ante viverra orci tincidunt tempor eu id ipsum. Sed consectetur, risus a blandit tempor,
                        velit
                        magna pellentesque risus, at congue tellus dui quis nisl.</p>
                </div>
                <div class="row mt-70">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team1.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Arlene McCoy</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team2.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Floyd Miles</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">UI/UX Designer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>28</span><span>)</span></span>
                                </div>
                                <span class="card-location">Chicago, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team3.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Devon Lane</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team4.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Jerome Bell</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team5.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Theresa</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team6.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Cameron</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team7.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Jacob Jones</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                        <div class="card-grid-4 text-center hover-up">
                            <div class="image-top-feature">
                                <figure><img alt="joblist" src="assets/imgs/page/about/team2.png"></figure>
                            </div>
                            <div class="card-grid-4-info">
                                <h5 class="mt-10">Court Henry</h5>
                                <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                                <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span><img src="assets/imgs/template/icons/star.svg"
                                            alt="joblist"></span><span
                                        class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span>
                                </div>
                                <span class="card-location">New York, US</span>
                                <div class="text-center mt-30 team_social_link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('frontend.home.sections.review-section');

    <section class="section-box mt-50 mb-50">
        <div class="container">
            <div class="text-start">
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
                <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news,
                    updates
                    and tips</p>
            </div>
        </div>
        <div class="container">
            <div class="mt-50">
                <div class="box-swiper style-nav-top">
                    <div class="swiper-container swiper-group-3 swiper">
                        <div class="swiper-container swiper-group-3 swiper">
                            <div class="swiper-wrapper pb-70 pt-5">
                                @foreach ($blogs as $item)
                                    <div class="swiper-slide">
                                        <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                            <div class="text-center card-grid-3-image"><a
                                                    href="{{ route('blogs.show', $item->slug) }}">
                                                    <figure><img alt="joblist" src="{{ asset($item->image) }}">
                                                    </figure>
                                                </a></div>
                                            <div class="card-block-info">
                                                <h5><a href="{{ route('blogs.show', $item->slug) }}">{{ $item->title }}</a>
                                                </h5>
                                                <p class="mt-10 color-text-paragraph font-sm">
                                                    {{ Str::limit(strip_tags($item->description), 100, '...') }}</p>
                                                <div class="card-2-bottom mt-20">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-6">
                                                            <div class="d-flex">
                                                                <div class="info-right-img"><span
                                                                        class="font-sm font-bold color-brand-1 op-70">{{ $item->author->name }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 text-end col-6"><span
                                                                class="color-text-paragraph-2 font-xs">{{ formatDate($item->created_at) }}
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
