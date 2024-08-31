@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Blogs</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Blogs</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <x-image-preview :height="200" :width="300" :source="$blog->image" />
                            <label for="">Image</label>
                            <input type="file" class="form-control {{ hasError($errors, 'image') }}" name="image"
                                value="{{ old('image', $blog->image) }}">
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control {{ hasError($errors, 'title') }}" name="title"
                                value="{{ old('title', $blog->title) }}">
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">
                                    *</span></label>
                            <textarea id="editor" name="description">{!! $blog->description !!}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Featured</label>
                                    <select name="featured" class="form-control {{ hasError($errors, 'featured') }}">
                                        <option @selected($blog->featured == 0) value="0">No</option>
                                        <option @selected($blog->featured == 1) value="1">Yes</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('featured')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control {{ hasError($errors, 'status') }}">
                                        <option @selected($blog->status == 1) value="1">Active</option>
                                        <option @selected($blog->status == 0) value="0">Inactive</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
