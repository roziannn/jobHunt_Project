@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Company Profile</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="{{ url('/') }}">Home</a></li>
                            <li>Company Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box-2">
        <div class="container">
            <div class="banner-hero banner-image-single"><img src="{{ asset($company?->banner) }}"
                    style="height: 374px;
            object-fit:cover" alt="joblist"></div>
            <div class="box-company-profile">
                <div class="row mt-10">
                    <div class="col-lg-8 col-md-12">
                        <div>
                            <img src="{{ asset($company?->logo) }}"style="width:100px;height:100px;object-fit:cover"
                                alt="">
                        </div>
                        <h5 class="f-18">{{ $company?->name }} <span
                                class="card-location font-regular ml-20">{{ $company?->companyCountry->name }}</span></h5>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-apply btn-apply-big"
                            href="#open-positions">Open Positions</a></div>
                </div>
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
                            <div class="tab-pane fade show active" id="tab-about" role="tabpanel"
                                aria-labelledby="tab-about">
                                <h4>About Us</h4>
                                <p>{!! $company?->bio !!}</p>

                                <h4>Company Vision</h4>
                                <p>{!! $company?->vision !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-related-job content-page" id="open-positions">
                        <h5 class="mb-30">Open Jobs</h5>
                        <div class="box-list-jobs display-list">
                            @forelse ($openJobs as $item)
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="{{ $item->company?->logo }}"
                                                            alt="joblist"></div>
                                                    <div class="right-info"><a class="name-job"
                                                            href="{{ route('companies.show', $item->company?->slug) }}">{{ $item->company?->name }}</a><span
                                                            class="location-small">{{ formatLocation($item->company->companyCountry?->name, $item->company->companyState?->name) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30">
                                                    @if ($item->featured)
                                                        <a class="btn btn-grey-small mr-5 featured"
                                                            href="javascript:;">Featured</a>
                                                    @endif
                                                    @if ($item->highlight)
                                                        <a class="btn btn-grey-small mr-5 highlight"
                                                            href="javascript:;">Highlight</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="{{ route('jobs.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h4>
                                            <div class="mt-5">
                                                <span class="card-briefcase">{{ $item->jobType->name }}</span>
                                                <span class="card-briefcase">{{ $item->jobExperience->name }}</span>
                                                <span
                                                    class="card-time"><span>{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                            {{-- <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing
                                                elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> --}}
                                            <div class="pl-3 mb-15 mt-30">
                                                @foreach ($item->skills as $jobSkill)
                                                    @if ($loop->index < 6)
                                                        <a class="btn btn-grey-small mr-5 job-skill"
                                                            href="javascript:;">{{ $jobSkill->skill->name }}</a>
                                                    @elseif ($loop->index == 7)
                                                        <a class="btn btn-grey-small mr-5 job-skill"
                                                            href="javascript:;">More..</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    @if ($item->salary_mode == 'range')
                                                        <div class="col-lg-7 col-7">
                                                            <span class="card-text-price">{{ $item->min_salary }} -
                                                                {{ $item->max_salary }}
                                                                {{ config('settings.site_default_currency') }} </span>
                                                            <span class="text-muted"></span>
                                                        </div>
                                                    @else
                                                        <div class="col-lg-7 col-7">
                                                            <span class="card-text-price">{{ $item->custom_salary }}
                                                            </span>
                                                            {{-- <span class="text-muted">/ {{ $item->job }}</span> --}}
                                                        </div>
                                                    @endif
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn">
                                                            <i class="far fa-bookmark"></i>
                                                            {{-- <i class="far fa-bookmark"></i> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h5 class="text-center">No open jobs found.</h5>
                            @endforelse
                        </div>
                        <div class="paginations">
                            <nav class="d-inline-block">
                                @if ($openJobs->hasPages())
                                    {{ $openJobs->withQueryString()->links() }}
                                @endif
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-border">
                        <div class="sidebar-heading">
                            <div class="avatar-sidebar">
                                <div class="sidebar-info pl-0"><span
                                        class="sidebar-company">{{ $company?->name }}</span><span
                                        class="card-location">{{ $company?->companyCountry->name }}</span></div>
                            </div>
                        </div>
                        <div class="sidebar-list-job">
                            <div class="box-map">
                                {!! $company?->map_link !!}
                            </div>
                        </div>
                        <div class="sidebar-list-job">
                            <ul>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Industry
                                            Type</span><strong class="small-heading">
                                            {{ $company?->industyType->name }}</strong></div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Organization
                                            Type</span><strong
                                            class="small-heading">{{ $company?->organizationType->name }}</strong></div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi fi-rr-user"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Team Size</span><strong
                                            class="small-heading">{{ $company?->teamSize->name }}</strong></div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                    <div class="sidebar-text-info"><span class="text-description">Establish Date
                                        </span><strong
                                            class="small-heading">{{ formatDate($company?->establishment_date) }}</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-list-job">
                            <ul class="ul-disc">
                                <li>{{ $company->address }}
                                    {{ $company->companyCity?->name ? ', ' . $company->companyCity?->name : '' }}
                                    {{ $company->companyState?->name ? ', ' . $company->companyState?->name : '' }}
                                    {{ $company->companyCountry?->name ? ', ' . $company->companyCountry?->name : '' }}
                                </li>
                                <li>Phone: {{ $company?->phone }}</li>
                                <li>Email: {{ $company?->email }}</li>
                                <li>Web: <a href="{{ $company?->website }}">{{ $company?->website }}</a></li>
                            </ul>
                            <div class="mt-30"><a class="btn btn-send-message"
                                    href="mailto:{{ $company?->email }}">Send Message</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
