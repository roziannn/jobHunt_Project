<script>
    /**
     * ---------------------------------
     * START: Third party plugin initialization
     * ---------------------------------
     * **/


    //Create an instance of Notyf
    var notyf = new Notyf();
    //datepicker
    $('.datepicker').datepicker({
        format: 'yyyy-m-d',
    });

    //yearpicker
    $('.yearpicker').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });

    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    /**
     * ---------------------------------
     * END: Third party plugin initialization
     * ---------------------------------
     * **/

    function showLoader() {
        $('.preloader_demo').removeClass('d-none');
    }

    function hideLoader() {
        $('.preloader_demo').addClass('d-none');
    }
</script>
