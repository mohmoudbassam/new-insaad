@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.partner.Edit Partner')}}
@endsection

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
                                            href="{{route("partners.index", ["lang" => app()->getLocale(),'type' => $partner->type])}}">{{trans("dashboard.partners")}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.main.edit")}}</li>

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
                                        action="{{ route("partners.update",['lang' => app()->getLocale(),'partner' => $partner]) }}"
                                        method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group mb-2">
                                            <label class="form-label"
                                                   for="slug-source-title">{{trans('dashboard.content.Title')}}</label>
                                            <input type="text" id="slug-source-title"
                                                   class="form-control" name="title"
                                                   value="{{ $partner->title }}"
                                                   placeholder="{{trans('dashboard.content.Title')}} "
                                            />
                                            @error("title")
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="form-label"
                                                   for="slug-source-title">{{trans('dashboard.footer.link')}}</label>
                                            <input type="text" id="slug-source-title"
                                                   class="form-control" name="link"
                                                   value="{{ $partner->link }}"
                                                   placeholder="{{trans('dashboard.content.Title')}} "
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
                                                               data-max-file-size="1M"
                                                               data-default-file="{{ asset( $partner->image) }}"/>
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
