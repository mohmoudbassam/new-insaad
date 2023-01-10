@extends('dashboard.layouts.master')
@section('main-content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
{{--                        <!-- Brand logo--><a class="brand-logo" href="/">--}}
{{--                            <img src="{{asset(config('settings.site_logo'))}}">--}}
{{--                            <h2 class="brand-text text-primary ms-1">{{trans('home.the Egyptian Forum for Competencies')}}</h2>--}}
{{--                        </a>--}}
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-md-6 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid w-100" src="{{asset('assets/website/images/logo-dark.png')}}"></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="col-md-6 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        {{$error}}
                                    @endforeach
                                @endif
                                <h2 class="card-title fw-bold mb-1">{{config('settings.site_'.app()->getLocale().'_title')}}</h2>
                                <form class="auth-login-form mt-2" action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">{{trans('auth.Email')}}</label>
                                        <input class="form-control" id="login-email" type="text" name="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1"/>
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">{{trans('auth.password')}}</label><a href="{{route('password.request')}}"><small>{{trans('auth.Forgot password ?')}}</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2"/><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3"/>
                                            <label class="form-check-label" for="remember-me"> {{trans('auth.Remember me')}}</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4">{{trans('auth.login')}}</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection
