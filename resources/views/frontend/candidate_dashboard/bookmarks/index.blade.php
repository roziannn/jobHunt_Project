@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Job Bookmarks</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Job Bookmarks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.candidate_dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <h4 class="mb-3">Bookmarks</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Job</th>
                                    <th>Salary</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bookmarks as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img class="me-3" style="width: 50px; height:50px; object-fit:cover"
                                                    src="{{ asset($item->job->company?->logo) }}" alt="">
                                                <br>
                                                <div>
                                                    <h6>{{ $item->job->title }} </h6>
                                                    <b>
                                                        {{ $item->job->company?->companyCountry->name }}</b>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->job->salary_mode == 'range')
                                                {{ $item->job->min_salary }} - {{ $item->job->max_salary }}
                                                {{ config('settings.site_default_currency') }}
                                            @else
                                                {{ $item->job->custom_salary }}
                                            @endif
                                        </td>
                                        <td>{{ formatDate($item->created_at) }}</td>
                                        <td>
                                            @if ($item->job->deadline < date('Y-m-d'))
                                                <span class="badge bg-danger">Experied</span>
                                            @else
                                                <span class="badge bg-success">Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->job->deadline < date('Y-m-d'))
                                                <a href="javascript:;" class="btn-sm btn btn-secondary"><i
                                                        class="fas fa-eye" aria-hidden="true"></i></a>
                                            @else
                                                <a href="{{ route('jobs.show', $item->job->slug) }}"
                                                    class="btn-sm btn btn-primary"><i class="fas fa-eye"
                                                        aria-hidden="true"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center"> No result found!. </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <nav class="d-inline-block">
                    @if ($bookmarks->hasPages())
                        {{ $bookmarks->withQueryString()->links() }}
                    @endif
                </nav>
            </div>
        </div>
    </section>
@endsection
