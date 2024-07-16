@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Candidate Profile</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{ url('/') }}">Home</a></li>
                            <li>Candidate Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box-2">
        <div class="container">
            <div class="banner-hero banner-image-single mt-75"><img src="{{ asset($candidate?->image) }}"
                    style="width:150px; height:150px; object-fit:cover; border-radius:50%;" alt="joblist">
            </div>
            <div class="box-company-profile">
                <div class="row mt-10">
                    <div class="col-lg-8 col-md-12">
                        <h5 class="f-18">{{ $candidate?->full_name }} <span
                                class="card-location font-regular ml-20">{{ $candidate?->candidateCountry->name }}</span>
                        </h5>
                        <p class="mt-0 font-md color-text-paragraph-2 mb-15">{{ $candidate?->title }}</p>
                        <div class="mt-0 mb-15 d-flex flex-wrap align-items-center">
                            <img src="assets/imgs/template/icons/star.svg" alt="joblist">
                            <img src="assets/imgs/template/icons/star.svg" alt="joblist">
                            <img src="assets/imgs/template/icons/star.svg" alt="joblist">
                            <img src="assets/imgs/template/icons/star.svg" alt="joblist">
                            <img src="assets/imgs/template/icons/star.svg" alt="joblist">
                            <span class="font-xs color-text-mutted ml-10">(66)</span>
                            <img class="ml-30" src="assets/imgs/page/candidates/verified.png" alt="joblist">
                        </div>
                    </div>
                    @if ($candidate->cv)
                        <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-download-icon btn-apply btn-apply-big"
                                href="{{ asset($candidate->cv) }}">Download CV</a></div>
                    @endif
                </div>
            </div>
            <div class="box-nav-tabs mt-40 mb-5">
                <ul class="nav" role="tablist">
                    <li><a class="btn btn-border recruitment-icon mr-15 mb-5 active" href="#tab-short-bio"
                            data-bs-toggle="tab" role="tab" aria-controls="tab-short-bio" aria-selected="true">Short
                            Bio</a></li>
                    <li><a class="btn btn-border recruitment-icon mr-15 mb-5" href="#tab-skills" data-bs-toggle="tab"
                            role="tab" aria-controls="tab-skills" aria-selected="false">Skills</a></li>
                    <li><a class="btn btn-border recruitment-icon mb-5" href="#tab-work-experience" data-bs-toggle="tab"
                            role="tab" aria-controls="tab-work-experience" aria-selected="false">Working Experience</a>
                    </li>
                </ul>
            </div>
            <div class="border-bottom pt-10 pb-10"></div>
        </div>
    </section>

    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="content-single">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-short-bio" role="tabpanel"
                                aria-labelledby="tab-short-bio">
                                <h4>About Me</h4>
                                <p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very
                                    passionate and
                                    dedicated to my work. With 20 years experience as a professional a graphic designer, I
                                    have acquired
                                    the skills and knowledge necessary to make your project a success.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet.
                                    Deleniti
                                    asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo
                                    blanditiis iste
                                    eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!</p>
                                <h4>Professional Skills</h4>
                                <div class="row mb-40">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <h6 class="color-text-paragraph-2">Programming</h6>
                                        <div class="box-progress-bar mt-20">
                                            <p class="font-xs color-text-paragraph-2 mb-10">HTML &amp; CSS</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 78%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"><span>78%</span></div>
                                            </div>
                                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Javascript</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-brand-2" role="progressbar" style="width: 88%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <span>88%</span>
                                                </div>
                                            </div>
                                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Database</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 62%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"><span>62%</span></div>
                                            </div>
                                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">React JS</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 92%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"><span>92%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <h6 class="color-text-paragraph-2">Design</h6>
                                        <div class="box-progress-bar mt-20">
                                            <p class="font-xs color-text-paragraph-2 mb-10">Photoshop</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 29%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"><span>29%</span></div>
                                            </div>
                                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Figma</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"><span>20%</span></div>
                                            </div>
                                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Illustrator</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 65%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"><span>65%</span></div>
                                            </div>
                                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">Sketch</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-paragraph-2" role="progressbar"
                                                    style="width: 82%" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"><span>82%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <h4>Work Experience</h4>
                                <ul>
                                    <li>A portfolio demonstrating well thought through and polished end to end customer
                                        journeys</li>
                                    <li>5+ years of industry experience in interactive design and / or visual design</li>
                                    <li>Excellent interpersonal skills</li>
                                    <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
                                    <li>Ability to create highly polished design prototypes, mockups, and other
                                        communication artifacts
                                    </li>
                                    <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals
                                        independently</li>
                                    <li>History of impacting shipping products with your work</li>
                                    <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional
                                        experience
                                    </li>
                                    <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and
                                        Sketch</li>
                                </ul>
                                <h4>Education</h4>
                                <ul>
                                    <li>Necessitatibus quibusdam facilis</li>
                                    <li>Velit unde aliquam et voluptas reiciendis non sapiente labore</li>
                                    <li>Commodi quae ipsum quas est itaque</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                                    <li>Deleniti asperiores blanditiis nihil quia officiis dolor</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab-skills" role="tabpanel" aria-labelledby="tab-skills">
                                <h4>Skills</h4>
                                <p></p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very
                                passionate and
                                dedicated to my work. With 20 years experience as a professional a graphic designer, I have
                                acquired
                                the skills and knowledge necessary to make your project a success.
                                <p></p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet.
                                Deleniti
                                asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo
                                blanditiis iste
                                eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                            </div>
                            <div class="tab-pane fade" id="tab-work-experience" role="tabpanel"
                                aria-labelledby="tab-work-experience">
                                <h4>Work Experiences</h4>
                                <p></p>Hello there! My name is Alan Walker. I am a graphic designer, and I&rsquo;m very
                                passionate and
                                dedicated to my work. With 20 years experience as a professional a graphic designer, I have
                                acquired
                                the skills and knowledge necessary to make your project a success.
                                <p></p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet.
                                Deleniti
                                asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo
                                blanditiis iste
                                eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                            </div>
                        </div>
                    </div>
                    <div class="box-related-job content-page   cadidate_details_list">
                        <h3 class="mb-30">Work History</h3>
                        <div class="box-list-jobs display-list">
                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span
                                        class="flash"></span>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="assets/imgs/brands/brand-6.png"
                                                        alt="joblist"></div>
                                                <div class="right-info"><a class="name-job" href="">Quora
                                                        JSC</a><span class="location-small">New York, US</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                            <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="#">Adobe XD</a><a class="btn btn-grey-small mr-5"
                                                    href="#">Figma</a></div>
                                        </div>
                                    </div>
                                    <div class="card-block-info">
                                        <h4><a href="job-details.html">Senior System Engineer</a></h4>
                                        <div class="mt-5"><span class="card-briefcase">Part time</span><span
                                                class="card-time"><span>5</span><span> days ago</span></span></div>
                                        <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row">
                                                <div class="col-lg-7 col-7"><span class="card-text-price">Status:<span
                                                            class="text-success">Done</span></span></div>
                                                <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now"
                                                        href="job-details.html">View
                                                        Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span
                                        class="flash"></span>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="assets/imgs/brands/brand-7.png"
                                                        alt="joblist"></div>
                                                <div class="right-info"><a class="name-job"
                                                        href="">Nintendo</a><span class="location-small">New York,
                                                        US</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                            <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="#">Adobe XD</a><a class="btn btn-grey-small mr-5"
                                                    href="#">Figma</a></div>
                                        </div>
                                    </div>
                                    <div class="card-block-info">
                                        <h4><a href="job-details.html">Products Manager</a></h4>
                                        <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                class="card-time"><span>6</span><span> days ago</span></span></div>
                                        <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row">
                                                <div class="col-lg-7 col-7"><span class="card-text-price">Status:<span
                                                            class="text-success">Done</span></span></div>
                                                <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now"
                                                        href="job-details.html">View
                                                        Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn"><span
                                        class="flash"></span>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="assets/imgs/brands/brand-8.png"
                                                        alt="joblist"></div>
                                                <div class="right-info"><a class="name-job"
                                                        href="">Periscope</a><span class="location-small">New York,
                                                        US</span></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                            <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5"
                                                    href="#">Adobe XD</a><a class="btn btn-grey-small mr-5"
                                                    href="#">Figma</a></div>
                                        </div>
                                    </div>
                                    <div class="card-block-info">
                                        <h4><a href="job-details.html">Lead Quality Control QA</a></h4>
                                        <div class="mt-5"><span class="card-briefcase">Full time</span><span
                                                class="card-time"><span>6</span><span> days ago</span></span></div>
                                        <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing
                                            elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row">
                                                <div class="col-lg-7 col-7"><span class="card-text-price">Status:<span
                                                            class="text-success">Done</span></span></div>
                                                <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now"
                                                        href="job-details.html">View
                                                        Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paginations mt-60">
                            <ul class="pager">
                                <li><a class="pager-prev" href="#"><i class="fas fa-arrow-left"></i></a></li>
                                <li><a class="pager-number" href="#">1</a></li>
                                <li><a class="pager-number" href="#">2</a></li>
                                <li><a class="pager-number active" href="#">3</a></li>
                                <li><a class="pager-number" href="#">4</a></li>
                                <li><a class="pager-next" href="#"><i class="fas fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-border">
                        <h5 class="f-18">Overview</h5>
                        <div class="sidebar-list-job">
                            <ul>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Experience</span><strong
                                            class="small-heading">12 years</strong></div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Expected
                                            Salary</span><strong class="small-heading">$26k - $30k</strong></div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Language</span><strong
                                            class="small-heading">English, German</strong></div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Education
                                            Level</span><strong class="small-heading">Master Degree</strong></div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-list-job">
                            <ul class="ul-disc">
                                <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                                <li>Phone: (123) 456-7890</li>
                                <li>Email: contact@Evara.com</li>
                            </ul>
                            <div class="mt-30"><a class="btn btn-send-message" href="page-contact.html">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
