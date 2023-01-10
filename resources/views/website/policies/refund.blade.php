@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.refund") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.refund", ["lang" => app()->getLocale()]),
            'description' => config("settings.about_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
                        'title' =>  __("home.refund")

        ])
@endsection



@push("styles")

@endpush

@section("content")

    <section class="breadCrumb" style="background-image: url({{asset('assets/website/images/breadcrumb4.png')}})">
        <div class="container">
            <div class="breadCrumb__content">
                <h3>{{trans('home.refund')}}</h3>

            </div>
        </div>
    </section>
    <section class="aboutUs">
        <div class="container">
            <div class="sec_title" data-aos="fade-up">
                <h4 class="main_title">{{trans('home.refund')}}</h4>
            </div>

            <div data-aos="fade-up">
                <p>{!! $refund->refund !!}</p>
            </div>


        </div>
    </section>

@endsection


@push("scripts")

@endpush
