@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Job Location</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Job Location</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.job-location.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    {{-- <x-image-preview :height="200" :width="200" :source="$location?->image" /> --}}
                                    <label for="">Image</label>
                                    <input type="file" class="form-control {{ hasError($errors, 'image') }}"
                                        name="image">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Country</label>
                            <select name="country" id=""
                                class="form-control select2 {{ hasError($errors, 'country') }}">
                                <option value="">Choose Country</option>
                                @foreach ($countries as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id=""
                                class="form-control select2 {{ hasError($errors, 'status') }}">
                                <option value="">Choose Status</option>
                                <option value="featured">Featured</option>
                                <option value="hot">Hot</option>
                                <option value="trending">Trending</option>
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
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
