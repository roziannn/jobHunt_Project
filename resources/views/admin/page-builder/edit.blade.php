@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Page Builder</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Page</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.page-builder.update', $page->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Page Name</label>
                            <input type="text" class="form-control {{ hasError($errors, 'page_name') }}" name="page_name"
                                value="{{ old('page_name', $page->page_name) }}">
                            <x-input-error :messages="$errors->get('page_name')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea name="content" id="editor" class="{{ hasError($errors, 'content') }}">{!! $page->content !!}
                            </textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
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
