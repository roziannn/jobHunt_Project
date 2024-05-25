@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Blog</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.candidate_dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Basic</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Experience & Education</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Account Settings</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @include('frontend.candidate_dashboard.profile.sections.basic-section')
                        @include('frontend.candidate_dashboard.profile.sections.profile-section')

                        {{-- <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <form action="{{ route('company.profile.account-info') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">User Name *</label>
                                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                    type="text" name="name" value="{{ auth()->user()->name }}">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Email *</label>
                                                <input
                                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    type="text" name="email" value="{{ auth()->user()->email }}">
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-default btn-shadow">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <form action="{{ route('company.profile.password-update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Password *</label>
                                                <input
                                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                    type="password" name="password" id="">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Confirm Password *</label>
                                                <input
                                                    class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                                    type="password" name="password_confirmation"
                                                    id="password_confirmation">
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-default btn-shadow">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.country').on('change', function() {

                let country_id = $(this).val();

                $('.city').html("");

                $.ajax({
                    method: 'GET',
                    url: '{{ route('get-states', ':id') }}'.replace(":id", country_id),
                    data: {},
                    success: function(response) {
                        let html = '';
                        //looping the response -> which the State from country_id
                        $.each(response, function(index, value) {
                            html += `<option value="${value.id}">${value.name}</option>`
                        });

                        $('.state').html(html);
                    },
                    error: function(xhr, status, error) {}
                })
            })

            $('.state').on('change', function() {

                let state_id = $(this).val();

                $.ajax({
                    method: 'GET',
                    url: '{{ route('get-cities', ':id') }}'.replace(":id", state_id),
                    data: {},
                    success: function(response) {
                        let html = '';
                        //looping the response -> which the State from country_id
                        $.each(response, function(index, value) {
                            html += `<option value="${value.id}">${value.name}</option>`
                        });

                        $('.city').html(html);
                    },
                    error: function(xhr, status, error) {}
                })
            })
        })
    </script>
@endpush
