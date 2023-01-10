@extends("website.layouts.master")

@section("page-title")
    - {{$service->title }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.services.show", ["lang" => app()->getLocale(),'slug'=>$service->slug]),
            'description' => config("settings.site_" . app()->getLocale() . "_description"),
            'image' => config("settings.site_logo"),
            'title' => $service->title
        ])
@endsection

@section("page-header-area")
    @include("website.partials.page-header")
@endsection

@push("styles")

@endpush

@section("content")

    @if(view()->exists('website.services.partials.'.strtolower($service->translate('en')->slug)))
        @include('website.services.partials.'.strtolower($service->translate('en')->slug))
    @else

        <section class="clearance-sec">
            <div class="container">
                <div class="sec_title text-center" data-aos="fade-up">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <p class="desc">{{trans('404.404_not_found')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection


@push("scripts")
@endpush
