<div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
    <form action="{{ route('admin.logo-settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <x-image-preview :height="50" :width="200" :source="config('settings.site_logo')" />
                    <label for="">Logo</label>
                    <input type="file" class="form-control {{ hasError($errors, 'logo') }}" name="logo">
                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <x-image-preview :height="50" :width="200" :source="config('settings.site_favicon')" />
                    <label for="">Favicon</label>
                    <input type="file" class="form-control {{ hasError($errors, 'favicon') }}" name="favicon">
                    <x-input-error :messages="$errors->get('favicon')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
