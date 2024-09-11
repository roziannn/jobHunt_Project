<section class="section-box subscription_box">
    <div class="container">
        <div class="box-newsletter">
            <div class="newsletter_textarea">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-md-newsletter">Subscribe our newsletter</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-form-newsletter">
                            <form class="form-newsletter">
                                @csrf
                                <input class="input-newsletter" type="text" value=""
                                    placeholder="Enter your email here" name="email">
                                <button type="submit"
                                    class="btn btn-default font-heading newsletter-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer pt-165">
    <div class="container">
        <div class="row justify-content-between">
            @php
                $footerDetails = \App\Models\Footer::first();
                $footerIcons = \App\Models\SocialIcon::all();
                $footerOne = \Menu::getByName('Footer One'); //return array
                $footerTwo = \Menu::getByName('Footer Two'); //return array
                $footerThree = \Menu::getByName('Footer Three'); //return array
                $footerFour = \Menu::getByName('Footer Four'); //return array
            @endphp
            <div class="footer-col-1 col-md-3 col-sm-12">
                <a class="footer_logo" href="index.html">
                    <img alt="joblist" src="{{ asset($footerDetails?->logo) }}">
                </a>
                <div class="mt-20 mb-20 font-xs color-text-paragraph-2">{{ $footerDetails?->details }}</div>
                <div class="footer-social">
                    @foreach ($footerIcons as $item)
                        <a class="icon-socials icon-facebook" href="{{ $item->url }}"><i
                                class="{{ $item->icon }}"></i></a>
                    @endforeach
                </div>
            </div>

            <div class="footer-col-2 col-md-2 col-xs-6">
                <h6 class="mb-20">Resources</h6>
                <ul class="menu-footer">
                    @foreach ($footerOne as $item)
                        <li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-col-3 col-md-2 col-xs-6">
                <h6 class="mb-20">Community</h6>
                <ul class="menu-footer">
                    @foreach ($footerTwo as $item)
                        <li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-col-4 col-md-2 col-xs-6">
                <h6 class="mb-20">Quick links</h6>
                <ul class="menu-footer">
                    @foreach ($footerThree as $item)
                        <li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-col-5 col-md-2 col-xs-6">
                <h6 class="mb-20">More</h6>
                <ul class="menu-footer">
                    @foreach ($footerFour as $item)
                        <li><a href="{{ $menu['link'] }}">{{ $menu['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="footer-bottom mt-50">
            <div class="row">
                <div class="col-md-6"><span
                        class="font-xs color-text-paragraph">{{ $footerDetails?->copyright }}</span></div>
                <div class="col-md-6 text-md-end text-start">
                    {{-- <div class="footer-social"><a class="font-xs color-text-paragraph" href="#">Privacy
                            Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="#">Terms
                            &amp; Conditions</a><a class="font-xs color-text-paragraph" href="#">Security</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.form-newsletter').on('submit', function(e) {
                e.preventDefault();
                // alert('test');
                let formData = $(this).serialize();
                let button = $('.newsletter-btn');
                $.ajax({
                    method: 'POST',
                    url: '{{ route('newsletter.store') }}',
                    data: formData,
                    beforeSend: function() {
                        button.text('processing...');
                        button.prop('disabled', true);
                    },
                    success: function(response) {
                        button.text("Subscribe");
                        $('.form-newsletter').trigger('reset');
                        button.prop('disabled', false);
                        notyf.success(response.message);

                    },
                    error: function(xhr, status, error) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(index, value) {
                            notyf.error(value[0]);
                        });
                        button.text("Send message")
                        button.prop('disabled', false);
                    }
                })
            })
        })
    </script>
@endpush
