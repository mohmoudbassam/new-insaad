@extends("dashboard.layouts.master")

@section("title")
    {{trans("dashboard.partner.Partners")}}
@endsection

@push("page-css")
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/vendor/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/vendor/sweetalert2.min.css')}}">
@endpush

@section("breadcrumb")
    <div class="breadcrumb">
        {{--<h1> {{trans('dashboard.main.dashboard')}} </h1>--}}
        <ul>
            <li>
                <a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
            </li>
            <li>{{trans("dashboard.partner.$type")}}</li>
        </ul>
    </div>
@endsection

@section("main-content")
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @success
            <div class="alert alert-success" role="alert">
                <div class="alert-body">
                    {{trans('dashboard.main.success') . ' ' . $message}}
                </div>
            </div>
            @endsuccess
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{--                            <h2 class="content-header-title float-start mb-0">DataTables</h2>--}}
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.partner.$type")}}</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <a href="{{route('partners.create',['lang' => app()->getLocale(),'type'=>$type])}}" class="btn btn-success btn-rounded m-1 float-right">
                            <i data-feather='plus'></i>  {{trans('dashboard.main.Add new')}}</a>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-datatable">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table" id="zero_configuration_table" data-elements-count="{{ count($partners) }}">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> {{trans('dashboard.content.Title')}}</th>
                                        <th> {{trans('dashboard.footer.link')}}</th>
                                        <th> {{trans('dashboard.application.image')}}</th>
                                        <th> {{trans('dashboard.main.Created At')}}</th>
                                        <th> {{trans('dashboard.main.Actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($partners as $partner)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $partner->title }}</td>
                                            <td>{{ $partner->link }}</td>
                                            <td><img src="{{ asset($partner->image) }}" alt="partner image"
                                                     style="width: 40px;height: 40px;border-radius: 50%;margin: auto;display: inherit;">
                                            </td>
                                            <td>{{ $partner->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{route('partners.edit' , ['lang' => app()->getLocale() ,'partner' => $partner])}}"
                                                   class="text-success mr-2">
                                                    <i data-feather='edit'></i>
                                                </a>
                                                <a id="alert-confirm-{{ $loop->iteration }}" onclick="delete_form_{{ $loop->iteration }}.submit(confirm('{{trans('dashboard.main.are you sure')}}'))" href="#" title="delete"
                                                   class="text-danger mr-2 ">
                                                    <i data-feather='trash-2'></i>
                                                </a>

                                                <form name="delete_form_{{ $loop->iteration }}" id="delete-form-{{ $loop->iteration }}"
                                                      action="{{ route("partners.destroy", ['lang' => app()->getLocale(),"partner" => $partner]) }}"
                                                      method="post" style="display: none">
                                                    @csrf
                                                    @method("delete")
                                                    @hidden('id', $partner->id)
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
{{--                    <div class="container-fluid" style="display: flex; justify-content: flex-end;">--}}
{{--                        {{ $partners->links() }}--}}
{{--                    </div>--}}
                </section>
            </div>
        </div>
        <!-- end of col -->


    </div>
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

