@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Jobs</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Jobs</li>
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
                    <div class="card-body">
                        <form action="{{ route('company.jobs.store') }}" method="POST">
                            @csrf
                            <div class="card mb-3">
                                <div class="card-header">
                                    Job Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control {{ hasError($errors, 'title') }}"
                                                    name="title" value="{{ old('title') }}">
                                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group select-style">
                                                <label for="">Category <span class="text-danger">*</span></label>
                                                <select name="category" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'category') }}">
                                                    <option value="">Choose Category</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Total Vacancies <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control {{ hasError($errors, 'vacancies') }}"
                                                    name="vacancies" value="{{ old('vacancies') }}">
                                                <x-input-error :messages="$errors->get('vacancies')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Deadline <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control datepicker {{ hasError($errors, 'deadline') }}"
                                                    name="deadline" value="{{ old('deadline') }}">
                                                <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    Location
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group select-style">
                                                <label for="">Country </label>
                                                <select name="country" id=""
                                                    class="form-control form-icons select-active country {{ hasError($errors, 'country') }}">
                                                    <option value="">Choose Country</option>
                                                    @foreach ($countries as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group select-style">
                                                <label for="">State </label>
                                                <select name="state" id=""
                                                    class="form-control form-icons select-active state {{ hasError($errors, 'state') }}">
                                                    <option value="">Choose State</option>
                                                </select>
                                                <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group select-style">
                                                <label for="">City </label>
                                                <select name="city" id=""
                                                    class="form-control form-icons select-active city {{ hasError($errors, 'city') }}">
                                                    <option value="">Choose City</option>
                                                </select>
                                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Address </label>
                                                <input type="text"
                                                    class="form-control {{ hasError($errors, 'address') }}" name="address"
                                                    value="{{ old('address') }}">
                                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    Salary Details
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group d-flex">
                                                        <input type="radio" onclick="salaryModeChange('salary_range')"
                                                            id="salary_range"
                                                            class="from-control {{ hasError($errors, 'salary_mode') }}"
                                                            name="salary_mode" value="range"
                                                            style="height: 20px; width:20px;" checked>
                                                        <label for="salary_range"
                                                            style="margin-left:6px; margin-top:-4px;">Salary Range
                                                        </label>
                                                        <x-input-error :messages="$errors->get('salary_mode')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group d-flex">
                                                        <input type="radio" onclick="salaryModeChange('custom_salary')"
                                                            id="custom_range"
                                                            class="from-control {{ hasError($errors, 'salary_mode') }}"
                                                            name="salary_mode" value="custom"
                                                            style="height: 20px; width:20px;">
                                                        <label for="custom_range"
                                                            style="margin-left:6px; margin-top:-4px;">Custom Salary
                                                        </label>
                                                        <x-input-error :messages="$errors->get('salary_mode')" class="mt-2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 salary-range-part">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Minimum Salary <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control {{ hasError($errors, 'min_salary') }}"
                                                            name="min_salary" value="{{ old('min_salary') }}">
                                                        <x-input-error :messages="$errors->get('min_salary')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Maximum Salary <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control {{ hasError($errors, 'max_salary') }}"
                                                            name="max_salary" value="{{ old('max_salary') }}">
                                                        <x-input-error :messages="$errors->get('max_salary')" class="mt-2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 custom-salary-part d-none">
                                            <div class="form-group">
                                                <label for="">Custom Salary <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control {{ hasError($errors, 'custom_salary') }}"
                                                    name="custom_salary" value="{{ old('custom_salary') }}">
                                                <x-input-error :messages="$errors->get('custom_salary')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group select-style">
                                                <label for="">Salary Type <span
                                                        class="text-danger">*</span></label>
                                                <select name="salary_type" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'salary_type') }}">
                                                    <option value="">Choose Salary Type</option>
                                                    @foreach ($salaryType as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('salary_type')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    Attributes
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group select-style">
                                                <label for="">Experience <span
                                                        class="text-danger">*</span></label>
                                                <select name="experience" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'experience') }}">
                                                    <option value="">Choose Experience</option>
                                                    @foreach ($experiences as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group select-style">
                                                <label for="">Job Role <span class="text-danger">*</span></label>
                                                <select name="job_role" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'job_role') }}">
                                                    <option value="">Choose Job Role</option>
                                                    @foreach ($jobRoles as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('job_role')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group select-style">
                                                <label for="">Education <span class="text-danger">*</span></label>
                                                <select name="education" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'education') }}">
                                                    <option value="">Choose Education</option>
                                                    @foreach ($educations as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('education')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group select-style">
                                                <label for="">Job Type <span class="text-danger">*</span></label>
                                                <select name="job_type" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'job_type') }}">
                                                    <option value="">Choose Job Type</option>
                                                    @foreach ($jobTypes as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('job_type')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group select-style">
                                                <label for="">Tags <span class="text-danger">*</span></label>
                                                <select name="tags[]" id="" multiple
                                                    class="form-control form-icons select-active {{ hasError($errors, 'tags') }}">
                                                    <option value="">Choose Tags</option>
                                                    @foreach ($tags as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Benefits <span class="text-danger">*</span></label>
                                                <input type="text" name="benefits" value="{{ old('benefits') }}"
                                                    class="form-control inputtags {{ hasError($errors, 'benefits') }}">
                                                <x-input-error :messages="$errors->get('benefits')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group select-style">
                                                <label for="">Skills <span class="text-danger">*</span></label>
                                                <select name="skills[]" id="" multiple
                                                    class="form-control form-icons select-active {{ hasError($errors, 'skills') }}">
                                                    <option value="">Choose Skills</option>
                                                    @foreach ($skills as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <x-input-error :messages="$errors->get('skills')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    Application Options
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 select-style">
                                            <div class="form-group">
                                                <label for="">Receive Application <span
                                                        class="text-danger">*</span></label>
                                                <select name="receive_application" id=""
                                                    class="form-control form-icons select-active {{ hasError($errors, 'receive_application') }}">
                                                    <option value="app">On Platform </option>
                                                    <option value="email">On your Email </option>
                                                    <option value="custom_url">On a Custom Link </option>
                                                </select>
                                                <x-input-error :messages="$errors->get('receive_application')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    Promote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="form-group d-flex">
                                                        <input type="checkbox" id="featured"
                                                            class="from-control {{ hasError($errors, 'featured') }}"
                                                            style="height: 20px;width:20px;" name="featured"
                                                            value="1">
                                                        <label style="margin-left: 8px; margin-top:-4px;"
                                                            for="featured">Featured</label>
                                                        <x-input-error :messages="$errors->get('featured')" class="mt-2" />
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group d-flex">
                                                        <input type="checkbox" id="highlight"
                                                            class="from-control {{ hasError($errors, 'highlight') }}"
                                                            style="height: 20px;width:20px;" name="highlight"
                                                            value="1">
                                                        <label style="margin-left: 8px; margin-top:-4px;"
                                                            for="highlight">Highlight </label>
                                                        <x-input-error :messages="$errors->get('highlight')" class="mt-2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    Job Description
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Description <span class="text-danger">
                                                                *</span></label>
                                                        <textarea id="editor" name="description" value="{{ old('description') }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(".inputtags").tagsinput('items');

        function salaryModeChange(mode) {
            if (mode == 'salary_range') {
                $('.salary-range-part').removeClass('d-none')
                $('.custom-salary-part').addClass('d-none')
            } else if (mode == 'custom_salary') {
                $('.salary-range-part').addClass('d-none')
                $('.custom-salary-part').removeClass('d-none')
            }
        }


        $('.country').on('change', function() {

            let country_id = $(this).val();

            $('.city').html("");

            $.ajax({
                method: 'GET',
                url: '{{ route('get-states', ':id') }}'.replace(":id", country_id),
                data: {},
                success: function(response) {
                    let html = '';
                    //looping the response -> which the State from country_id
                    $.each(response, function(index, value) {
                        html +=
                            `<option value="${value.id}">${value.name}</option>`
                    });

                    $('.state').html(html);
                },
                error: function(xhr, status, error) {}
            })
        })

        $('.state').on('change', function() {

            let state_id = $(this).val();

            $.ajax({
                method: 'GET',
                url: '{{ route('get-cities', ':id') }}'.replace(":id", state_id),
                data: {},
                success: function(response) {
                    let html = '';
                    //looping the response -> which the State from country_id
                    $.each(response, function(index, value) {
                        html +=
                            `<option value="${value.id}">${value.name}</option>`
                    });

                    $('.city').html(html);
                },
                error: function(xhr, status, error) {}
            })
        })
    </script>
@endpush
