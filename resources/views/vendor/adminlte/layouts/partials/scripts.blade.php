<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<!-- Datatable -->
<script src="/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $('.data_table').DataTable({
        "order": [0, 'desc'],
    });
</script>
@if(!empty(session('messages')))
    <script>
        toastr.success('{{session('messages')}}')
    </script>
@endif
@if(!empty(session('errors')))
    <script>
        toastr.error('{{session('errors')}}')
    </script>
@endif


