@extends("dashboard.layouts.master")

@section("title")
    {{__('dashboard.faq.All faq')}}
@endsection

@push("page-css")
    <link rel="stylesheet"
          href="{{asset('assets/dashboard/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@section("breadcrumb")


@endsection

@section('main-content')


    @success

    @endsuccess
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{--                            <h2 class="content-header-title float-start mb-0">DataTables</h2>--}}
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.faq.All faq")}}</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{route('faqs.create',['lang' => app()->getLocale()])}}" class="btn btn-success btn-rounded m-1 float-right">
                            <i data-feather='plus'></i>  {{trans("dashboard.faq.Add faq")}}</a>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @livewire('dashboard.faqs')

            </div>
        </div>
    </div>

@endsection

@push("page-js")
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>
@endpush

