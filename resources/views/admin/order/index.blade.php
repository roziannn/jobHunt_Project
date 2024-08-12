@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Orders</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Orders</h4>
                    <div class="card-header-form">
                        <form action="{{ route('admin.orders.index') }}" method="GET">
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
                                <th>Order & Transaction</th>
                                <th>Company</th>
                                <th>Plan</th>
                                <th>Paid Amount</th>
                                <th>Main Price</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>

                                <th style="width: 10%">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>
                                            #{{ $item->order_id }}
                                            <br>
                                            Transaction: {{ $item->transaction_id }}
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <div class="mr-2">
                                                    <img style="width:40px; height:40px; object-fit:cover;"
                                                        src="{{ asset($item->company->logo) }}" alt="">
                                                </div>
                                                <div>
                                                    <b>{{ $item->company->name }}</b>
                                                    <br>
                                                    {{ $item->company->email }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $item->package_name }}
                                        </td>
                                        <td>
                                            {{ $item->amount }} {{ $item->paid_in_currency }}
                                        </td>
                                        <td>
                                            {{ $item->default_amount }}
                                        </td>
                                        <td>
                                            {{ $item->payment_provider }}
                                        </td>
                                        <td>
                                            <p class="badge bg-success text-light">{{ $item->payment_status }}</p>
                                        </td>
                                        <td><a href="{{ route('admin.orders.show', $item->id) }}"
                                                class="btn-sm btn btn-primary">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        @if ($orders->hasPages())
                            {{ $orders->withQueryString()->links() }}
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
