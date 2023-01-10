@extends("dashboard.layouts.master")

@section("title")
    {{__('dashboard.specialties.Specialities')}}
@endsection

@push("page-css")
    <link rel="stylesheet"
          href="{{asset('assets/dashboard/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href='{{asset('assets/dashboard/css/core/menu/menu-types/vertical-menu.css')}}'>
    <link rel="stylesheet" type="text/css" href='{{asset('assets/dashboard/css/plugins/forms/form-quill-editor.css')}}'>
    <link rel="stylesheet" type="text/css"
          href='{{asset('assets/dashboard/css/plugins/extensions/ext-component-toastr.css')}}'>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/pages/app-email.css')}}">

@endpush

@section("breadcrumb")


@endsection

@section('main-content')
    @livewire('dashboard.messages')
@endsection

@push("page-js")

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('assets/dashboard/js/sweetalert.script.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendors/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendors/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendors/js/editors/quill/quill.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/scripts/pages/app-email.js')}}"></script>

@endpush

