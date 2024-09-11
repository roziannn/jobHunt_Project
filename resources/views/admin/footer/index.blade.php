@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Footer Section</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Footer Section</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.footer.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <x-image-preview :height="200" :width="200" :source="$footer?->logo" />
                                    <label for="">Logo</label>
                                    <input type="file" class="form-control {{ hasError($errors, 'logo') }}"
                                        name="logo">
                                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="details" class="form-control {{ hasError($errors, 'details') }}">{{ $footer?->details }}
                            </textarea>
                            <x-input-error :messages="$errors->get('details')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Copyright</label>
                            <input name="copyright" class="form-control {{ hasError($errors, 'copyright') }}"
                                value="{{ $footer?->copyright }}">

                            <x-input-error :messages="$errors->get('copyright')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
