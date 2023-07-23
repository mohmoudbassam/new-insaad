@extends('dashboard.layouts.master')

@section('title')
    {{trans('dashboard.main.roles')}}
@endsection

@push('page-css')
 <link rel="stylesheet"
          href="{{asset('assets/dashboard/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">

@endpush

@section("breadcrumb")

@endsection

@section('main-content')


    @success

    @endsuccess
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{--                            <h2 class="content-header-title float-start mb-0">DataTables</h2>--}}
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
                                    <li class="breadcrumb-item active">{{trans('dashboard.main.roles')}}</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{route('roles.create',['lang' => app()->getLocale()])}}" class="btn btn-success btn-rounded m-1 float-right">
                            <i data-feather='plus'></i>  {{trans('dashboard.main.Add new')}}</a>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section id="basic-datatable">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{trans('dashboard.main.name')}}</th>
                                        <th > {{trans('dashboard.main.Created At')}}</th>
                                        <th > {{trans('dashboard.main.Actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)
                                        <tr  @if($loop->odd) class="odd" @endif >
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $role->name  }}</td>

                                            <td>{{ $role->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{route('roles.edit' , ['lang' => app()->getLocale(), 'role' => $role->id])}}" class="text-success mr-2">
                                                    <i data-feather='edit'></i>edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </section>

            </div>
        </div>
    </div>

@endsection

@push("page-js")

@endpush
