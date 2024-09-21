@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Roles</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Roles</h4>
                    <div class="card-header-form">
                        <form action="{{ route('admin.role.index') }}" method="GET">
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
                    <a href="{{ route('admin.role.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                        Create New</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Role Name</th>
                                <th>Permissions</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($roles as $item)
                                    <tr>
                                        <td>{{ $item->name }} </td>
                                        <td>
                                            @foreach ($item->permissions as $permission)
                                                <span class="badge bg-primary text-light m-1">{{ $permission->name }}</span>
                                            @endforeach

                                        </td>
                                        <td><a href="{{ route('admin.role.edit', $item->id) }}"
                                                class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.role.destroy', $item->id) }}"
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
                        {{-- @if ($roles->hasPages())
                            {{ $roles->withQueryString()->links() }}
                        @endif --}}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
