@extends('dashboard.layouts.master')

@section('title')
          {{trans('dashboard.Slider.model')}}

@endsection

@push('page-css')

    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/vendor/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/vendor/sweetalert2.min.css')}}">

@endpush

@section("breadcrumb")
    <div class="breadcrumb">
        {{--<h1> {{trans('dashboard.main.dashboard')}} </h1>--}}
        <ul>
            <li><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
            <li>{{trans('dashboard.slider.Add Slider')}}</li>
        </ul>
    </div>
@endsection

@section('main-content')
    <!-- end of row -->
    <div class="row mb-4">
        <div class="col-md-12">
            <a href="{{route('sliders.create',['lang' => app()->getLocale()])}}" class="btn btn-success btn-rounded m-1 float-right">
                <i class="i-Add-File"></i>{{trans('dashboard.slider.Add Slider')}}  </a>
        </div>
    </div>

    @success
    <div class="col-12 alert alert-success" role="alert">
        <strong class="text-capitalize">{{ trans('dashboard.main.success') }}!</strong> {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endsuccess
    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                    <div class="table-responsive">
                        <table data-elements-count="{{ count($sliders) }}" id="zero_configuration_table" class="display table table-striped table-bordered"
                               style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> {{trans('dashboard.slider.Header One')}}</th>
                                <th> {{trans('dashboard.slider.Header Two')}}</th>
                                <th> {{trans('dashboard.main.Image')}}</th>
                                <th> {{trans('dashboard.main.Created At')}}</th>
                                <th> {{trans('dashboard.main.Actions')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ substr($slider->header_one, 0, 30) }}</td>
                                    <td>{{ substr($slider->header_two, 0, 30) }}</td>
                                    <td><img src="{{ $slider->image ? asset( $slider->image) : asset("assets/dashboard/images/sliders/default.jpg")}}" alt="slier image" style="width: 40px;height: 40px;border-radius: 50%;margin: auto;display: inherit;"></td>

                                    <td>{{ $slider->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{route('sliders.edit' , ['lang' => app()->getLocale() , 'slider' => $slider])}}" class="text-success mr-2">
                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                        </a>
                                        <a id="alert-confirm-{{ $loop->iteration }}" href="#" title="delete" class="text-danger mr-2 ">
                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                        </a>

                                        <form title="delete" id="delete-form-{{ $loop->iteration }}" action="{{ route("sliders.destroy", ['lang' => app()->getLocale(),"slider" => $slider]) }}" method="post" style="display: none">
                                            @csrf
                                            @method("delete")
                                            @hidden(id, $slider->id)
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container-fluid" style="display: flex; justify-content: flex-end;">
                        {{ $sliders->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- end of col -->


    </div>
    <!-- end of row -->

@endsection

@push("page-js")
    <script src="{{ asset('assets/dashboard/js/vendor/datatables.min.js') }}"></script>
    <script src="{{asset('assets/dashboard/js/vendor/sweetalert2.min.js')}}"></script>

    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#zero_configuration_table').DataTable({
                paging: false
            });
        })
    </script>
@endpush
