<!-- ============================================================== -->
<script src="{{ asset('super_admin') }}/assets/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('super_admin') }}/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('super_admin') }}/assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{ asset('super_admin') }}/assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ asset('super_admin') }}/assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{ asset('super_admin') }}/assets/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{ asset('super_admin') }}/assets/node_modules/raphael/raphael-min.js"></script>
<script src="{{ asset('super_admin') }}/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="{{ asset('super_admin') }}/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="{{ asset('super_admin') }}/assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="{{ asset('super_admin') }}/assets/dist/js/dashboard1.js"></script>
<script src="{{ asset('super_admin') }}/assets/node_modules/toast-master/js/jquery.toast.js"></script>
{{-- {!! Toastr::message() !!} --}}
{{-- <script> --}}
{{--	@if ($errors->any()) --}}
{{--        @foreach ($errors->all() as $error) --}}
{{--            toastr.error('{{ $error }}','Error',{ --}}
{{--				progressBar:'true', --}}
{{--				positionClass: 'toast-top-right', --}}
{{--			}); --}}
{{--		@endforeach --}}
{{--    @endif --}}
{{-- </script> --}}
<!-- This is data table -->
<script src="{{ asset('super_admin') }}/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('super_admin') }}/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js">
</script>
<!-- start - This is for export functionality only -->
{{-- <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script> --}}
{{-- <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script> --}}
{{-- <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> --}}
{{-- <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script> --}}
{{-- <script src="../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> --}}
{{-- <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script> --}}
{{-- <script src="../../../../cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script> --}}
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!-- end - This is for export functionality only -->

{{-- boxicon --}}
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

{{-- fontawesome --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>





<script>
    $(function() {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group +
                            '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#config-table1').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass(
            'btn btn-primary me-1');
    });
</script>
<!--stickey kit -->
<script src="{{ asset('super_admin') }}/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="{{ asset('super_admin') }}/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>

<!-- icheck -->
<script src="{{ asset('super_admin') }}/assets/node_modules/icheck/icheck.min.js"></script>
<script src="{{ asset('super_admin') }}/assets/node_modules/icheck/icheck.init.js"></script>

<script>
    $(document).ready(function() {

        var features = [];

        // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
        $('#crm_field').on('change', function(e) {

            e.preventDefault();

            $("#extra").css("display", "block");

        });

    });
</script>


@stack('css')
@stack('js')
