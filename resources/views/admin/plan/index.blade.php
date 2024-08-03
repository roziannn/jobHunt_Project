@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Price Plans</h1>
        </div>
        <div class="text-right">
            <a href="{{ route('admin.plans.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i>
                Create New</a>
        </div>
        <div class="section-body">
            <div class="row">
                @foreach ($plans as $item)
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="pricing">
                            @if ($item->recommended)
                                <div class="pricing-title">
                                    Recommended
                                </div>
                            @endif
                            <div class="pricing-padding">
                                <div>
                                    <h4> {{ $item->label }}</h4>
                                </div>
                                <div class="pricing-price">
                                    <div>${{ $item->price }}</div>
                                    <div>per month</div>
                                </div>
                                <div class="pricing-details">
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">{{ $item->job_limit }} job post limit</div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">{{ $item->featured_job_limit }} features job post
                                            limit</div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">{{ $item->highlight_job_limit }} highlight job post
                                        </div>
                                    </div>
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon">
                                            @if ($item->profile_verified)
                                                <i class="fas fa-check"></i>
                                            @else
                                                <div class="pricing-item-icon bg-danger text-white"><i
                                                        class="fas fa-times"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="pricing-item-label">Verify company</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                @if ($item->frontend_show)
                                    <span class="badge bg-primary text-light">Show at Frontend </span>
                                @endif
                                @if ($item->homepage_show)
                                    <span class="badge bg-success text-dark">Show at Homepage </span>
                                @endif
                            </div>
                            <div class="pricing-cta" style="display: flex; justify-content: space-between; width: 100%;">
                                <a href="{{ route('admin.plans.edit', $item->id) }}"
                                    class="w-100 bg-primary text-light">Edit <i class="fas fa-arrow-right"></i></a>
                                <a href="{{ route('admin.plans.destroy', $item->id) }}"
                                    class="w-100 bg-danger text-light delete-item">Delete <i class="fas fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
