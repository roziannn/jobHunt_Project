@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Why Choose Us</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Why Choose Us</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.why-choose-us.update', 1) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Icon One</label>
                                    <div role="iconpicker" data-icon="{{ $whyChooseUs->icon_one }}" data-align="left"
                                        name="icon_one" class="{{ hasError($errors, 'icon_one') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('icon_one')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Title One</label>
                                        <input type="text" class="form-control {{ hasError($errors, 'title_one') }}"
                                            name="title_one" value="{{ old('title_one', $whyChooseUs->title_one) }}">
                                        <x-input-error :messages="$errors->get('title_one')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Subtitle One</label>
                                        <input type="text" class="form-control {{ hasError($errors, 'subtitle_one') }}"
                                            name="subtitle_one"
                                            value="{{ old('subtitle_one', $whyChooseUs->subtitle_one) }}">
                                        <x-input-error :messages="$errors->get('subtitle_one')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Icon two</label>
                                    <div role="iconpicker" data-icon="{{ $whyChooseUs->icon_two }}" data-align="left"
                                        name="icon_two" class="{{ hasError($errors, 'icon_two') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('icon_two')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Title Two</label>
                                        <input type="text" class="form-control {{ hasError($errors, 'title_two') }}"
                                            name="title_two" value="{{ old('title_two', $whyChooseUs->title_one) }}">
                                        <x-input-error :messages="$errors->get('title_two')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Subtitle Two</label>
                                        <input type="text" class="form-control {{ hasError($errors, 'subtitle_two') }}"
                                            name="subtitle_two"
                                            value="{{ old('subtitle_two', $whyChooseUs->subtitle_two) }}">
                                        <x-input-error :messages="$errors->get('subtitle_two')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Icon Three</label>
                                    <div role="iconpicker" data-icon="{{ $whyChooseUs->icon_three }}" data-align="left"
                                        name="icon_three" class="{{ hasError($errors, 'icon_three') }}">
                                    </div>
                                    <x-input-error :messages="$errors->get('icon_three')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Title Three</label>
                                        <input type="text" class="form-control {{ hasError($errors, 'title_three') }}"
                                            name="title_three" value="{{ old('title_three', $whyChooseUs->title_three) }}">
                                        <x-input-error :messages="$errors->get('title_three')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Subtitle Three</label>
                                        <input type="text"
                                            class="form-control {{ hasError($errors, 'subtitle_three') }}"
                                            name="subtitle_three"
                                            value="{{ old('subtitle_three', $whyChooseUs->subtitle_three) }}">
                                        <x-input-error :messages="$errors->get('subtitle_three')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
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
