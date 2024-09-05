@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Job Location</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Locations</h4>
                    <div class="card-header-form">

                    </div>
                    <a href="{{ route('admin.job-location.create') }}" class="btn btn-primary"><i
                            class="fas fa-plus-circle"></i> Create New</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Image</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @forelse ($locations as $item)
                                    <tr>
                                        <td><img src="{{ asset($item->image) }}" ;
                                                style="height:50px; width:100px; object-fit:cover" alt=""></td>
                                        <td>{{ $item->country->name }} </td>
                                        <td>
                                            <span class="badge badge-primary">{{ $item->status }}</span>
                                        </td>
                                        <td><a href="{{ route('admin.job-location.edit', $item->id) }}"
                                                class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.job-location.destroy', $item->id) }}"
                                                class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No result found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        @if ($locations->hasPages())
                            {{ $locations->withQueryString()->links() }}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
