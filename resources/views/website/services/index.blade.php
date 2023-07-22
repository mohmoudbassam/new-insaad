@extends("website.layouts.master")

@section("page-title")
     {{ __("home.our_services") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.services.index", ["lang" => app()->getLocale()]),
            'description' => config("settings.site_" . app()->getLocale() . "_description"),
            'image' => config("settings.site_logo"),
            'title' =>  __("home.our_services")
        ])
@endsection

@section("page-header-area")
    @include("website.partials.page-header", ['pageHeaderTitle' => 'home.our_services'])
@endsection

@push("styles")

@endpush

@section("content")
    <section class="breadCrumb" style="background-image: url({{asset('assets/website/images/breadcrumb7.png')}});">
        <div class="container">
            <div class="breadCrumb__content">
                <h3>{{ __('home.our_services') }}</h3>
                {{--                <nav>--}}
                {{--                    <ol class="breadcrumb">--}}
                {{--                        <li class="breadcrumb-item">--}}
                {{--                            <a href="{{route('website.index',['lang'=>app()->getLocale()])}}">{{__('home.home')}}</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="breadcrumb-item active" aria-current="page">{{ __('home.our_services') }}</li>--}}
                {{--                    </ol>--}}
                {{--                </nav>--}}
            </div>
        </div>
    </section>
    <section class="ourServices blogs">
        <div class="container">
            @error('services')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            @foreach($services as $index => $service)
                <div class="service @if($index % 2 == 0) left @endif " data-aos="fade-up">
                    <div class="row">
                        @if($index % 2 == 0)
                            <div class="col-lg-6">
                                <div class="service-text">
                                    <h2>{{ $service->title }}</h2>
                                    <p>{!! $service->description !!}</p>

                                    <a href="#" class="btn submitBtn request-service">
                                        <img data-src="{{ asset('assets/website/images/arrowBtn.png') }}" alt="search">
                                        <span>{{ __('services.Service Request') }}</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="img">
                                    <!-- asset( $service->image->image) -->
                                    {{--                                @dd($service->image)--}}
                                    <img data-src="{{ asset( $service->image->image)  }}" class="img-fluid"
                                         alt="service">
                                </div>
                            </div>
                        @else

                            <div class="col-lg-6">
                                <div class="img">
                                    <img data-src="{{ asset( $service->image->image)  }}" class="img-fluid"
                                         alt="service">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="service-text">
                                    <h2>{{ $service->title }}</h2>
                                    <p>{!! $service->description !!}</p>

                                    <a href="#" class="btn submitBtn request-service">
                                        <img data-src="{{ asset('assets/website/images/arrowBtn.png') }}" alt="search">
                                        <span>{{ __('services.Service Request') }}</span>
                                    </a>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            @endforeach
            @livewire('website.services')


        </div>
    </section>



@endsection


@push("scripts")
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('element.updated', (el, component) => {
                const images = document.querySelectorAll("[data-src]");
                const imgOptions = {
                    threshold: 0,
                    rootMargin: "0px 0px 300px 0px"
                }

                function preloadImage(img) {
                    const src = img.getAttribute('data-src');
                    if (!src) {
                        return;
                    }
                    img.src = src
                }

                const imgObserver = new IntersectionObserver((entries, imgObserver) => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) {
                            return;
                        } else {
                            preloadImage(entry.target)
                            imgObserver.unobserve(entry.target)
                        }
                    })
                }, imgOptions)
                images.forEach(image => {
                    imgObserver.observe(image);
                })
            })
        });


    </script>
@endpush
