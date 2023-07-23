@extends('dashboard.layouts.master')

@section('title')
    {{trans('dashboard.main.applications')}}
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
                                    <li class="breadcrumb-item "><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
                                    <li class="breadcrumb-item active">{{trans('dashboard.main.applications')}}</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                @livewire('dashboard.applications')

            </div>
        </div>
    </div>

@endsection

@push("page-js")
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>
@endpush


