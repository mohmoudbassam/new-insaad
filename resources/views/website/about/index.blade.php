@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.about") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.about", ["lang" => app()->getLocale()]),
            'description' => config("settings.about_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
                        'title' =>  __("home.about")

        ])
@endsection



@push("styles")

@endpush

@section("content")

    <main>

        @include('website.home.partials.about-us')

    </main>
@endsection


@push("scripts")

@endpush
