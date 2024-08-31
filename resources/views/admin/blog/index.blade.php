@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Blogs</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Blogs</h4>
                    <div class="card-header-form">
                        <form action="{{ route('admin.blogs.index') }}" method="GET">
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
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                        Create New</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Featured</th>
                                <th>Status</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($blogs as $item)
                                    <tr>
                                        <td>{{ $item->title }} </td>
                                        <td>{{ $item->slug }} </td>
                                        <td>
                                            @if ($item->featured == 1)
                                                <span class="badge bg-success text-white">Yes</span>
                                            @else
                                                <span class="badge bg-danger text-white">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge bg-success text-white">Active</span>
                                            @else
                                                <span class="badge bg-danger text-white">Inactive</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('admin.blogs.edit', $item->id) }}"
                                                class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.blogs.destroy', $item->id) }}"
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
                        @if ($blogs->hasPages())
                            {{ $blogs->withQueryString()->links() }}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
