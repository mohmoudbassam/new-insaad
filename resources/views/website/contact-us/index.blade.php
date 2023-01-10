@extends("website.layouts.master")

@section("page-title")
    - {{ __("home.contact_us") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.contact_us", ["lang" => app()->getLocale()]),
            'description' => config("settings.contact_" . app()->getLocale() . "_meta"),
            'image' => config("settings.site_logo"),
            'title' =>  __("home.contact_us")

        ])
@endsection


@push("styles")

@endpush

@section("content")
    <section class="breadCrumb" style="background-image: url({{asset('assets/website/images/breadcrumb9.png')}})">
        <div class="container">
            <div class="breadCrumb__content">
                <h3>{{trans('home.contact_us')}}</h3>
{{--                <nav>--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item">--}}
{{--                            <a href="index.html">الرئيسية</a>--}}
{{--                        </li>--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">--}}
{{--                            تواصل معنا--}}
{{--                        </li>--}}
{{--                    </ol>--}}
{{--                </nav>--}}
            </div>
        </div>
    </section>
    <section class="aboutUs contactUs">
        <div class="container">
            <h4 class="main_title">{{trans('contact-us.send_message')}}</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="image" data-aos="fade-up">
                        <img src="{{asset('assets/website/images/contactUsImage.png')}}" alt="contactUsImage" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{route('website.contact_us.store',app()->getLocale())}}" class="proForm" data-aos="fade-up" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="name">{{trans('contact-us.your_name')}}</label>
                            <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="ادخل اسمك" >
                            @error("name")
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email">{{trans('contact-us.email')}}</label>
                            <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="info@gmail.com : مثال" >
                            @error("email")
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="phone">{{trans('contact-us.phone')}}</label>
                            <input type="text" value="{{old('phone')}}" name="phone" id="phone" class="form-control" placeholder="+9674454545 : مثال" >
                            @error("phone")
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="message">{{trans('contact-us.your_message')}}</label>
                            <textarea name="message" id="message" class="form-control"  placeholder="ادخل نص الرسالة">{{old('message')}}</textarea>
                            @error("message")
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
                            <button class="btn submitBtn">{{trans('contact-us.send_message')}}</button>
                        </div>

                    </form>
                </div>
            </div>
            <h4 class="main_title">{{trans('contact-us.branches')}}</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="branch">
                        <div class="head">
                            <img src="{{asset('assets/website/images/flags/turkey.png')}}" alt="turkey">
                            <span>{{trans('contact-us.turkey branch')}}</span>
                        </div>
                        <ul class="list-unstyled links">
                            <li>
                                <a href="mailto:{{ config("settings.turkey_email") ?? "" }}"><img src="{{asset('assets/website/images/envelopColor.png')}}" alt="envelop"> {{ config("settings.turkey_email") ?? "" }}</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/website/images/phoneColor.png')}}" alt="phone">
                                <div class="phons">
                                    <a href="tel:+{{ config("settings.turkey_phone_number1") ?? "" }}">{{ config("settings.turkey_phone_number1") ?? "" }}</a> -
                                    <a href="tel:+{{ config("settings.turkey_phone_number2") ?? "" }}">{{ config("settings.turkey_phone_number2") ?? "" }}</a> -
                                    <a href="tel:+{{ config("settings.turkey_phone_number3") ?? "" }}">{{ config("settings.turkey_phone_number3") ?? "" }}</a>
                                </div>
                            </li>
                            <li>
                                <a href="https://www.google.com/maps/search/{{ config("settings.turkey_address") ?? "" }}/@41.0177438,28.8476928,12z/data=!3m1!4b1"
                                   target="_blank">
                                    <img src="{{asset('assets/website/images/locationColor.png')}}" alt="loacation">  {{ config("settings.turkey_address") ?? "" }}</a>
                            </li>
                        </ul>
                        <div class="messageUs">
                            <h5>{{trans('contact-us.contact us here')}}</h5>
                            <div class="actions">
                                <a href="https://wa.me/{{ config("settings.turkey_social_whatsapp") ?? "" }}" class="btn submitBtn whatsapp">
                                    <img src="{{asset('assets/website/images/whatsapp.png')}}" alt="whatsapp">
                                    <span>{{trans('contact-us.whatsup contact')}}</span>
                                </a>

                                <a href="{{ config("settings.turkey_social_telegram") ?? "" }}" class="btn submitBtn telegram">
                                    <img src="{{asset('assets/website/images/telegram.png')}}" alt="telegram">
                                    <span>{{trans('contact-us.telegram contact')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="messageUs socialSec">
                            <h5>{{trans('blog.Follow us')}}</h5>
                            <div class="social">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{ config("settings.social_youtube") }}" class="youtube"><i class="fab fa-youtube"
                                                                                                             target="_blank"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ config("settings.social_telegram") }}" class="telegram"><i
                                                    class="fab fa-telegram-plane"
                                                    target="_blank"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ config("settings.social_instagram") }}" class="instagram"><i
                                                    class="fab fa-instagram"
                                                    target="_blank"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="branch">
                        <div class="head">
                            <img src="{{asset('assets/website/images/flags/turkey.png')}}" alt="turkey">
                            <span>{{trans('contact-us.egypt branch')}}</span>
                        </div>
                        <ul class="list-unstyled links">
                            <li>
                                <a href="mailto:{{ config("settings.egypt_email") ?? "" }}"><img src="{{asset('assets/website/images/envelopColor.png')}}" alt="envelop"> {{ config("settings.egypt_email") ?? "" }}</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/website/images/phoneColor.png')}}" alt="phone">
                                <div class="phons">
                                    <a href="tel:{{ config("settings.egypt_phone_number1") ?? "" }}">{{ config("settings.egypt_phone_number1") ?? "" }}</a> -
                                    <a href="tel:{{ config("settings.egypt_phone_number2") ?? "" }}">{{ config("settings.egypt_phone_number2") ?? "" }}</a> -
                                    <a href="tel:{{ config("settings.egypt_phone_number3") ?? "" }}">{{ config("settings.egypt_phone_number3") ?? "" }}</a>
                                </div>
                            </li>
                            <li>
                                <a href="https://www.google.com/maps/search/{{ config("settings.egypt_address") ?? "" }}/@30.0392907,31.1981802,16z/data=!3m1!4b1"
                                   target="_blank">
                                    <img src="{{asset('assets/website/images/locationColor.png')}}" alt="loacation">  {{ config("settings.egypt_address") ?? "" }}</a>
                            </li>
                        </ul>
                        <div class="messageUs">
                            <h5>{{trans('contact-us.contact us here')}}</h5>
                            <div class="actions">
                                <a href="https://wa.me/{{ config("settings.egypt_social_whatsapp") ?? "" }}" class="btn submitBtn whatsapp">
                                    <img src="{{asset('assets/website/images/whatsapp.png')}}" alt="whatsapp">
                                    <span>{{trans('contact-us.whatsup contact')}}</span>
                                </a>
                                <a href="{{ config("settings.egypt_social_telegram") ?? "" }}" class="btn submitBtn telegram">
                                    <img src="{{asset('assets/website/images/telegram.png')}}" alt="telegram">
                                    <span>{{trans('contact-us.telegram contact')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="messageUs socialSec">
                            <h5>{{trans('blog.Follow us')}}</h5>
                            <div class="social">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{ config("settings.social_youtube") }}" class="youtube"><i class="fab fa-youtube"
                                                                                                             target="_blank"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ config("settings.social_telegram") }}" class="telegram"><i
                                                    class="fab fa-telegram-plane"
                                                    target="_blank"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ config("settings.social_instagram") }}" class="instagram"><i
                                                    class="fab fa-instagram"
                                                    target="_blank"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection


@push("scripts")

@endpush
