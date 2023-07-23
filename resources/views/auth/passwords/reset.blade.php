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
                        <!-- Reset Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="/" class="brand-logo">
                                    <img src="{{asset(config('settings.site_logo'))}}">
                                    <h2 class="brand-text text-primary ms-1">اسناد</h2>
                                </a>
                                <h4 class="card-title mb-1">{{trans('auth.Forgot password ?')}}</h4>

                                <form class="auth-reset-password-form mt-2" action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="reset-password-new">{{trans('auth.password')}}</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input
                                                type="password"
                                                class="form-control form-control-merge"
                                                id="reset-password-new"
                                                name="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="reset-password-new"
                                                tabindex="1"
                                                autofocus
                                            />
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    @error("password")
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <input id="email" type="hidden" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="reset-password-confirm">{{trans('auth.Confirm New Password')}}</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input
                                                type="password"
                                                class="form-control form-control-merge"
                                                id="reset-password-confirm"
                                                name="password_confirmation"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="reset-password-confirm"
                                                tabindex="2"
                                            />
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>

                                        @error("password")
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="3">Set New Password</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="{{route('login')}}"> <i data-feather="chevron-left"></i> Back to login </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Reset Password basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
