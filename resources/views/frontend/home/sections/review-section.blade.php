<section class="section-box mt-85">
    <div class="section-box wow animate__animated animate__fadeIn">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">What Say Our Clients
                </h2>
                <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Thousands of
                    employee get
                    their ideal jobs<br class="d-none d-lg-block">and feed back to us!</p>
            </div>
            <div class="box-swiper mt-50">
                <div class="swiper-container swiper-group-4-border swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                        @foreach ($reviews as $item)
                            <div class="swiper-slide hover-up">
                                <div class="card-review-1">
                                    <div class="image-review">
                                        <img src="{{ asset($item->image) }}" alt="joblist">
                                        <div class="review-name">
                                            <h5>{{ $item->name }}</h5><span class="font-xs">{{ $item->title }}</span>
                                        </div>
                                    </div>
                                    <div class="review-info">
                                        <div class="review-comment">{{ $item->review }}</div>
                                        <div class="review-rating">
                                            @for ($i = 1; $i <= $item->rating; $i++)
                                                <img src="{{ asset('frontend/assets/imgs/template/icons/star.svg') }}"
                                                    alt="joblist">
                                            @endfor

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination swiper-pagination-style-border"></div>
                </div>
            </div>
        </div>
    </div>
</section>
