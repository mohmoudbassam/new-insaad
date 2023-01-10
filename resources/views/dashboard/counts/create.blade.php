@extends('dashboard.layouts.master')

@section('title')
    {{__('dashboard.count.add count')}}
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
                            <div class="breadcrumb-wrapper">
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item "><a
                                                    href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                        </li>
                                        <li class="breadcrumb-item ">
                                            <a
                                                    href="{{route('counts.index',['lang' => app()->getLocale()])}}">  {{trans('dashboard.main.count')}}</a>
                                        </li>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body  ">
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <form class="form form-vertical needs-validation " method="POST" id="addRoleForm"
                          action="{{route('counts.store',['lang' => app()->getLocale()])}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card  px-5 pb-5">
                                    <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    </div>
                                    <div class="card-body">
                                        {{--                                        @dd($errors)--}}
                                        <div class="row">
                                            @foreach(config("app.languages") as $key => $language)

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                               for="first-name-icon">{{trans("dashboard.main.Name In $language")}}</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                        data-feather='type'></i></span>
                                                            <input type="text" id="first-name-icon" class="form-control
                                                                @error("name") is-invalid @enderror"
                                                                   name="{{ $key }}[name]"
                                                                   value="{{ old("$key.name") }}" required>
                                                            @error("$key.name")
                                                            <div class="text-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                               for="first-name-icon">{{trans("dashboard.main.type")}}</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                        data-feather='type'></i></span>
                                                            <input type="text" id="first-name-icon" class="form-control
                                                                @error("item") is-invalid @enderror"
                                                                   name="{{ $key }}[item]"
                                                                   value="{{ old("$key.item") }}" required>
                                                            @error("$key.item")
                                                            <div class="text-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                           for="first-name-icon">{{trans("dashboard.count.count")}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"></span>
                                                        <input type="number" min="0" step="1" id="first-name-icon" class="form-control
                                                                @error("count") is-invalid @enderror"
                                                               name="count"
                                                               value="{{ old("count") }}" required>
                                                        @error("count")
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="divider ">
                                                    <div class="divider-text">{{trans('dashboard.main.Image')}}(height: 100, width: 100)</div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <input type="file" name="image" class="dropify  " value="{{old('image')}}" data-max-file-size="1M"
                                                            />
                                                            @error("image")
                                                            <div class="text-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                @include('dashboard.components.form-buttons')

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

    <script src="{{asset('assets/dashboard/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>

@endpush
