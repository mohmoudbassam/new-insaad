@extends('dashboard.layouts.master')

@section('title')
    {{__('dashboard.main.Role Permissions')}}
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
                                                href="{{route('roles.index',['lang' => app()->getLocale()])}}">  {{trans('dashboard.main.roles')}}</a>
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
                          action="{{route('roles.update',['lang' => app()->getLocale() , 'role' => $role])}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card  px-5 pb-5">
                                    <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                           for="first-name-icon">{{trans('dashboard.main.name')}}</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                data-feather='user'></i></span>
                                                        <input type="text" id="first-name-icon" class="form-control
                                                                @error("name") is-invalid @enderror"
                                                               name="name" value="{{ $role->name}}" required>
                                                        @error("name")
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <h4 class="mt-2 pt-50">{{__('dashboard.main.Role Permissions')}}</h4>
                                                <!-- Permission table -->
                                                <div class="table-responsive">
                                                    <table class="table table-flush-spacing">
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-nowrap fw-bolder">
                                                                {{__('dashboard.main.Administrator Access')}}
                                                                <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                                      title=""
                                                                      data-bs-original-title="Allows a full access to the system">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16"
                                                                                                        x2="12"
                                                                                                        y2="12"></line><line
                                x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                      </span>
                                                            </td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="selectAll">
                                                                    <label class="form-check-label" for="selectAll">{{__('dashboard.main.Select All')}}</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @foreach($permissions->groupBy('group') as $key => $permission)

                                                            <tr>
                                                                <td class="text-nowrap fw-bolder">{{$key}} Management
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        @foreach($permission as  $permissionOption)

                                                                            <div class="form-check me-3 me-lg-5">
                                                                                <input class="form-check-input"
                                                                                       type="checkbox"
                                                                                       name="permissions[]"
                                                                                       value="{{$permissionOption->id}}"
                                                                                       id="{{$key}}Management{{$permissionOption->name}}"
                                                                                       @if($role->hasPermissionTo($permissionOption->name) ) checked @endif
                                                                                >
                                                                                <label class="form-check-label"
                                                                                       for="{{$key}}Management{{$permissionOption->name}}">
                                                                                    {{trans('permissions.'.$permissionOption->group.'.'.$permissionOption->name)}}
                                                                                </label>
                                                                            </div>

                                                                        @endforeach
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Permission table -->
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

    <script src="{{asset('assets/dashboard/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/scripts/pages/modal-add-role.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/scripts/pages/app-access-roles.js')}}"></script>

@endpush
