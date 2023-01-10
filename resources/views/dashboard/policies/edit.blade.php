@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.policies.All Policies')}}
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
                                    <li class="breadcrumb-item ">{{trans("dashboard.policies.All Policies")}}</li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.policies.Edit policies")}}</li>

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
                                    <form action="{{ route("policies.update",['lang' => app()->getLocale()]) }}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                            @foreach(config("app.languages") as $key => $language)

                                                <div class="tab-pane {{ $loop->first ? " active" : "" }}"
                                                     id="{{$language}}" aria-labelledby="{{$language}}-tab"
                                                     role="tabpanel">

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label
                                                                        class="form-label">{{trans('dashboard.policies.Privacy Policy')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                        <textarea data-length="20"
                                                                  class="form-control editor @error("$key.privacy") is-invalid @enderror"
                                                                  id="privacy-{{$key}}" rows="3"
                                                                  placeholder="{{trans('dashboard.policies.Privacy Policy')}}"
                                                                  name="{{ $key }}[privacy]"
                                                                  style="height: 100px" spellcheck="false">
                                                                    {{ optional(optional($policy->translate($key)))->privacy }}
                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label class="form-label">{{trans('dashboard.policies.Usage Policy')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                                        <textarea data-length="20"
                                                                                  class="form-control editor @error("$key.usage") is-invalid @enderror"
                                                                                  id="usage-{{$key}}" rows="3"
                                                                                  placeholder="{{trans('dashboard.policies.Usage Policy')}}"

                                                                                  name="{{ $key }}[usage]"

                                                                                  style="height: 100px"
                                                                                  spellcheck="false">
                                                                            {{ optional($policy->translate($key))->usage }}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label class="form-label">{{trans('dashboard.policies.Agreement')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                                        <textarea data-length="20"
                                                                                  class="form-control editor @error("$key.agreement") is-invalid @enderror"
                                                                                  id="agreement-{{$key}}" rows="3"
                                                                                  placeholder="{{trans('dashboard.policies.Agreement')}}"

                                                                                  name="{{ $key }}[agreement]"

                                                                                  style="height: 100px"
                                                                                  spellcheck="false">
                                                                            {{ optional($policy->translate($key))->agreement }}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label class="form-label">{{trans('dashboard.policies.Refund Policy')}}</label>
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                                        <textarea data-length="20"
                                                                                  class="form-control editor @error("$key.refund") is-invalid @enderror"
                                                                                  id="refund-{{$key}}" rows="3"
                                                                                  placeholder="{{trans('dashboard.policies.Refund Policy')}}"

                                                                                  name="{{ $key }}[refund]"

                                                                                  style="height: 100px"
                                                                                  spellcheck="false">
                                                                            {{ optional($policy->translate($key))->refund }}
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
