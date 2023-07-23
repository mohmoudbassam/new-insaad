@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.main.Settings')}}
@endsection

@push("before-css")


@endpush

@push("page-css")
    {{--    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/css/custom/ui-edit-setting.css')}}">--}}

@endpush

@section("main-content")
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">{{__('dashboard.settings.Settings')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard.index',['lang'=>app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{__('dashboard.settings.Settings')}}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic and Outline Pills start -->
                <section id="basic-and-outline-pills">
                    <div class="row match-height">
                        <!-- Basic pills starts -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active tabBorder" id="home-tab" data-bs-toggle="pill" href="#home"
                                           aria-expanded="true">{{trans('dashboard.settings.General Settings')}}</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link tabBorder" id="logo-tab" data-bs-toggle="pill" href="#logo"
                                           aria-expanded="true">{{trans('dashboard.settings.Site Logo')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tabBorder" id="social-tab" data-bs-toggle="pill" href="#social"
                                           aria-expanded="true">{{trans('dashboard.settings.Social Links')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tabBorder" id="social-tab" data-bs-toggle="pill" href="#phone"
                                           aria-expanded="true">{{trans('dashboard.settings.Phone Numbers')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tabBorder" id="seo-tab" data-bs-toggle="pill" href="#seo"
                                           aria-expanded="true">SEO</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    @include('dashboard.settings.includes.general-settings')
                                    @include('dashboard.settings.includes.site-logo')
                                    @include('dashboard.settings.includes.social-links')
                                    @include('dashboard.settings.includes.phone_numbers')
                                    @include('dashboard.settings.includes.seo')

                                </div>
                            </div>
                        </div>
                        <!-- Basic pills ends -->
                    </div>
                </section>
                <!-- Basic and Outline Pills end -->


            </div>
        </div>
    </div>

@endsection

@push("page-js")
{{--    <script async defer--}}
{{--            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhn_h7PC1k3TB3v9Hj7HsSKwKozh3sCf8&libraries=places&callback=initMap"></script>--}}
{{--    <script src="{{ asset("assets/dashboard/js/map.js") }}"></script>--}}


@endpush

@push("bottom-js")

@endpush
