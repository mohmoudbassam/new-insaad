<div role="tabpanel" class="tab-pane" id="logo" aria-labelledby="logo-tab"
     aria-expanded="true">
    <form action="{{ route("settings.update",['lang' => app()->getLocale()]) }}"
          method="post" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="row">
            <div class="col-4">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.site_logo")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site logo"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 20px auto">
                    </div>
                    <label for="customFile1"
                           class="form-label">{{trans('dashboard.settings.Website Logo')}}(height: 90, width: 152)</label>
                    <input class="form-control" type="file" id="customFile1"
                           name="settings[site_logo]">
                    @if($errors->has('settings.site_logo'))
                        <div class="error text-danger ">{{ $errors->first('settings.site_logo')}}</div>
                    @endif

                </div>
            </div>
{{--            <div class="col-4">--}}
{{--                <div class="mb-1">--}}
{{--                    <div class="col-3">--}}
{{--                        <img src="{{ asset(config("settings.site_logo_dark")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"--}}
{{--                             alt="site logo"--}}
{{--                             style="width: 80px; height: auto; border-radius: 50%;margin: 20px auto">--}}
{{--                    </div>--}}
{{--                    <label for="customFile1"--}}
{{--                           class="form-label">{{trans('dashboard.settings.Website Logo Dark')}}(height: 90, width: 152)</label>--}}
{{--                    <input class="form-control" type="file" id="customFile1"--}}
{{--                           name="settings[site_logo_dark]">--}}
{{--                    @if($errors->has('settings.site_logo_dark'))--}}
{{--                        <div class="error text-danger ">{{ $errors->first('settings.site_logo_dark')}}</div>--}}
{{--                    @endif--}}

{{--                </div>--}}
{{--            </div>--}}
            <div class="col-4">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{  asset(config("settings.site_favicon")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site logo" style="width: 80px; height: auto; border-radius: 50%; margin: 20px auto">
                    </div>
                    <label for="customFile1" class="form-label">{{trans('dashboard.settings.Website Fav Icon')}}(height: 90, width: 152)</label>
                    <input class="form-control" type="file" id="customFile1"
                           name="settings[site_favicon]">
                    @if($errors->has('settings.site_favicon'))
                        <div class="error text-danger ">{{ $errors->first('settings.site_favicon')}}</div>
                    @endif
                </div>
            </div>
            <br>
            <div class="col-12">
                @include('dashboard.components.form-buttons')
            </div>

        </div>
    </form>
</div>
