@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Counter Section</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Counter Section</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.counter.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Counter One</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'counter_one') }}"
                                        name="counter_one" value="{{ old('counter_one', $counter?->counter_one) }}">
                                    <x-input-error :messages="$errors->get('counter_one')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title One</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'title_one') }}"
                                        name="title_one" value="{{ old('title_one', $counter?->title_one) }}">
                                    <x-input-error :messages="$errors->get('title_one')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Counter Two</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'counter_two') }}"
                                        name="counter_two" value="{{ old('counter_two', $counter?->counter_two) }}">
                                    <x-input-error :messages="$errors->get('counter_two')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title Two</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'title_two') }}"
                                        name="title_two" value="{{ old('title_two', $counter?->title_two) }}">
                                    <x-input-error :messages="$errors->get('title_two')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Counter Three</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'counter_three') }}"
                                        name="counter_three" value="{{ old('counter_three', $counter?->counter_three) }}">
                                    <x-input-error :messages="$errors->get('counter_three')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title Three</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'title_three') }}"
                                        name="title_three" value="{{ old('title_three', $counter?->title_three) }}">
                                    <x-input-error :messages="$errors->get('title_three')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Counter Four</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'counter_four') }}"
                                        name="counter_four" value="{{ old('counter_four', $counter?->counter_four) }}">
                                    <x-input-error :messages="$errors->get('counter_four')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title Four</label>
                                    <input type="text" class="form-control {{ hasError($errors, 'title_four') }}"
                                        name="title_four" value="{{ old('title_four', $counter?->title_four) }}">
                                    <x-input-error :messages="$errors->get('title_four')" class="mt-2" />
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
