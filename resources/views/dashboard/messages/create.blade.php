@extends("dashboard.layouts.master")

@section("title")
    {{trans('dashboard.inbox.Send Message')}}
@endsection

@push("before-css")

@endpush

@push("page-css")
    <link rel="stylesheet" href="{{asset('assets/dashboard/styles/css/custom/ui-edit-blog.css')}}">
@endpush

@section("breadcrumb")


    <div class="breadcrumb">
        {{--<h1> {{trans('dashboard.main.dashboard')}} </h1>--}}
        <ul>
            <li><a href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a></li>
            <li>{{trans('dashboard.inbox.Send Message')}}</li>
        </ul>
    </div>
@endsection

@section("main-content")
    <div class="row flex-column align-items-center">


        <div class="col-md-9 align-content-center">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">{{trans('dashboard.inbox.Send Message')}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route("messages.store",['lang' => app()->getLocale()]) }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="inputName3" class="col-sm-2 col-form-label"> {{trans('dashboard.inbox.Name')}}</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control @error("name") is-invalid @enderror" id="inputName3" required >
                                @error("name")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">{{trans('dashboard.inbox.Email Address')}} </label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ old("email") }}" class="form-control @error("email") is-invalid @enderror" id="inputEmail3" required>
                                @error("email")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPhone3" class="col-sm-2 col-form-label">{{trans('dashboard.inbox.Phone Number')}} </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error("phone") is-invalid @enderror" name="phone" value="{{ old("phone") }}" id="inputPhone3" required >
                                @error("phone")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDescription3" class="col-sm-2 col-form-label">{{trans('dashboard.inbox.Message')}} </label>
                            <div class="col-sm-10">
                                <textarea id="inputMessage3" name="message" class="form-control @error("message") is-invalid @enderror" aria-label="With textarea">{{ old("message") }}</textarea>
                                @error("message")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="ul-btn__icon"><i class="i-Data-Save"></i></span>
                                    {{trans('dashboard.main.Save')}} </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("page-js")
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            ClassicEditor
                .create( document.querySelector( '#inputMessage3' ));
        })
    </script>
@endpush

@push("bottom-js")

@endpush
