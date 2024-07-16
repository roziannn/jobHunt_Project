<div class="tab-pane fade show" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
    <form action="{{ route('candidate.profile.account-info.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <h4>Location</h4>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">Country *</label>
                            <select name="country"
                                class="form-control form-icons select-active {{ hasError($errors, 'country') }} country">
                                <option value="">Select One</option>
                                @foreach ($countries as $item)
                                    <option @selected($item->id === $candidate?->country) value="{{ $item->id }}">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">State</label>
                            <select name="state"
                                class="form-control form-icons select-active {{ hasError($errors, 'state') }} state">
                                <option value="">Select One</option>
                                @foreach ($states as $item)
                                    <option @selected($item->id === $candidate->state) value="{{ $item->id }}">
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group select-style">
                            <label class="font-sm color-text-mutted mb-10">City</label>
                            <select name="city"
                                class="form-control form-icons select-active {{ hasError($errors, 'city') }} city">
                                <option value="">Select One</option>
                                @foreach ($cities as $item)
                                    <option @selected($item->id === $candidate?->city) value="{{ $item->id }}">
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
                                type="text" name="address" value="{{ $candidate?->address }}">
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h4>Your Contact Information</h4>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Phone</label>
                            <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text"
                                name="phone" value="{{ $candidate?->phone_one }}">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Secondary Phone</label>
                            <input class="form-control {{ $errors->has('secondary_phone') ? 'is-invalid' : '' }}"
                                type="text" name="secondary_phone" value="{{ $candidate?->phone_two }}">
                            <x-input-error :messages="$errors->get('secondary_phone')" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-sm color-text-mutted mb-10">Email</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text"
                                name="email" value="{{ $candidate?->email }}">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="mt-15">
            <button class="btn btn-primary">Save All Changes</button>
        </div>
    </form>
    <hr class="">
    <div class="mt-4">
        <form action="{{ route('candidate.profile.account-email.update') }}" method="POST">
            @csrf
            <h4>Change Account Email Address</h4>
            <br>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="font-sm color-text-mutted mb-10">Account Email</label>
                    <input class="form-control {{ $errors->has('account_email') ? 'is-invalid' : '' }}" type="text"
                        name="account_email" value="{{ auth()->user()->email }}">
                    <x-input-error :messages="$errors->get('account_email')" class="mt-2" />
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save All</button>
                </div>
            </div>
        </form>
    </div>

    <hr class="">
    <div class="mt-4">
        <form action="{{ route('candidate.profile.account-password.update') }}" method="POST">
            @csrf
            <h4>Change Password</h4>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-sm color-text-mutted mb-10">Password</label>
                        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                            name="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-sm color-text-mutted mb-10">Confirm Password</label>
                        <input class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                            type="password" name="password_confirmation">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save All</button>
                </div>
            </div>
        </form>
    </div>
</div>


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
