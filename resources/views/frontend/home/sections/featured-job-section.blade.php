<section class="section-box futured_jobs mt-20">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Featured Jobs</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Check out our latest
                featured job's</p>
            <div class="list-tabs mt-40">
                <ul class="nav nav-tabs" role="tablist">
                    @foreach ($featuredCategories as $item)
                        <li><a class="{{ $loop->index === 0 ? 'active' : '' }}" id="nav-tab-job-{{ $item->id }}"
                                href="#tab-job-{{ $item->id }}" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-job-{{ $item->id }}" aria-selected="true">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mt-70">
            <div class="tab-content" id="myTabContent-1">
                @foreach ($featuredCategories as $item)
                    <div class="tab-pane fade show {{ $loop->index === 0 ? 'active' : '' }}"
                        id="tab-job-{{ $item->id }}" role="tabpanel" aria-labelledby="tab-job-{{ $item->id }}">
                        <div class="row">
                            @php
                                $featuredJobs = $item // from looping category($item), getting the jobs related
                                    ->jobs()
                                    ->where('featured', 1)
                                    ->where(['status' => 'active'])
                                    ->where('deadline', '>=', date('Y-m-d'))
                                    ->latest()
                                    ->take(8)
                                    ->get();
                            @endphp
                            @foreach ($featuredJobs as $job)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{ asset($job->company?->logo) }}"
                                                    alt="joblist">
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a
                                                    href="{{ route('jobs.show', $job->slug) }}">{{ Str::limit($job->title, 28, '...') }}</a>
                                            </h6>
                                            <div class="mt-5"><span
                                                    class="card-briefcase">{{ $job->jobType->name }}</span><span
                                                    class="card-time">{{ $job->created_at->diffForHumans() }}</span>
                                            </div>
                                            <p>{{ Str::limit(strip_tags($job->description), 100, '...') }}</p>
                                            <div class="mt-30">
                                                @foreach ($job->skills as $jobSkill)
                                                    @if ($loop->index < 5)
                                                        <a class="btn btn-grey-small mr-5"
                                                            href="javascript:;">{{ $jobSkill->skill->name }}</a>
                                                    @elseif ($loop->index == 7)
                                                        <a class="btn btn-grey-small mr-5"
                                                            href="javascript:;">More..</a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        @if ($job->salary_mode == 'range')
                                            <h6 class="card-text-price" style="font-size: 18px"> {{ $job->min_salary }}
                                                -
                                                {{ $job->max_salary }}
                                                {{ config('settings.site_default_currency') }}
                                            </h6>
                                        @else
                                            <h6 class="card-text-price" style="font-size: 18px">
                                                {{ $job->custom_salary }}
                                            </h6>
                                        @endif
                                        <a href="{{ route('jobs.show', $job->slug) }}">
                                            <div class="btn btn-apply-now">
                                                View Post</div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
