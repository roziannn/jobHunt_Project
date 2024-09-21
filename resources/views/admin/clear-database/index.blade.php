@extends('admin.layouts.master')
@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Clear Database</h1>
        </div>

        <div class="section-body">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Clear Database</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning alert-has-icon">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">Danger</div>
                            If you fire this action it will wipe your entire database.
                        </div>
                        <form action="" class="mt-2 clear_db">
                            <button class="btn btn-danger submit_button" type="submit">Clear Database</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.clear_db').on('submit', function(e) {
                e.preventDefault();
                swal({
                        title: 'Are you sure?',
                        text: 'This action will wipe your entire database!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                method: 'POST',
                                url: "{{ route('admin.clear-database') }}",
                                data: {
                                    _token: "{{ csrf_token() }}"
                                },
                                beforeSend: function() {
                                    swal('Clearing database. Please don\'t refresh the page!. ', {
                                        icon: 'info',
                                        buttons: false,
                                        closeOnClickOutside: false
                                    });
                                },
                                success: function(response) {
                                    swal(response.message, {
                                        icon: 'success',
                                    });

                                    window.location.reload();
                                },
                                error: function(xhr, status, error) {
                                    console.log(xhr)
                                    swal(xhr.responseJSON.message, {
                                        icon: 'error',
                                    });
                                }
                            })
                        } else {
                            swal('Your data file is safe!');
                        }
                    });
            })
        })
    </script>
@endpush
