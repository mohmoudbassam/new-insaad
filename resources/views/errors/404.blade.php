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


<!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendors/css/vendors-rtl.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/bootstrap-extended.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/colors.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/components.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/themes/semi-dark-layout.css') }} ">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/core/menu/menu-types/vertical-menu.css') }} ">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/pages/page-misc.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css-rtl/custom-rtl.css') }} ">
    <!-- END: Custom CSS-->

</head>
<body class="pace-done vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  "
      data-open="click" data-menu="vertical-menu-modern" data-col="blank-page" data-new-gr-c-s-check-loaded="14.1033.0"
      data-gr-ext-installed="" cz-shortcut-listen="true">
<div class="pace pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Error page-->
            <div class="misc-wrapper"><a class="brand-logo" href="index.html">
                    <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                        <defs>
                            <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                <stop stop-color="#000000" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                <g id="Group" transform="translate(400.000000, 178.000000)">
                                    <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                    <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                    <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                    <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                </g>
                            </g>
                        </g>
                    </svg>
               </a>
                <div class="misc-inner p-2 p-sm-3">
                    <div class="w-100 text-center">
                        <h2 class="mb-1">Page Not Found 🕵🏻‍♀️</h2>
                        <p class="mb-2">Oops! 😖 The requested URL was not found on this server.</p><a class="btn btn-primary mb-2 btn-sm-block waves-effect waves-float waves-light" href="{{url()->previous()}}">Back to home</a><img class="img-fluid" src="{{asset('assets/dashboard/images/pages/error.svg')}}" alt="Error page">
                    </div>
                </div>
            </div>
            <!-- / Error page-->
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<!-- page specific javascript -->
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets/dashboard/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('assets/dashboard/js/core/app-menu.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/core/app.js') }}"></script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

<script>
  $(window).on("load", function () {
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  });
</script>

<!-- END: Body-->
</body>
</html>
