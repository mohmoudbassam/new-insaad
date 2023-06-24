@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.track_your_shipment") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.track", ["lang" => app()->getLocale()]),
            'description' => config("settings.about_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
                        'title' =>  __("home.about")

        ])
@endsection



@push("styles")

@endpush

@section("content")

    <main>

        @include('website.home.partials.track')

    </main>
@endsection


@push("scripts")

@endpush
