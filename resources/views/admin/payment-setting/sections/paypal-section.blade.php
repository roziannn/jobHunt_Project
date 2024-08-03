<div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
    <form action="{{ route('admin.paypal-settings.update') }}" method="POST">
        @csrf
        {{--
        note: *requirement
            - paypal status
            - paypal mode
            - paypal country
            - paypal currency name
            - paypal currency rate
            - paypal client id
            - paypal secret key
            - paypal app id
        --}}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Paypal Status</label>
                    <select name="paypal_status" id=""
                        class="form-control {{ hasError($errors, 'paypal_status') }}">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <x-input-error :messages="$errors->get('paypal_status')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Paypal Account Mode</label>
                    <select name="paypal_account_mode" id=""
                        class="form-control {{ hasError($errors, 'paypal_account_mode') }}">
                        <option value="sandbox">Sandbox</option>
                        <option value="live">Live</option>
                    </select>
                    <x-input-error :messages="$errors->get('paypal_account_mode')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Paypal Country Name</label>
                    <select name="paypal_country_name" id=""
                        class="form-control select2 {{ hasError($errors, 'paypal_country_name') }}">
                        <option value="">Select</option>
                        @foreach (config('countries') as $key => $country)
                            <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('paypal_country_name')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Paypal Currency Name</label>
                    <select name="paypal_currency_name" id=""
                        class="form-control select2{{ hasError($errors, 'paypal_currency_name') }}">
                        <option value="">Select</option>
                        @foreach (config('currencies.currency_list') as $key => $currency)
                            <option value="{{ $key }}">{{ $currency }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('paypal_currency_name')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Paypal Currency Rate</label>
                    <input type="text" class="form-control  {{ hasError($errors, 'paypal_currency_rate') }}"
                        name="paypal_currency_rate">
                    <x-input-error :messages="$errors->get('paypal_currency_rate')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Paypal Client Id</label>
                    <input type="text" class="form-control  {{ hasError($errors, 'paypal_client_id') }}"
                        name="paypal_client_id">
                    <x-input-error :messages="$errors->get('paypal_client_id')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Paypal Secret Key</label>
                    <input type="text" class="form-control  {{ hasError($errors, 'paypal_client_secret') }}"
                        name="paypal_client_secret">
                    <x-input-error :messages="$errors->get('paypal_client_secret')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Paypal App Id</label>
                    <input type="text" class="form-control  {{ hasError($errors, 'paypal_app_id') }}"
                        name="paypal_app_id">
                    <x-input-error :messages="$errors->get('paypal_app_id')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
