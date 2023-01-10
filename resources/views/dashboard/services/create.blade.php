@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.services.add service')}}
@endsection

@push("before-css")

@endpush

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
                                                href="{{route("services.index", ["lang" => app()->getLocale()])}}">{{trans("dashboard.content.SERVICES")}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.services.add service")}}</li>

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
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach(config("app.languages") as $key => $language)

                                            <li class="nav-item  @error("$key.*") alert-danger @enderror ">
                                                <a class="nav-link {{ $loop->first ? "active" : "" }}"
                                                   id="{{$language}}-tab" data-bs-toggle="tab"
                                                   href="#{{ $language }}" aria-controls="{{ $language }}" role="tab"
                                                   aria-selected="false">
                                                    <i data-feather='home'> </i> {{ trans("dashboard.faq.Details In $language")}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form action="{{ route("services.store",['lang' => app()->getLocale()]) }}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                            @foreach(config("app.languages") as $key => $language)

                                                <div class="tab-pane {{ $loop->first ? " active" : "" }}"
                                                     id="{{$language}}" aria-labelledby="{{$language}}-tab"
                                                     role="tabpanel">

                                                    <div class="row">

                                                        <div class="row">
                                                            <div class="col-md-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label"
                                                                           for="slug-source-{{ $key }}">{{trans('dashboard.content.Title')}}</label>
                                                                    <input type="text" id="slug-source-{{ $key }}"
                                                                           class="form-control" name="{{ $key }}[title]"
                                                                           value="{{ old("$key.title") }}"
                                                                           placeholder="{{trans('dashboard.content.Title')}} "
                                                                    />
                                                                    @error("$key.title")
                                                                    <div class="text-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="mb-2">
                                                                    <label class="form-label"
                                                                           for="slug-target-{{ $key }}">{{trans('dashboard.content.Slug')}}</label>
                                                                    <input type="text" id="slug-target-{{ $key }}"
                                                                           class="form-control @error("$key.slug") is-invalid @enderror"
                                                                           name="{{ $key }}[slug]"
                                                                           value="{{ old("$key.slug") }}"/>

                                                                    @error("$key.slug")
                                                                    <div class="text-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label
                                                                        class="form-label">{{trans('dashboard.University.description')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                        <textarea data-length="20"
                                                                  class="form-control editor @error("$key.description") is-invalid @enderror"
                                                                  id="description-{{$key}}" rows="3"
                                                                  placeholder="{{trans('dashboard.University.description')}}"

                                                                  name="{{ $key }}[description]"

                                                                  style="height: 100px" spellcheck="false"> {{ old("$key.description") }}
                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="divider ">
                                                            <div class="divider-text">Seo</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label
                                                                        class="form-label">meta keywords</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                        <textarea
                                                                class="form-control  @error("$key.meta_keywords") is-invalid @enderror"
                                                                id="description-{{$key}}" rows="1"
                                                                placeholder="meta keywords"

                                                                name="{{ $key }}[meta_keywords]"

                                                        > {{ old("$key.meta_keywords") }}
                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label
                                                                        class="form-label">meta description</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                        <textarea
                                                                class="form-control  @error("$key.meta_description") is-invalid @enderror"
                                                                id="description-{{$key}}" rows="1"
                                                                placeholder="meta_description"

                                                                name="{{ $key }}[meta_description]"

                                                        > {{ old("$key.meta_description") }}
                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
{{--                                        <div class="col-md-12 col-12">--}}
{{--                                            <div class="mb-2">--}}
{{--                                                <label class="form-label"--}}
{{--                                                       for="slug-source">{{trans('dashboard.services.service order')}}</label>--}}
{{--                                                <input type="number" id="slug-source-" min="0" step="1"--}}
{{--                                                       class="form-control" name="order"--}}
{{--                                                       value="{{ old("order") }}"--}}
{{--                                                       placeholder="{{trans('dashboard.services.service order')}}"--}}
{{--                                                />--}}
{{--                                                @error("order")--}}
{{--                                                <div class="text-danger">--}}
{{--                                                    {{ $message }}--}}
{{--                                                </div>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


                                        @include('dashboard.components.single-image')
                                        <div class="divider ">
                                            <div class="divider-text">{{trans('dashboard.main.icon')}}(height: 300, width: 400)</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <input type="file" name="icon" class="dropify  " value="{{old('icon')}}" data-max-file-size="1M"
                                                    />
                                                    @error("icon")
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
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


@push("page-js")
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <script type="text/javascript">
      $("textarea.editor").each(function () {
        CKEDITOR.replace($(this).attr("id"), {
          filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ,'lang'=>app()->getLocale()])}}",
          filebrowserUploadMethod: "form"

        });
      });
    </script>
    <script src="{{ asset("assets/dashboard/js/scripts/components/components-navs.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/slugify.js") }}"></script>

@endpush

@push("bottom-js")

@endpush
