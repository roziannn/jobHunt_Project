@extends('admin.auth.layouts.auth-master')
@section('contents')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/img/stisla-fill.svg" alt="logo" width="100"
                            class="shadow-light rounded-circle" />
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Reset Password</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.password.store') }}">
                                @csrf
                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                        value="{{ old('email', $request->email) }}" tabindex="1" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>


                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input id="password" type="password"
                                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        data-indicator="pwindicator" name="password" tabindex="2" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>


                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password"
                                        class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                        name="password_confirmation" tabindex="2" required />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; JobHunt {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
