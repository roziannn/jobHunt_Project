<section class="section-box mt-90">
    <div class="container">
        <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Pricing Plan</h2>
        <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">Choose
            The Best
            Plan That&rsquo;s For You</div>
        <div class="max-width-price">
            <div class="block-pricing mt-70">
                <div class="row">
                    @foreach ($plans as $item)
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
                                        plan</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
