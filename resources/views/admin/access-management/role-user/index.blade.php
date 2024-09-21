@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Role Users</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Users</h4>
                    <div class="card-header-form">
                        <form action="{{ route('admin.role-user.index') }}" method="GET">
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
                    <a href="{{ route('admin.role-user.create') }}" class="btn btn-primary"><i
                            class="fas fa-plus-circle"></i>
                        Create New</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($admins as $item)
                                    <tr>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->email }} </td>
                                        <td>{{ $item->getRoleNames()->first() }} </td>
                                        <td>
                                            @if ($item->getRoleNames()->first() !== 'Super Admin')
                                                <a href="{{ route('admin.role-user.edit', $item->id) }}"
                                                    class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin.role-user.destroy', $item->id) }}"
                                                    class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        {{-- @if ($roles->hasPages())
                            {{ $roles->withQueryString()->links() }}
                        @endif --}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
