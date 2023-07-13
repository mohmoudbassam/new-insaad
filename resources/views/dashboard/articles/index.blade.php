@extends('dashboard.layouts.master')

@section('title')
    {{trans('dashboard.main.articles')}}
@endsection

@push("page-css")
    <link rel="stylesheet"
          href="{{asset('assets/dashboard/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/daatatable.min.css')}}"></link>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@endpush

@section("breadcrumb")

@endsection

@section('main-content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @success
            <div class="alert alert-success" role="alert">
                <div class="alert-body">
                    {{trans('dashboard.main.success') . ' ' . $message}}
                </div>
            </div>
            @endsuccess

            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{--                            <h2 class="content-header-title float-start mb-0">DataTables</h2>--}}
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a
                                            href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{trans('dashboard.main.Users')}}</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{route('articles.create',['lang' => app()->getLocale()])}}"
                           class="btn btn-success btn-rounded m-1 float-right">
                            <i data-feather='plus'></i> {{trans('dashboard.main.add_article')}}</a>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section id="basic-datatable">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table" id="items_table">
                                    <thead>
                                    <tr>
                                        <th>{{trans('dashboard.main.title')}}</th>
                                        <th>{{trans('dashboard.main.description')}}</th>
                                        <th> {{trans('dashboard.main.Created At')}}</th>
                                        <th> {{trans('dashboard.main.Actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>

@endsection

@push("page-js")
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>
    <script src="{{asset('assets/js/jquery-datatable.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>
        $(function () {
            $('#items_table').DataTable({
                "dom": 'tp',
                "searching": false,
                "processing": true,
                'stateSave': true,
                "serverSide": true,
                ajax: {
                    url: '{{route('articles.list',['lang' => app()->getLocale()])}}',
                    type: 'GET',
                    "data": function (d) {
                        d.name = $('#name').val();
                        d.email = $('#email_search').val();
                    }
                },
                columns: [
                    {className: 'text-center', data: 'title', name: 'title'},
                    {className: 'text-center', data: 'description', name: 'description'},
                    {className: 'text-center', data: 'created_at', name: 'created_at', orderable: false},
                    {className: 'text-center', data: 'actions', name: 'actions', orderable: false},
                ],
                @if(app()->getLocale() == 'ar')
                language: {
                    "url": "{{url('/')}}/assets/plugins/custom/datatables/Arabic.json"
                },
                @endif
            });

            $('.search_btn').click(function (ev) {
                $('#items_table').DataTable().ajax.reload(null, false);
            });

            $('.reset_search').click(function () {
                $('#name').val('');
                $('#email_search').val('');

                $('#items_table').DataTable().ajax.reload(null, false);
            });
        });

        function deleteArticle(id) {
            //delete confirmation

            swal({
                title: '{{__('dashboard.main.sure_delete')}}',
                text: '{{__('dashboard.main.sure_delete')}}',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: '{{__('dashboard.main.yes')}}',
                cancelButtonText: '{{__('dashboard.main.cancel')}}',
                dangerMode: false,
            }, function (asd) {
                if (asd) {
                    $.ajax({
                        url: '{{route('articles.delete',['lang' => app()->getLocale()])}}',
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'id': id
                        },

                        success: function (data) {

                            swal({
                                title: '{{__('dashboard.main.deleted_successfully')}}',
                                text: '{{__('dashboard.main.deleted_successfully')}}',
                                type: 'success',
                                timer: 2000,
                                showConfirmButton: false,
                            });
                            $('#items_table').DataTable().ajax.reload(null, false);

                        },
                        error: function (data) {
                            console.log(data);
                        },
                    });
                }
            });

        }
    </script>
@endpush
