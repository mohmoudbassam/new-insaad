@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.main.aboutUs')}}
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
                                    <li class="breadcrumb-item ">
                                        <a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
{{--                                    <li class="breadcrumb-item ">{{trans("dashboard.policies.All Policies")}}</li>--}}
                                    <li class="breadcrumb-item active">{{trans("dashboard.main.aboutUs")}}</li>

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
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach(config("app.languages") as $key => $language)

                                            <li class="nav-item  @error("$key.*") alert-danger @enderror ">
                                                <a class="nav-link {{ $loop->first ? "active" : "" }}"
                                                   id="{{$language}}-tab" data-bs-toggle="tab"
                                                   href="#{{ $language }}" aria-controls="{{ $language }}" role="tab"
                                                   aria-selected="false">
                                                    <i data-feather='home'> </i> {{ trans("dashboard.policies.Policy Details In $language")}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form action="{{ route("aboutUs.update",['lang' => app()->getLocale()]) }}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                            @foreach(config("app.languages") as $key => $language)

                                                <div class="tab-pane {{ $loop->first ? " active" : "" }}"
                                                     id="{{$language}}" aria-labelledby="{{$language}}-tab"
                                                     role="tabpanel">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <label
                                                                        class="form-label">{{trans('dashboard.main.vision')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                        <textarea data-length="20"
                                                                  class="form-control editor @error("$key.vision") is-invalid @enderror"
                                                                  id="vision-{{$key}}" rows="3"
                                                                  placeholder="{{trans('dashboard.main.vision')}}"
                                                                  name="{{ $key }}[vision]"
                                                                  style="height: 100px" spellcheck="false">
                                                                    {{ optional(optional($aboutUs->translate($key)))->vision }}
                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <label class="form-label">{{trans('dashboard.main.mission')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                                        <textarea data-length="20"
                                                                                  class="form-control editor @error("$key.mission") is-invalid @enderror"
                                                                                  id="mission-{{$key}}" rows="3"
                                                                                  placeholder="{{trans('dashboard.main.mission')}}"

                                                                                  name="{{ $key }}[mission]"

                                                                                  style="height: 100px"
                                                                                  spellcheck="false">
                                                                            {{ optional($aboutUs->translate($key))->mission }}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <label class="form-label">{{trans('dashboard.main.description_one')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                                        <textarea data-length="20"
                                                                                  class="form-control editor @error("$key.description_one") is-invalid @enderror"
                                                                                  id="description_one-{{$key}}" rows="3"
                                                                                  placeholder="{{trans('dashboard.main.description_one')}}"

                                                                                  name="{{ $key }}[description_one]"

                                                                                  style="height: 100px"
                                                                                  spellcheck="false">
                                                                            {{ optional($aboutUs->translate($key))->description_one }}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
