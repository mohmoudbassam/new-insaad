@extends("dashboard.layouts.master")

@section("question")
    {{trans('dashboard.faq.Edit faq')}}
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
                            {{--                            <h2 class="content-header-question float-start mb-0">DataTables</h2>--}}
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item ">
                                        <a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item ">
                                        <a href="{{route('faqs.index',['lang' => app()->getLocale()])}}">{{trans("dashboard.faq.All faq")}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{trans("dashboard.faq.Edit faq")}}</li>

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
                                                    <i data-feather='home'> </i> {{ trans("dashboard.faq.Details In $language")}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form action="{{ route("faqs.update",['lang' => app()->getLocale(),'faq'=>$faq]) }}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="tab-content">
                                            @foreach(config("app.languages") as $key => $language)

                                                <div class="tab-pane {{ $loop->first ? " active" : "" }}"
                                                     id="{{$language}}" aria-labelledby="{{$language}}-tab"
                                                     role="tabpanel">

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label class="form-label"
                                                                       for="slug-source-{{ $key }}">{{trans('dashboard.faq.question')}}</label>
                                                                <input type="text" id="slug-source-{{ $key }}"
                                                                       class="form-control" name="{{ $key }}[question]"
                                                                       value="{{ optional($faq->translate($key))->question }}"
                                                                       placeholder="{{trans('dashboard.faq.question')}} "
                                                                />
                                                                @error("$key.question")
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label
                                                                        class="form-label">{{trans('dashboard.faq.answer')}}</label>
                                                                @error("$key.description")
                                                                <div class="text-danger">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                                <div id="blog-editor-wrapper">
                                                                    <div id="blog-editor-container">
                                                        <textarea data-length="20"
                                                                  class="form-control editor @error("$key.answer") is-invalid @enderror"
                                                                  id="answer-{{$key}}" rows="3"
                                                                  placeholder="{{trans('dashboard.faq.answer')}}"

                                                                  name="{{ $key }}[answer]"

                                                                  style="height: 100px" spellcheck="false">
                                                                        {{ optional($faq->translate($key))->answer }}
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
