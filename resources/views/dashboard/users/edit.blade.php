@extends('dashboard.layouts.master')

@section('title')
    {{trans('dashboard.user.edit user')}} {{$user->name}}
@endsection

@push('before-css')


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
                            <h2 class="content-header-title float-start mb-0">{{trans('dashboard.user.edit user')}} {{$user->name}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
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
                    <form class="form form-vertical" method="POST"
                          action="{{route('users.update' ,['lang' => app()->getLocale() , 'user' => $user])}}"
                          novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="user-avatar-section">
                                        <div class="d-flex align-items-center flex-column">
                                            <img class="img-fluid rounded mt-3 mb-2"
                                                 src="{{asset($user->image)}}"
                                                 height="110" width="110" alt="User avatar">
                                            <div class="user-info text-center">
                                                <h4>{{isset($user) ? $user->first_name." ".$user->last_name : ""}}</h4>
                                                <span class="badge bg-light-secondary">
                                                {{isset($user) ? $user->role : "" }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
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
                                                               name="first_name"
                                                               value="{{isset($user) ? $user->first_name : old('first_name')}}"
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
                                                               name="last_name"
                                                               value="{{isset($user) ? $user->last_name : old('last_name')}}"
                                                               required>
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
                                                               name="email"
                                                               value="{{isset($user) ? $user->email : old('email')}}"
                                                               required>
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
                                                        <input type="number" id="contact-info-icon" class="form-control
                                                                @error("phone") is-invalid @enderror"
                                                               name="phone"
                                                               value="{{isset($user) ? $user->phone : old('phone')}}">
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
                                                               class="form-control @error("password") is-invalid @enderror"
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
                                                               name="address"
                                                               value="{{isset($user) ? $user->address : old('address')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            @if(auth()->user()->role == \App\Models\User::ADMIN_ROLE)
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
                                                                <option  @if($user->hasRole($role->name) && isset($user)) selected @endif
                                                                value="{{$role->name}}">{{$role->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("role")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="col-6">
                                                <div class="mb-1">
                                                    <img src="">
                                                    <label for="customFile1"
                                                           class="form-label">{{__('dashboard.user.Image')}}</label>
                                                    <input class="form-control" type="file" id="customFile1"
                                                           name="image">
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



@endpush
