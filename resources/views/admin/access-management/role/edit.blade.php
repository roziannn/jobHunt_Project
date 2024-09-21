@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Role and Permissions</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Role</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control {{ hasError($errors, 'name') }}" name="name"
                                value="{{ old('name', $role->name) }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        @foreach ($permissions as $groupname => $permission)
                            <div class="form-group">
                                <h6>{{ $groupname }}</h6>
                                <div class="row">
                                    @foreach ($permission as $item)
                                        <div class="col-md-2">
                                            <label class="custom-switch mt-2">
                                                <input {{ in_array($item->name, $rolePermissions) ? 'checked' : '' }}
                                                    type="checkbox" value="{{ $item->name }}" type="checkbox"
                                                    name="permission[]" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">{{ $item->name }}</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
