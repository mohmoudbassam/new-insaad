@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.home") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.index", ["lang" => app()->getLocale()]),
            'description' => config("settings.site_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
                                                'title' =>  __("home.home")
        ])
@endsection

@push("styles")

@endpush

@section("content")
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="slider-content">
                            <h1><span>{{trans('home.isnaad')}}</span>{{trans('home.connect_you_with_clients')}}</h1>
                            <p>
                                {{trans('home.manage & deliver')}}
                                <span>{{trans('home.because isnaad')}}</span>
                            </p>
                            <a href="#about-us" class="btn secondaryBtn shared">{{trans('home.why isnaad?')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@include('website.home.partials.about-us')
@include('website.home.partials.services-short')
@include('website.home.partials.percentage_and_counts')
@include('website.home.partials.services')

@include('website.home.partials.clients')
@include('website.home.partials.partners')
@include('website.home.partials.start')
@include('website.home.partials.contact-us')

    </main>

@endsection

@push("scripts")
@endpush
