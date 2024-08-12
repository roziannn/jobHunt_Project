@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Orders</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Orders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.company_dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Order Id</th>
                                            <td>{{ $order->order_id }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Transaction Id</th>
                                            <td>{{ $order->transaction_id }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date</th>
                                            <td>{{ formatDate($order->created_at) }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Action</th>
                                            <td><b><a class="btn btn-primary"
                                                        href="{{ route('company.orders.invoice', $order->id) }}">Download
                                                        Invoice</a></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <h5 class="ps-4 pt-4">Billing and Payment</h5>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Company</th>
                                            <td>{{ $order->company?->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{ $order->company?->email }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Payment Method</th>
                                            <td>{{ $order->payment_provider }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <h5 class="ps-4 pt-4">Plan</h5>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>{{ $order->plan?->label }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Price</th>
                                            <td>{{ $order->default_amount }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><b>Plan Benefits</b></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Job Post Limit</th>
                                            <td>{{ $order->plan?->job_limit }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Featured Job Post Limit</th>
                                            <td>{{ $order->plan?->featured_job_limit }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Highlighted Job Limit</th>
                                            <td>{{ $order->plan?->highlight_job_limit }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Profile Verified</th>
                                            <td>{{ $order->plan?->profile_verified ? 'Yes' : 'No' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
