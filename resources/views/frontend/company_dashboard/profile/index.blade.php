@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Company Profile</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Company Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.company_dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Company Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Founding Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Account Settings</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <form action="{{ route('company.profile.company-info') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-image-preview :height="200" :width="200" :source="$companyInfo?->logo" />
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Logo *</label>
                                            <input class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}"
                                                type="file" name="logo" value="">
                                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <x-image-preview :height="200" :width="500" :source="$companyInfo?->banner" />

                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Banner *</label>
                                            <input class="form-control {{ $errors->has('banner') ? 'is-invalid' : '' }}"
                                                type="file" name="banner" value="">
                                            <x-input-error :messages="$errors->get('banner')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Name *</label>
                                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                type="text" name="name" value="{{ $companyInfo?->name }}">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Bio *</label>
                                            <textarea name="bio" class=" {{ $errors->has('bio') ? 'is-invalid' : '' }}">{{ $companyInfo?->bio }}</textarea>
                                            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Vision *</label>
                                            <textarea name="vision" class="{{ $errors->has('vision') ? 'is-invalid' : '' }}">{{ $companyInfo?->vision }}</textarea>
                                            <x-input-error :messages="$errors->get('vision')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="box-button mt-15">
                                    <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="{{ route('company.profile.founding-info') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Industry Type *</label>
                                            <select name="industry_type" id="industry_type"
                                                class="form-control form-icons select-active {{ $errors->has('industry_type') ? 'is-invalid' : '' }}"
                                                value="{{ $companyInfo?->industry_type }}">
                                                <option value="">select</option>
                                                @foreach ($industryTypes as $item)
                                                    <option @selected($item->id === $companyInfo?->industry_type_id) value="{{ $item->id }}">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('industry_type')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Organization Type *</label>
                                            <select name="organization_type" id="organization_type"
                                                class="form-control form-icons select-active {{ $errors->has('organization_type') ? 'is-invalid' : '' }}"
                                                value="{{ $companyInfo?->organization_type }}">
                                                <option value="">select</option>
                                                @foreach ($organizationTypes as $item)
                                                    <option @selected($item->id === $companyInfo?->organization_type_id) value="{{ $item->id }}">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('organization_type')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Team Size*</label>
                                            <select name="team_size" id="team_size"
                                                class="form-control form-icons select-active {{ $errors->has('team_size') ? 'is-invalid' : '' }}"
                                                value="{{ $companyInfo?->team_size }}">
                                                <option value="">select</option>
                                                @foreach ($teamSizes as $item)
                                                    <option @selected($item->id === $companyInfo?->team_size_id) value="{{ $item->id }}">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('team_size')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Establishment Date</label>
                                            <input
                                                class="form-control datepicker {{ $errors->has('establishment_date') ? 'is-invalid' : '' }}"
                                                type="text" name="establishment_date" id="establishment_date"
                                                value="{{ $companyInfo?->establishment_date }}">
                                            <x-input-error :messages="$errors->get('establishment_date')" class="mt-2" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Website ( use https:// )</label>
                                            <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}"
                                                type="text" name="website" id="website"
                                                value="{{ $companyInfo?->website }}">
                                            <x-input-error :messages="$errors->get('website')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Email *</label>
                                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                type="email" name="email" id="email"
                                                value="{{ $companyInfo?->email }}">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Phone *</label>
                                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                                type="text" name="phone" id="phone"
                                                value="{{ $companyInfo?->phone }}">
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Country *</label>
                                            <select name="country" id="country"
                                                class="form-control form-icons country select-active {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                                value="{{ $companyInfo?->country }}">
                                                <option value="">select</option>
                                                @foreach ($countries as $item)
                                                    <option @selected($item->id === $companyInfo?->country) value="{{ $item->id }}">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('country')" class="mt-2" />

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">State</label>
                                            <select name="state" id="state"
                                                class="form-control form-icons state select-active {{ $errors->has('state') ? 'is-invalid' : '' }}"
                                                value="{{ $companyInfo?->state }}">
                                                @foreach ($states as $item)
                                                    <option @selected($item->id === $companyInfo?->state) value="{{ $item->id }}">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">City</label>
                                            <select name="city" id="city"
                                                class="form-control form-icons city select-active {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                                value="{{ old('city'), $companyInfo?->city }}">
                                                @foreach ($cities as $item)
                                                    <option @selected($item->id === $companyInfo?->city) value="{{ $item->id }}">
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Address</label>
                                            <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                                type="text" name="address" id="address"
                                                value="{{ $companyInfo?->address }}">
                                            <x-input-error :messages="$errors->get('address')" class="mt-2" />

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Map Link</label>
                                            <input class="form-control" type="text" name="map_link" id="map_link"
                                                value="{{ $companyInfo?->map_link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-button mt-15">
                                    <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
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
                        </div>
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
