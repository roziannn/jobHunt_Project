<section class="section-box recruiters mt-60">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Our Recruiters</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your
                next career
                move, freelance gig, or internship</p>
        </div>
    </div>
    <div class="container">
        <div class="box-swiper mt-50">
            <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
                <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                        @foreach ($companies as $item)
                            <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a
                                    href="{{ route('companies.show', $item->slug) }}">
                                    <div class="item-logo">
                                        <div class="image-left"><img alt="joblist" src="{{ asset($item->logo) }}">
                                        </div>
                                        <div class="text-info-right">
                                            <h4>{{ $item->name }}</h4>
                                        </div>
                                        <div class="text-info-bottom mt-5"><span
                                                class="font-xs color-text-mutted icon-location">
                                                {{ $item->companyCountry?->name }}</span><span
                                                class="font-xs color-text-mutted float-end mt-5">{{ $item->jobs_count }}
                                                <span>
                                                    Open Jobs</span></span></div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
    </div>
</section>
