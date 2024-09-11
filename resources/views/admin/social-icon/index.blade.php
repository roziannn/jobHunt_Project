@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Social Icons</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Social Icons</h4>
                    <div class="card-header-form">

                    </div>
                    <a href="{{ route('admin.social-icon.create') }}" class="btn btn-primary"><i
                            class="fas fa-plus-circle"></i>
                        Create New</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Icon</th>
                                <th>Url</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($icons as $item)
                                    <tr>
                                        <td> <i class="{{ $item->icon }} " style="font-size: 24px;"></i></td>
                                        <td>{{ $item->url }} </td>
                                        <td><a href="{{ route('admin.social-icon.edit', $item->id) }}"
                                                class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('admin.social-icon.destroy', $item->id) }}"
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
                        @if ($icons->hasPages())
                            {{ $icons->withQueryString()->links() }}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
