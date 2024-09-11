@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Newsletter Subscribers</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Send Newsletter</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.newsletter.send-mail') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control {{ hasError($errors, 'subject') }}" name="subject"
                                value="{{ old('subject') }}">
                            <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message" id="editor" class="{{ hasError($errors, 'message') }}"></textarea>
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Subscribers</h4>
                    <div class="card-header-form">
                        <form action="{{ route('admin.newsletter.index') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search"
                                    value="{{ request('search') }}">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-primary" style="height: 40px;"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Email</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($subscribers as $item)
                                    <tr>
                                        <td>{{ $item->email }} </td>
                                        <td>
                                            <a href="{{ route('admin.newsletter.destroy', $item->id) }}"
                                                class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        @if ($subscribers->hasPages())
                            {{ $subscribers->withQueryString()->links() }}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
