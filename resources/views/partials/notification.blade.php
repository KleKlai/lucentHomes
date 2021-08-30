<script src="{{ asset('assets/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

@if(Session::has('Success'))
    <script>
        $.toast({
            heading: 'Success',
            text: "{{ Session::get('Success') }}",
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#f96868',
            position: 'top-right'
        })
    </script>
@endif
