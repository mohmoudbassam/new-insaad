@extends('dashboard.layouts.master')

@section('title')
    {{__('dashboard.user.Add user')}}
@endsection

@push('before-css')

    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/image-uploader.css') }} ">

@endpush


@section('main-content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">{{trans('dashboard.user.Add user')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="{{route('users.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.Users')}}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <form class="form form-vertical needs-validation" method="POST"
                          action="{{route('users.store',['lang' => app()->getLocale()])}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="first-name-icon">{{trans('dashboard.user.Name')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='user'></i></span>
                                                        <input type="text" id="first-name-icon" class="form-control
                                                                @error("first_name") is-invalid @enderror"
                                                               name="first_name" value="{{ old('first_name')}}"
                                                               required>
                                                        @error("first_name")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="first-name-icon">{{trans('dashboard.user.last name')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='user'></i></span>
                                                        <input type="text" id="first-name-icon" class="form-control
                                                                @error("last_name") is-invalid @enderror"
                                                               name="last_name" value="{{ old('last_name')}}" required>
                                                        @error("last_name")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="email-id-icon">{{trans('dashboard.user.Email')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='mail'></i></span>
                                                        <input type="email" id="email"
                                                               class="form-control @error("email") is-invalid @enderror"
                                                               name="email" value="{{ old('email')}}" required>
                                                        @error("email")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="contact-info-icon"> {{trans('dashboard.user.phone')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather='smartphone'></i></span>
                                                        <input type="text" id="contact-info-icon" class="form-control
                                                                @error("phone") is-invalid @enderror"
                                                               name="phone" value="{{ old('phone')}}">
                                                        @error("phone")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="password-icon">{{trans('dashboard.user.Password')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='lock'></i></span>
                                                        <input type="password" id="password-icon"
                                                               class="form-control @error("password") is-invalid @enderror"
                                                               name="password">
                                                        @error("password")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="password-icon">{{trans('dashboard.user.Confirm Password')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='lock'></i></span>
                                                        <input type="password" id="password-icon"
                                                               class="form-control @error("password_confirmation") is-invalid @enderror"
                                                               name="password_confirmation">
                                                        @error("password_confirmation")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="contact-info-icon">{{trans('dashboard.user.address')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='map-pin'></i></span>
                                                        <input type="text" id="contact-info-icon" class="form-control"
                                                               name="address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="basicSelect">{{trans('dashboard.user.role')}}</label>
                                                    <select class="form-select @error("role") is-invalid @enderror"
                                                            id="basicSelect"
                                                            name="role">
                                                        <option
                                                            value="">{{trans('dashboard.user.Select User Role')}}</option>
                                                        @foreach($roles as $role)
                                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error("role")
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <div class="mb-1">
                                                        @include('dashboard.components.single-image')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                    {{trans('dashboard.main.Save')}}
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </section>
                <!-- Basic Vertical form layout section end -->

            </div>
        </div>
    </div>
@endsection

@section('page-js')




@endsection

@push('bottom-js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('assets/dashboard/js/image-uploader.js') }}"></script>
    {{--<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>--}}
    <script>
        $('.image-uploader').imageUploader();
    </script>
    {{--    <script src="{{asset('assets/dashboard/js/form.validation.script.js')}}"></script>--}}
@endpush
