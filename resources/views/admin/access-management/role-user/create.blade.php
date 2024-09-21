@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Role users</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.role-user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control {{ hasError($errors, 'name') }}" name="name"
                                value="{{ old('name') }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control {{ hasError($errors, 'email') }}" name="email"
                                value="{{ old('email') }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control {{ hasError($errors, 'password') }}" name="password"
                                value="{{ old('password') }}">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control {{ hasError($errors, 'password_confirmation') }}"
                                name="password_confirmation" value="{{ old('password_confirmation') }}">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control {{ hasError($errors, 'role') }}">
                                <option value="">Select a Role</option>
                                @foreach ($roles as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
