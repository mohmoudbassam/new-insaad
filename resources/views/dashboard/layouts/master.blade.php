<!DOCTYPE html>

<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-textdirection="{{ (app()->getLocale() == "ar") ? "rtl" : "ltr" }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("settings.site_". app()->getLocale() . "_title") }} - @yield("title")</title>
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset( config("settings.site_favicon")) }}" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

@stack('before-css')

@livewireStyles


@if(app()->getLocale() == "ar")
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/css/vendors-rtl.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/css/forms/select/select2.min.css') }} ">

        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/bootstrap.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/bootstrap-extended.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/colors.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/components.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/themes/semi-dark-layout.css') }} ">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/core/menu/menu-types/vertical-menu.css') }} ">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/custom-rtl.css') }} ">
        <!-- END: Custom CSS-->

        <!-- BEGIN: edits CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/edits.css') }} ">
        <!-- END: edits CSS-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">



@else
    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/css/vendors.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/css/forms/select/select2.min.css') }} ">

        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap-extended.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/colors.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/components.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/themes/semi-dark-layout.css') }} ">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/core/menu/menu-types/vertical-menu.css') }} ">
        <!-- END: Page CSS-->
        <!-- BEGIN: edits CSS-->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/edits.css') }} ">
        <!-- END: edits CSS-->


@endif
<!-- page specific css -->
    @stack('page-css')
    {{--    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />--}}
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/ssi-uploader.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dropify.min.css') }} ">

</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">


@auth()
    @include('dashboard.partials.header-menu')
    @include('dashboard.partials.sidebar')
@endauth

{{--@yield('breadcrumb')--}}

@yield('main-content')

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@include('dashboard.partials.footer')


<!-- page specific javascript -->
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets/dashboard/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('assets/dashboard/js/core/app-menu.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/core/app.js') }}"></script>

<!-- END: Theme JS-->


<script>
  $(window).on("load", function () {
    if (feather) {
      feather.replace({
        width: 14,
        height: 14
      });
    }
  });
</script>
@stack('page-js')

@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

<script src="{{ asset('assets/dashboard/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/scripts/forms/form-select2.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/ssi-uploader.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/form-fileupload.init.js') }}"></script>


<script type="text/javascript">

  $(".ssi-uploader").ssi_uploader();


</script>
@stack('bottom-js')
</body>
</html>
