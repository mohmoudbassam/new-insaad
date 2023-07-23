<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{asset( config("settings.site_favicon")) }}"/>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/png" href="{{asset(config('settings.site_logo'))}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="#333333" data-react-helmet="true" name="theme-color"/>


    <link rel="stylesheet" href="{{ mix('assets/website/css/bundle-style.css') }}"/>

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/website/SCSS/ar-eg/layout-ar.css') }}"/>
    @else
        <link rel="stylesheet" href="{{ asset('assets/website/SCSS/en-us/layout.css') }}"/>
    @endif

    @yield("seo-tags")

    <link rel="shortcut icon" href="{{ asset( config("settings.site_favicon")) }}" type="image/x-icon"/>

    <title>@yield("page-title")</title>
    @stack('before-css')

    @livewireStyles

    <style>
        .line {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        @media (max-width: 991px) {
            .service_has_padding {
                margin-top: 30px !important;
            }
        }


    </style>
    @stack('page-css')

</head>

<body>
@if(Route::is('website.index'))
    @include('website.partials.header')
@else
    @include('website.partials.page-header')
@endif

<!--  Message Sent  Modal -->
<div class="modal fade generalModal" id="messageSent" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <h4 class="title text-center" id="sessionTitle">Message Sent !</h4>
                <p class="desc text-center" id="sessionMessage">Message was sent to our staff successfullly</p>

            </div>
        </div>
    </div>
</div>
<main>
    @yield('content')
</main>

@include('website.partials.footer')
<div class="over-nav"></div>

<!-- loading section-->
<div class="loading" delay-hide="1000"></div>

<a href="https://wa.me/{{ config("settings.social_whatsapp")}}" class="whatsAppFixed" target="_blank"><i
        class="fab fa-whatsapp"></i> </a>

@stack('scripts')

@livewireScripts
{{--@if(app()->getLocale() == 'ar')--}}
<script src="{{mix('assets/website/js/bundle-script.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XEXMHRTS8C"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-XEXMHRTS8C');
</script>
{{--@else--}}
{{--    <script src="{{mix('assets/website/js/bundle-script.js')}}"></script>--}}
{{--@endif--}}

@include('website.partials.google-analytics')



@stack('bottom-js')
</body>
</html>
