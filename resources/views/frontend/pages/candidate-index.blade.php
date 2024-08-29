@extends('frontend.layouts.master')

@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Candidates</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Candidates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="content-page">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar-shadow none-shadow mb-30">
                            <div class="sidebar-filters">
                                <form action="{{ route('candidates.index') }}" method="GET">
                                    <div class="filter-block mb-30">
                                        <div class="filter-block head-border mb-30">
                                            <h5>Advance Filter <a class="link-reset" href="#">Reset</a></h5>
                                        </div>
                                        <div class="filter-block mb-30">
                                            <div class="form-group select-style">
                                                <label for="">Skills</label>
                                                <select name="skills[]" multiple
                                                    class="form-control form-icons select-active">
                                                    <option value="">All</option>
                                                    @foreach ($skills as $item)
                                                        <option @selected(request()->has('skills') ? in_array($item->slug, request()->skills) : false) value="{{ $item->slug }}">
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block mb-20">
                                        <h5 class="medium-heading mb-15">Experiences</h5>
                                        <div class="form-group">
                                            <ul class="list-checkbox">
                                                <li>
                                                    <label class="d-flex">
                                                        <input type="radio" name="experience" class="x-radio"
                                                            value=""><span class="text-small">All</span>
                                                    </label>
                                                </li>
                                                @foreach ($experiences as $item)
                                                    <li>
                                                        <label class="d-flex">
                                                            <input type="radio" @checked($item->id == request()->experience)
                                                                name="experience" class="x-radio"
                                                                value="{{ $item->id }}"><span
                                                                class="text-small">{{ $item->name }}</span>
                                                        </label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <button class="submit btn btn-default mt-10 rounded-1 w-100"
                                                type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            @forelse ($candidates as $candidate)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left d-flex">
                                            <div class="card-grid-2-image-rd online"><a
                                                    href="{{ route('candidates.show', $candidate?->slug) }}">
                                                    <figure><img alt="joblist" src="{{ asset($candidate?->image) }}">
                                                    </figure>
                                                </a></div>
                                            <div class="card-profile pt-10">
                                                <a href="{{ route('candidates.show', $candidate?->slug) }}">
                                                    <h5>{{ $candidate?->full_name }}</h5>
                                                </a>
                                                <span class="font-xs color-text-mutted">{{ $candidate?->title }}</span>
                                                <div class="rate-reviews-small pt-5">
                                                    @if ($candidate->status === 'available')
                                                        <p class="font-sm color-text-paragraph-2"><b>I am
                                                                available</b></p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                                <div class="text-start">
                                                    @foreach ($candidate->skills as $candidateSkill)
                                                        @if ($loop->index <= 5)
                                                            <a class="btn btn-tags-sm mb-10 mr-5"
                                                                href="">{{ $candidateSkill->skill->name }}</a>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="employers-info align-items-center justify-content-center mt-15">
                                                <div class="row">
                                                    <div class="col-6"><span class="d-flex align-items-center"><i
                                                                class="fi-rr-marker mr-5 ml-0"
                                                                style="font-size: 15px;"></i><span
                                                                class="font-sm color-text-mutted">
                                                                {{ $candidate?->candidateCountry->name }}</span></span>
                                                    </div>
                                                    <div class="col-6 d-flex justify-content-end align-items-center">
                                                        <span class="font-sm">
                                                            <a href="{{ route('candidates.show', $candidate?->slug) }}"
                                                                class="text-primary">View Resume</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h5 class="text-center">No data found.</h5>
                            @endforelse

                            <div class="col-12">
                                <div class="paginations mt-35">
                                    <nav class="d-inline-block">
                                        @if ($candidates->hasPages())
                                            {{ $candidates->withQueryString()->links() }}
                                        @endif
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


<style>
    .employers-info {
        padding: 0;
    }

    .col-6.d-flex.justify-content-end.align-items-center {
        padding-right: 0;
    }

    .col-6.d-flex.justify-content-end.align-items-center a {
        margin-right: 0;
    }
</style>
