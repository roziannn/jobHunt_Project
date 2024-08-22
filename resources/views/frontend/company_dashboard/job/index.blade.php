@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Jobs</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Jobs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.company_dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Jobs</h4>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card-header-form">
                                        <form action="{{ route('company.jobs.index') }}" method="GET">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="search" value="{{ request('search') }}">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" style="height: 50px;"><i
                                                            class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <a href="{{ route('company.jobs.create') }}" class="btn btn-primary"><i
                                            class="fas fa-plus-circle"></i>
                                        Create New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 270px;">Job</th>
                                        <th>Category/Role</th>
                                        <th>Salary</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                    <tbody>
                                        @foreach ($jobs as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <b> {{ $item->title }}</b>
                                                            <br>
                                                            <span>{{ $item->company?->name }} -
                                                                {{ $item->jobType->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <b>
                                                            {{ $item->category?->name }}
                                                        </b>
                                                        <br>
                                                        <span>{{ $item->jobRole?->name }}</span>
                                                    </div>
                                                <td>
                                                    @if ($item->salary_mode === 'range')
                                                        <b> {{ $item->min_salary }} -
                                                            {{ $item->max_salary }}
                                                            {{ config('settings.site_default_currency') }}</b>
                                                        <br>
                                                        <span>{{ $item->salaryType?->name }}</span>
                                                    @elseif ($item->salary_mode === 'custom')
                                                        <b>{{ $item->custom_salary }}</b>
                                                        <br>
                                                        <span>{{ $item->salaryType?->name }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ formatDate($item->deadline) }}</td>
                                                <td>
                                                    @if ($item->status === 'pending')
                                                        <span class="badge bg-warning">Pending</span>
                                                    @elseif ($item->deadline > date('Y-m-d'))
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">Experied</span>
                                                    @endif
                                                </td>
                                                <td><a href="{{ route('company.jobs.edit', $item->id) }}"
                                                        class="me-3 text-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('company.jobs.destroy', $item->id) }}"
                                                        class="text-danger delete-item"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                @if ($jobs->hasPages())
                                    {{ $jobs->withQueryString()->links() }}
                                @endif
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection