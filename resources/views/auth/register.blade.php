@extends("website.layouts.master")

@section("page-title")
    - {{ __("auth.Register") }}
@endsection

@section("seo-tags")
    @include("website.partials.seo-tags",
        [
            'pageUrl' => route("website.universities.index", ["lang" => app()->getLocale()]),
            'description' => config("settings.site_" . app()->getLocale() . "_description"),
            'image' => config("settings.site_logo"),
            'title' => __('auth.Register')
        ])
@endsection


@push("styles")

@endpush

@section("content")
    <section class="breadCrumb">
        <div class="container">
            <div class="breadCrumb__content">
                <h3> {{__('auth.Register')}}</h3>
                <span>
            {{__('auth.Sign up for a free account')}}
          </span>
            </div>
        </div>
    </section>
    <section class="login p-t-b" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec_title side" >
                        <img src="/assets/website/images/Logo.svg" class="title_img" alt="logo">
                        <h4 class="title">{{__('auth.Register')}}</h4>
                        <p class="desc">
                            {{__('auth.Sign up for a free account')}}
                        </p>

                    </div>
                </div>
                <div class="col-lg-7">

                    <div class="login-form ">
                        <form action="{{route('register')}}" method="post" class="proForm">
                            @csrf
                            <div class="form-group withIcon">
                                <label class="control-label" for="UserName">{{__('validation.attributes.username')}}</label>
                                <input type="text" name="first_name" id="UserName" class="form-control" value="{{old('first_name')}}"
                                       placeholder="Ex : Mazen Mahmoud">
                                <img src="/assets/website/images/user.svg" class="fieldIcon" class="icon" alt="user">
                            </div>
                            @error('first_name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group withIcon">
                                <label class="control-label" for="email">{{__('auth.Email')}}</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Ex : info@gmail.com">
                                <img src="/assets/website/images/email.svg" class="fieldIcon" class="icon" alt="email" >
                            </div>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group withIcon">
                                <label class="control-label" for="phone">{{__('application.phone')}}</label>
                                <input type="text" name="phone" id="phone" class="form-control phone" placeholder="79745424" value="{{old('phone')}}">
{{--                                <div class="keys">--}}
{{--                                    <input type="text" name="phone" id="phone" class="form-control  " value="+966">--}}
{{--                                    <img src="/assets/website/images/turkey.png" alt="turkey">--}}
{{--                                </div>--}}
                            </div>
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
{{--                            <div class="form-group  ">--}}
{{--                                <label class="control-label" for="fullName"> {{__('universities.country')}}</label>--}}
{{--                                <select class="js-example-basic-single form-control" name="country">--}}
{{--                                    <option value="" disabled selected>{{__('application.choose country')}}</option>--}}
{{--                                    <option value="AL"> Egypt</option>--}}
{{--                                    <option value="AL">qutar</option>--}}
{{--                                    <option value="WY">india</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            @error('country')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                            <div class="form-group withIcon">
                                <label class="control-label" for="Password">{{__('auth.password')}}</label>
                                <input type="password" name="password" id="Password" class="form-control"
                                       placeholder="Your Password">
                                <img src="/assets/website/images/password.svg" class="fieldIcon" alt="Password">
                                <img src="/assets/website/images/show.svg" class="showPassword" alt="show">
                            </div>
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group withIcon">
                                <label class="control-label" for="conPassword">{{__('dashboard.user.Confirm Password')}}</label>
                                <input type="password" name="password_confirmation" id="conPassword" class="form-control"
                                       placeholder="Your Password">
                                <img src="/assets/website/images/password.svg" class="fieldIcon" alt="Password">
                                <img src="/assets/website/images/show.svg" class="showPassword" alt="show">
                            </div>
                            @error('password_confirmation')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                            <div class="form-group   fogetPass terms">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="terms">
                                    <label class="form-check-label" for="terms">
                                        {{__('auth.Agree All')}}
                                        <a href="#" class="openForgetPassword" target="_blank"> {{__('application.Terms And Condition')}}</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group   submit">
                                <button class="btn primaryBtn shared" type="submit" data-bs-toggle="modal" data-bs-target="#created">
                                    <img src="/assets/website/images/arrow-right-circle.svg" class="iconsm" alt="arrow">
                                    {{__('auth.Register')}}
                                </button>
                            </div>
                            <p class="havAcc">{{__('auth.Already have an account')}}  <a href="{{route('login')}}"> {{__('auth.login')}}</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
