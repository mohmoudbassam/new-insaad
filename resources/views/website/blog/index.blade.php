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

        </div>
    </section>
    <section class="ourServices blogs" style="margin-top: 33px; ">
        <div class="container">

            <div class="row" >
            @foreach($articles as $index => $article)


              <div class="col-lg-4">
                  <div class="card g-box " style="width: 18rem;">
                      <img src="{{ asset( 'storage/'.$article->image)  }}" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">{{ $article->title }}</h5>
                          <p class="card-text">{{$article->description}}</p>
                          <a href="{{route('website.show',['lang'=>app()->getLocale(),'slug'=>$article->slug])}}" class="btn btn-primary">{{ __('dashboard.main.read_more') }}</a>
                      </div>
                  </div>
              </div>

            @endforeach
            </div>
            <div class="row ">
                <div class="d-flex justify-content-center">
                    <div>
                        {{ $articles->links('pagination::bootstrap-4') }}
                    </div>

                </div>
            </div>
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
