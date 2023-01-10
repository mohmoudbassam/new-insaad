@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.partner.Add Partner')}}
@endsection


@push("page-css")

@endpush

@section("breadcrumb")

@endsection

@section("main-content")

    <!-- BEGIN: Content-->
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
                                    <li class="breadcrumb-item "><a
                                            href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item ">
                                        <a
                                            href="{{route("partners.index", ["lang" => app()->getLocale(),'type'=>$type])}}">{{trans("dashboard.partner.$type")}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.partner.Add Partner")}}</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Blog Edit -->
                <div class="blog-edit-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <form
                                        action="{{ route("partners.store",['lang' => app()->getLocale()]) }}"
                                        method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label"
                                                   for="slug-source-title">{{trans('dashboard.content.Title')}}</label>
                                            <input type="text" id="slug-source-title"
                                                   class="form-control" name="title"
                                                   value="{{ old('title')}}"
                                                   placeholder="{{trans('dashboard.content.Title')}} "
                                            />
                                            @error("title")
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="type" value="{{$type}}">
                                        <div class="form-group mb-2">
                                            <label class="form-label"
                                                   for="slug-source-title">{{trans('dashboard.footer.link')}}</label>
                                            <input type="url" id="slug-source-title"
                                                   class="form-control" name="link"
                                                   value="{{old('link')}}"
                                                   placeholder="{{trans('dashboard.footer.link')}} "
                                            />
                                            @error("link")
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">{{trans('dashboard.main.Image')}}(height: 140, width: 140)</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <input type="file" name="image"
                                                               class="dropify  @error('image') is-invalid @enderror"
                                                               data-max-file-size="1M"/>
                                                        @error("image")
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-50">
                                            @include('dashboard.components.form-buttons')
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Blog Edit -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection



@push("bottom-js")

@endpush
