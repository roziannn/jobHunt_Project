@extends('frontend.layouts.master')
@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">My Profile</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.candidate_dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Basic</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-experience" type="button" role="tab"
                                aria-controls="pills-experience" aria-selected="false">Experience & Education</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-account-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account"
                                aria-selected="false">Account Settings</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @include('frontend.candidate_dashboard.profile.sections.basic-section')
                        @include('frontend.candidate_dashboard.profile.sections.profile-section')
                        @include('frontend.candidate_dashboard.profile.sections.experience-section')
                        @include('frontend.candidate_dashboard.profile.sections.account-section')

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Experience Model --}}
    <div class="modal fade" id="experienceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="ExperienceForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Company *</label>
                                    <input type="text" class="form-control" required name="company" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Department *</label>
                                    <input type="text" class="form-control" required name="department" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Designation *</label>
                                    <input type="text" class="form-control" required name="designation" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Start Date *</label>
                                    <input type="text" class="form-control datepicker" required name="start"
                                        id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">End Date *</label>
                                    <input type="text" class="form-control datepicker" required name="end"
                                        id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check form-group form-check-inline">
                                    <input class="form-check-input" style="margin-right: 10px" type="checkbox"
                                        name="currently_working" value="1" id="">
                                    <label class="form-check-label" for="typeCandidate">I am currently working
                                        here.</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Responsibilities</label>
                                    <textarea name="responsibilities" maxlength="500" class="form-control" id="" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save
                                Experience</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- Education Model --}}
    <div class="modal fade" id="educationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="EducationForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Level *</label>
                                    <input type="text" class="form-control" required name="level" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Degree *</label>
                                    <input type="text" class="form-control" required name="degree" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Year *</label>
                                    <input type="text" class="form-control yearpicker" required name="year"
                                        id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Note</label>
                                    <textarea name="note" maxlength="500" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save
                                Education</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var editId = "";
        var editMode = false;

        // fetch experience
        function fetchExperience() {
            $.ajax({
                method: 'GET',
                url: "{{ route('candidate.experience.index') }}",
                data: {},
                success: function(response) {
                    $('.experience-tbody').html(response);
                },
                error: function(xhr, status, error) {

                }
            })
        }

        // Save experience data
        $('#ExperienceForm').on('submit', function(event) {
            event.preventDefault();
            const formData = $(this).serialize(); //from id: #ExperienceForm

            if (editMode) {
                // console.log(editId);
                $.ajax({
                    method: 'PUT',
                    url: "{{ route('candidate.experience.update', ':id') }}".replace(':id',
                        editId),
                    data: formData,
                    beforeSend: function() {
                        showLoader();
                    },
                    success: function(response) {
                        fetchExperience();
                        $('#ExperienceForm').trigger("reset");
                        $('#experienceModal').modal("hide");
                        editId = '';
                        editMode = false;

                        hideLoader();
                        notyf.success(response.message);
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log(error);
                    },
                    // complete: function() {
                    //     hideLoader();
                    // }
                })
            } else {
                $.ajax({
                    method: 'POST',
                    url: "{{ route('candidate.experience.store') }}",
                    data: formData,
                    beforeSend: function() {
                        showLoader();
                    },
                    success: function(response) {
                        fetchExperience();
                        $('#ExperienceForm').trigger("reset");
                        $('#experienceModal').modal("hide");
                        editId = '';
                        editMode = false;

                        hideLoader();
                        notyf.success(response.message);
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log(error);
                    }
                })
            }
        });

        $('body').on('click', '.edit-experience', function() {
            $('#ExperienceForm').trigger("reset");
            let url = $(this).attr('href');

            $.ajax({
                method: 'GET',
                url: url,
                data: {},
                beforeSend: function() {
                    showLoader();
                },
                success: function(response) {
                    editId = response.id
                    editMode = true;

                    $.each(response, function(index, value) {
                        // console.log(value);
                        $(`input[name="${index}"]:text`).val(value);
                        if (index === 'currently_working' && value == 1) {
                            $(`input[name="${index}"]:checkbox`).prop('checked',
                                true);
                        }
                        if (index === 'responsibilities') {
                            $(`textarea[name="${index}"]`).val(value);
                        }
                    })
                    hideLoader();
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            })
        })

        // Delete experience item
        $('body').on('click', '.delete-experience', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'DELETE',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        beforeSend: function() {
                            showLoader();
                        },
                        success: function(response) {
                            //window.location.reload();
                            fetchExperience();
                            hideLoader();
                            notyf.success(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr)
                            swal(xhr.responseJSON.message, {
                                icon: 'error',
                            });
                            hideLoader();
                        }
                    })
                }
            });
        });

        // fetch education
        function fetchEducation() {
            $.ajax({
                method: 'GET',
                url: "{{ route('candidate.education.index') }}",
                data: {},
                success: function(response) {
                    $('.education-tbody').html(response);
                },
                error: function(xhr, status, error) {

                }
            })
        }

        // Save education data
        $('#EducationForm').on('submit', function(event) {
            event.preventDefault();
            const formData = $(this).serialize(); //from id: #EducationForm

            if (editMode) {
                // console.log(editId);
                $.ajax({
                    method: 'PUT',
                    url: "{{ route('candidate.education.update', ':id') }}".replace(':id',
                        editId),
                    data: formData,
                    beforeSend: function() {
                        showLoader();
                    },
                    success: function(response) {
                        fetchEducation();
                        $('#EducationForm').trigger("reset");
                        $('#educationModal').modal("hide");
                        editId = '';
                        editMode = false;

                        hideLoader();
                        notyf.success(response.message);
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log(error);
                    },
                    // complete: function() {
                    //     hideLoader();
                    // }
                })
            } else {
                $.ajax({
                    method: 'POST',
                    url: "{{ route('candidate.education.store') }}",
                    data: formData,
                    beforeSend: function() {
                        showLoader();
                    },
                    success: function(response) {
                        fetchEducation();
                        $('#EducationForm').trigger("reset");
                        $('#educationModal').modal("hide");
                        editId = '';
                        editMode = false;

                        hideLoader();
                        notyf.success(response.message);
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log(error);
                    }
                })
            }
        });

        $('body').on('click', '.edit-education', function() {
            $('#EducationForm').trigger("reset");
            let url = $(this).attr('href');

            $.ajax({
                method: 'GET',
                url: url,
                data: {},
                beforeSend: function() {
                    showLoader();
                },
                success: function(response) {
                    editId = response.id
                    editMode = true;

                    $.each(response, function(index, value) {
                        // console.log(value);
                        $(`input[name="${index}"]:text`).val(value);

                        if (index === 'note') {
                            $(`textarea[name="${index}"]`).val(value);
                        } // 6/17/2024
                    })
                    hideLoader();
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            })
        })

        // Delete education item
        $('body').on('click', '.delete-education', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'DELETE',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        beforeSend: function() {
                            showLoader();
                        },
                        success: function(response) {
                            fetchEducation();
                            hideLoader();
                            notyf.success(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr)
                            swal(xhr.responseJSON.message, {
                                icon: 'error',
                            });
                            hideLoader();
                        }
                    })
                }
            });
        });
    </script>
@endpush
