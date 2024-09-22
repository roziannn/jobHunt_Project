@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        @if (canAccess(['dashboard analytics']))
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Earnings</h4>
                            </div>
                            <div class="card-body">
                                {{ config('settings.site_currency_icon') }} {{ $totalEarnings }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Candidate</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalCandidate }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Companies</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalCompanies }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Job Post</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalJobs }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Active Job Post</h4>
                            </div>
                            <div class="card-body">
                                {{ $activeJobs }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Experied Job Post</h4>
                            </div>
                            <div class="card-body">
                                {{ $expJobs }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pending Job Post</h4>
                            </div>
                            <div class="card-body">
                                {{ $expJobs }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fab fa-blogger-b"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Article</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalArticle }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (canAccess(['dashboard pending posts']))
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pending Jobs <span class=""></span>(Need Approve)</h4>
                        <div class="card-header-form">
                            <form action="{{ route('admin.jobs.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="search"
                                        value="{{ request('search') }}">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary" style="height: 40px;"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                        Create New</a> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Job</th>
                                    <th>Category/Role</th>
                                    <th>Salary</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                <tbody>
                                    @forelse ($jobs as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="mr-2">
                                                        <img style="width: 42px; height:42px; object-fit:cover;"
                                                            src="{{ asset($item->company->logo) }}" alt="">
                                                    </div>
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
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @elseif($item->deadline > date('Y-m-d'))
                                                    <span class="badge bg-primary text-dark">Active</span>
                                                @else
                                                    <span class="badge bg-danger text-dark">Experied</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- toggle approve post status --}}
                                                <div class="form-group">
                                                    <label class="custom-switch mt-2">
                                                        <input @checked($item->status === 'active') type="checkbox"
                                                            data-id="{{ $item->id }}" name="custom-switch-checkbox"
                                                            class="custom-switch-input post_status">
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td><a href="{{ route('admin.jobs.edit', $item->id) }}"
                                                    class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin.jobs.destroy', $item->id) }}"
                                                    class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">
                                                No pending jobs found.
                                            </td>
                                        </tr>
                                    @endforelse
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
        @endif
    </section>
@endsection
