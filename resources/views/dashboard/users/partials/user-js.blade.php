@push('page-js')

    <script src="{{asset('assets/dashboard/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/datatables.script.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/vendor/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $('#zero_configuration_table').DataTable({
                processing: true,
                serverSide: true,
                destroy: true,

                ajax: '{!! route('users.list') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });

        var deleter = {

                linkSelector: "a#delete-btn",

                init: function () {
                    $(this.linkSelector).on('click', {self: this}, this.handleClick);
                },

                handleClick: function (event) {
                    event.preventDefault();

                    var self = event.data.self;
                    var link = $(this);

                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#0CC27E',
                        cancelButtonColor: '#FF586B',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        confirmButtonClass: 'btn btn-success mr-5',
                        cancelButtonClass: 'btn btn-danger',
                        buttonsStyling: false
                    }).then(function () {
                        var cr = $('meta[name="csrf-token"]').attr('content');
                        var o = link;
                        // alert(cr);
                        $(o).append('<i class="fa fa-spin fa-spinner"></i>');
                        $.post($(o).attr('href'), {
                            _token: cr,
                            _method: 'DELETE'
                        }, function (data) {
                            $(o).find('i').remove();
                            $(o).append('<i class="fa fa-check"></i>');
                            setTimeout(function () {
                                $(o).parent().parent().remove();
                                if (typeof cb == 'function') {
                                    cb();
                                }
                            }, 1000);
                        });
                        swal(
                            'Deleted!',
                            'User has been deleted.',
                            'success'
                        )
                    }, function (dismiss) {
                        if (dismiss === 'cancel') {
                            swal(
                                'Cancelled',
                                'Your imaginary User is safe :)',
                                'error'
                            )
                        }
                    })

                },
            };
        deleter.init();
    </script>


@endpush