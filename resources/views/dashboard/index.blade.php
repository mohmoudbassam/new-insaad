@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.main.dashboard')}}
@endsection

@push("before-css")

@endpush

@push("page-css")
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" type="text/css"
              href="{{asset('assets/dashboard/css-rtl/pages/dashboard-ecommerce.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/plugins/charts/chart-apex.css')}}">

    @else
        <link rel="stylesheet" type="text/css"
              href="{{asset('assets/dashboard/css/pages/dashboard-ecommerce.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/plugins/charts/chart-apex.css')}}">

    @endif

@endpush

@section("breadcrumb")

@endsection

@section("main-content")
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">

                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('dashboard.main.Latest applications')}}</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0"></p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        @livewire('dashboard.applications')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>


                    <div class="row match-height">
                        <!-- Company Table Card -->

                        <!--/ Company Table Card -->

                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push("page-js")
    <script src="{{asset('assets/dashboard/vendors/js/charts/apexcharts.min.js')}}"></script>
@endpush

@push("bottom-js")

@endpush

