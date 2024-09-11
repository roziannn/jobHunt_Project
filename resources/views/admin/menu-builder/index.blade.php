@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Menu Builder</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    {!! Menu::render() !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {!! Menu::scripts() !!}
@endpush
