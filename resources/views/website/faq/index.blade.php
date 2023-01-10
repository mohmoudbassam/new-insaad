@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.faq") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.faqs", ["lang" => app()->getLocale()]),
            'description' => config("settings.bl_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
             'title' =>  __("home.faq")

        ])
@endsection


@push("styles")

@endpush

@section("content")

    <section class="about-us clearance clearance-p">
        <div class="container">
            <div class="accordion accordion-flush accordion-component" id="accordionFlushExample">
                            @include('website.faq.partials.faq',['faqs'=>$faqs])

            </div>
        </div>
    </section>

    </section>
@endsection

@push("scripts")

@endpush
