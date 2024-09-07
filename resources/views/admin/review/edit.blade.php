@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Reviews</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Review</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <x-image-preview :height="200" :width="200" :source="$review->image" />
                                    <label for="">Image</label>
                                    <input type="file" class="form-control {{ hasError($errors, 'image') }}"
                                        name="image">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control {{ hasError($errors, 'name') }}" name="name"
                                value="{{ old('name', $review->name) }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control {{ hasError($errors, 'title') }}" name="title"
                                value="{{ old('title', $review->title) }}">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Review</label>
                            <textarea type="text" class="form-control {{ hasError($errors, 'review') }}" name="review"
                                value="{{ old('review') }}">{{ $review->review }}</textarea>
                            <x-input-error :messages="$errors->get('review')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Rating</label>
                            <select name="rating" class="form-control {{ hasError($errors, 'rating') }}">
                                @for ($i = 1; $i <= 5; $i++)
                                    <option @selected($review->rating == $i) value="{{ $i }}">{{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <x-input-error :messages="$errors->get('rating')" class="mt-2" />
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
