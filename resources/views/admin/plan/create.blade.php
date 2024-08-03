@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Price Plans</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Plan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.plans.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lable</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'label') }}"
                                        name="label" value="{{ old('label') }}">
                                    <x-input-error :messages="$errors->get('label')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'price') }}"
                                        name="price" value="{{ old('price') }}">
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Job Limit</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'job_limit') }}"
                                        name="job_limit" value="{{ old('job_limit') }}">
                                    <x-input-error :messages="$errors->get('job_limit')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Featured Job Limit</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'featured_job_limit') }}"
                                        name="featured_job_limit" value="{{ old('featured_job_limit') }}">
                                    <x-input-error :messages="$errors->get('featured_job_limit')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Highlight Job Limit</label>
                                    <input type="text"
                                        class="form-control {{ hasError($errors, 'highlight_job_limit') }}"
                                        name="highlight_job_limit" value="{{ old('highlight_job_limit') }}">
                                    <x-input-error :messages="$errors->get('highlight_job_limit')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Profile Verified</label>
                                    <select name="profile_verified" id=""
                                        class="form-control {{ hasError($errors, 'profile_verified') }}">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('profile_verified')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Recommended</label>
                                    <select name="recommended" id=""
                                        class="form-control {{ hasError($errors, 'recommended') }}">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('recommended')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Show this package in frontend</label>
                                    <select name="frontend_show" id=""
                                        class="form-control {{ hasError($errors, 'frontend_show') }}">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('frontend_show')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Show this package in homepage</label>
                                    <select name="homepage_show" id=""
                                        class="form-control {{ hasError($errors, 'homepage_show') }}">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('homepage_show')" class="mt-2" />
                                </div>
                            </div>
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
