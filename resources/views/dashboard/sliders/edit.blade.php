@extends('dashboard.layouts.master')

@section('title')
    {{trans('dashboard.slider.Edit Slider')}}
@endsection

@push('before-css')
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/vendor/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/css/custom/ui-edit-setting.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/css/custom/ui-edit-blog.css')}}">
@endpush

@section("breadcrumb")
    <div class="breadcrumb">
        {{--<h1> {{trans('dashboard.main.dashboard')}} </h1>--}}
        <ul>
            <li><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
            <li><a href="{{route('sliders.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.Sliders')}}</a></li>
            <li>{{trans('dashboard.slider.Edit Slider')}} </li>
        </ul>
    </div>
@endsection

@section('main-content')
    <div class="row flex-column align-items-center">


        <div class="col-md-12 align-content-center">
            <div class="card">

                <div class="card-body">

                    <ul class="nav nav-tabs" id="myIconTab" role="tablist">
                        @foreach(config("app.languages") as $key => $language)
                            <li class="nav-item">
                                <a class="nav-link   @error("$key.*") alert-danger @enderror {{ $loop->first ? "active" : "" }}"" id="{{ $language }}-tab"
                                data-toggle="tab" href="#{{ $language }}" role="tab" aria-controls="{{ $language }}"
                                aria-selected="true"><i class="nav-icon i-Add-Cart mr-1"></i> {{ trans('dashboard.slider.Slider Details In '. $language)}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <form class="needs-validation" method="POST" action="{{route('sliders.update' ,['lang' => app()->getLocale(),'slider' => $slider])}}" enctype="multipart/form-data"

                          novalidate >
                        @csrf
                        @method('PUT')
                        <div class="tab-content" id="myIconTabContent">
                            @foreach(config("app.languages") as $key => $language)
                                <div class="tab-pane fade {{ $loop->first ? "show active" : "" }} " id="{{$language}}"
                                     role="tabpanel" aria-labelledby="{{$language}}-tab">
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label for="header_one-source-{{ $key }}"
                                                   class="col-sm-2 col-form-label">Header One</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="{{ $key }}[header_one]"
                                                       value="{{$slider->translate($key)->header_one}}"
                                                       class="form-control @error("$key.header_one") is-invalid @enderror"
                                                id="header_one-source-{{ $key }}" >
                                                @error("$key.header_one")
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="header_two-source-{{ $key }}"
                                                   class="col-sm-2 col-form-label">Header Two</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="{{ $key }}[header_two]"
                                                       value="{{$slider->translate($key)->header_two}}"
                                                       class="form-control @error("$key.header_two") is-invalid @enderror"
                                                id="header_two-source-{{ $key }}"  >
                                                @error("$key.header_two")
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">{{trans('dashboard.slider.Slider Image')}}</label>
                                            <div class="col-sm-10 text-center ">
                                                <input type="file" name="{{ $key }}[image]" class="dropify " value="{{old('image')}}" data-max-file-size="1M"
                                                       @if(!empty($slider->images)) data-default-file="{{asset( $slider->translate($key)->image)}}"  @endif  />
                                                @if($errors->has('image'))
                                                    <div class="error text-danger ">{{ $errors->first('image')}}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="ul-btn__icon"><i class="i-Data-Save"></i></span>
                                        {{trans('dashboard.main.Save')}} </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('page-js')




@endsection

@push('bottom-js')

    <script src="{{asset('assets/dashboard/js/form.validation.script.js')}}"></script>

    {{--sweetalert--}}
    <script src="{{asset('assets/dashboard/js/vendor/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>
    {{--sweetalert--}}

    {{--success--}}
    @if(session()->has('success'))
        <script type="text/javascript">
            $(function() {
                "use strict";

                var SweetAlert = function() {};

                //examples
                SweetAlert.prototype.init = function() {

                    //Success Message
                    setTimeout(function(){
                        swal({
                            type: 'success',
                            title: 'Success!',
                            text: 'slider has been updated',
                            buttonsStyling: false,
                            confirmButtonClass: 'btn btn-lg btn-success'
                        });
                    }, 1000);


                },
                    //init
                    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert;

                $.SweetAlert.init();
            });
        </script>
    @endif
    {{--success--}}
@endpush
