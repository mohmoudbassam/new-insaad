@extends('dashboard.layouts.master')

@section('title')
    {{__('dashboard.main.add_article')}}
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
                            <h2 class="content-header-title float-start mb-0">{{trans('dashboard.main.add_article')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="{{route('articles.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.articles')}}</a>
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
                          action="{{route('articles.store',['lang' => app()->getLocale()])}}"
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
                                                           for="first-name-icon">{{trans('dashboard.main.title_ar')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='user'></i></span>
                                                        <input type="text" class="form-control
                                                                @error("title_ar") is-invalid @enderror"
                                                               name="title_ar" value="{{ old('title_ar')}}"
                                                               required>
                                                        @error("title_ar")
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
                                                           for="first-name-icon">{{trans('dashboard.main.title_en')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='user'></i></span>
                                                        <input type="text" class="form-control
                                                                @error("title_en") is-invalid @enderror"
                                                               name="title_en" value="{{ old('title_en')}}" required>
                                                        @error("title_en")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon">
                                                        {{trans('dashboard.main.description_ar')}}
                                                    </label>
                                                    @error("description_ar")

                                                    <div style="color: red">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <div class="input-group input-group-merge">
                                        <textarea type="text" id="first-name-icon" class="form-control"
                                                  name="description_ar"
                                                  placeholder="{{__('dashboard.main.description_ar')}}">{{ old('description_ar')}}</textarea>

                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">

                                                    <label class="form-label" for="first-name-icon">
                                                        {{trans('dashboard.main.description_en')}}
                                                    </label>
                                                    @error("description_en")
                                                    <div style="color: red">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <div class="input-group input-group-merge">
                                        <textarea type="text" id="first-name-icon" class="form-control"
                                                  name="description_en"
                                                  placeholder="{{__('dashboard.main.description_en')}}">{{ old('description_en')}}</textarea>
                                                    </div>
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
