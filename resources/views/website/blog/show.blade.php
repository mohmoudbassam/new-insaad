@extends("website.layouts.master")

@section("page-title")
    - {{$article->title }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.services.show", ["lang" => app()->getLocale(),'slug'=>$article->slug]),
            'description' => config("settings.site_" . app()->getLocale() . "_description"),
            'image' => config("settings.site_logo"),
            'title' => $article->title
        ])
@endsection

@section("page-header-area")
    @include("website.partials.page-header")
@endsection

@push("styles")

@endpush

@section("content")

    <section class="clearance-sec">

        <div class="container">
            @error('services')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="service" style="margin-top: 30px" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="service-text">
                            <h2>{{ $article->title }}</h2>
                            <p>{!! $article->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img">
                            <!-- asset( $service->image->image) -->
                            {{--                                @dd($service->image)--}}
                            <img src="{{ asset( 'storage/'.$article->image)  }}" class="img-fluid"
                                 alt="service">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection


@push("scripts")
@endpush
