<section class="section-box why_choose mt-95 pt-90 mb-20">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Why choose us</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">You will find
                your ideal
                candidates you’r looking for!</p>
        </div>
        <div class="mt-70 mb-95">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box-step step-1">
                        <h1 class="number-element">
                            <i class="{{ $whyChooseUs->icon_one }}"></i>
                        </h1>
                        <h4 class="mb-20">{{ $whyChooseUs->title_one }}</h4>
                        <p class="font-lg color-text-paragraph-2">{{ $whyChooseUs->title_two }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box-step step-2">
                        <h1 class="number-element">
                            <i class="{{ $whyChooseUs->icon_two }}"></i>
                        </h1>
                        <h4 class="mb-20">{{ $whyChooseUs->title_two }}</h4>
                        <p class="font-lg color-text-paragraph-2">{{ $whyChooseUs->subtitle_two }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box-step border-0">
                        <h1 class="number-element">
                            <i class="{{ $whyChooseUs->icon_three }}"></i>
                            {{-- <img src="{{ asset('frontend/assets/imgs/template/icons/whu_choose_icon_3.png') }}"
                                alt="choose"> --}}
                        </h1>
                        <h4 class="mb-20">{{ $whyChooseUs->title_three }}</h4>
                        <p class="font-lg color-text-paragraph-2">{{ $whyChooseUs->title_three }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
