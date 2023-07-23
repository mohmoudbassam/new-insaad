@extends("website.layouts.master")

@section("page-title")
     {{ __("application.application") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.index", ["lang" => app()->getLocale()]),
            'description' => config("settings.site_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
                                                'title' =>  __("application.application")

        ])
@endsection

@push("styles")

@endpush

@section("content")
    <main>

        @include('website.home.partials.start')

    </main>

@endsection

@push("scripts")
@endpush
