@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Job Posts</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Jobs</h4>
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
                    <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                        Create New</a>
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
                                @foreach ($jobs as $item)
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
                                                    <span>{{ $item->company?->name }} - {{ $item->jobType->name }}</span>
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
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.post_status').on('change', function() {
                let id = $(this).data('id');
                $.ajax({
                    method: 'POST',
                    url: '{{ route('admin.job-status.update', ':id') }}'.replace(":id", id),
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.message == 'success') {
                            window.location.reload();
                        }
                    },
                    error: function(xhr, status, error) {

                    }
                })
            })
        });
    </script>
@endpush
