@extends("website.layouts.master")

@section("page-title")
     {{ __("home.services") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.about", ["lang" => app()->getLocale()]),
            'description' => config("settings.site_" . app()->getLocale() . "_description"),
            'image' => config("settings.site_logo"),
            'title' =>  __("home.services")

        ])
@endsection



@push("styles")

@endpush

@section("content")
    <section class="breadCrumb ourAgent"
             style="background-image: url({{asset('assets/website/images/breadcrumb10.png')}});">
        <div class="container">
            <div class="breadCrumb__content">
                <h3>{{ __('home.company services') }}</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('website.index',['lang'=>app()->getLocale()])}}">{{__('home.home')}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('home.services') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="ourAgent">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10  order-lg-0 order-1">
                    <div class="formBox">
                        <form action="{{ route('website.service.store', ['lang' => app()->getLocale()]) }}"
                              method="post" class="proForm">
                            @csrf
                            <div class="form-group">
                                <div class="service-text text-center ">
                                    <h2 class="m-2">{{ __('home.selected services') }}</h2>
                                    <ul class="list-unstyled">
                                        @foreach($services as  $service)
                                            <li class="m-2">
                                                <input hidden value="{{$service->id}}" name="services[]">
                                                <img src="{{ asset('assets/website/images/icons/right.png') }}"
                                                     alt="right">
                                                {{$service->title}}
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="name">{{ __('application.Name') }}</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       placeholder="{{ __('application.Name') }}">
                                @error("name")
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">{{ __('application.email') }}</label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="info@gmail.com : {{ __('application.example') }}">

                                @error("email")
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="whats_number">{{ __('application.whatsapp') }}</label>
                                <input type="text" name="whats_number" id="whats_number" class="form-control"
                                       placeholder=" +9674454545 : {{ __('application.example') }}">

                                @error("whats_number")
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" class="control-label" for="address"></label>
                                {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs(app()->getLocale(), false, 'recaptchaCallback') !!}
                                {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::display() !!}
                                @error("g-recaptcha-response")
                                <div class="text-danger">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn submitBtn" type="submit">{{ __('home.send request') }}</button>
                                {{--                                <button class="btn submitBtn" type="button" data-bs-toggle="modal"--}}
                                {{--                                        data-bs-target="#exampleModal">{{ __('application.send request') }}</button>--}}
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/website/images/corectIcon.png') }}" alt="correct">
                    <h4>{{ __('application.request sent successfully') }}</h4>
                    <p>{{ __('application.agent request sent successfully') }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection


@push("scripts")

@endpush
