@extends('dashboard.layouts.master')

@section('main-content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Forgot Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="/" class="brand-logo">
                                    <img src="{{asset(config('settings.site_logo'))}}">
                                    <h2 class="brand-text text-primary ms-1">اسناد</h2>
                                </a>


                                <h4 class="card-title mb-1">{{trans('auth.Forgot password ?')}}</h4>
                                <p class="card-text mb-2">{{trans('auth.Enter your email to reset you password.')}}</p>

                                <form class="auth-forgot-password-form mt-2" action="{{route('password.email')}}" method="POST">
                                    @csrf
                                    @success
                                    <div class="text-success">{{$message}}</div>
                                    @endsuccess
                                    <div class="mb-1">
                                        <label for="forgot-password-email" class="form-label">{{trans('auth.Email')}}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="forgot-password-email"
                                            name="email"
                                            placeholder="john@example.com"
                                            aria-describedby="forgot-password-email"
                                            tabindex="1"
                                            autofocus
                                        />
                                    </div>
                                    @error('email')<div class="text-danger">{{$message}}</div>@enderror
                                    <button class="btn btn-primary w-100" tabindex="2">{{trans('home.send request')}}</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="{{route('login')}}"> <i data-feather="chevron-left"></i>{{trans('auth.login')}} </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
