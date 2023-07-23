<div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab"
     aria-expanded="true">
    <form action="{{ route("settings.update",['lang' => app()->getLocale()]) }}"
          method="post">
        @csrf
        @method("put")
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="row">
                        @foreach(config("app.languages") as $key => $language)
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        {{ trans('dashboard.settings.Site Title In '. $language)}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">
                                            <i data-feather='edit-3'></i>
                                        </span>
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[site_{{$key}}_title]"
                                               placeholder="First Name"
                                               value="{{config("settings.site_".$key."_title")}}"
                                        >
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr/>
                        @foreach(config("app.languages") as $key => $language)
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        {{trans('dashboard.settings.Site Description In '. $language)}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <textarea type="text" id="first-name-icon"
                                                  class="form-control"
                                                  name="settings[site_{{$key}}_description]"
                                                  placeholder="First Name">
                                                {{ config("settings.site_".$key."_description") }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr/>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label"
                                       for="email-id-icon">{{trans('dashboard.settings.Default Email Address')}}</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i data-feather='mail'></i>
                                    </span>
                                    <input type="email" id="email-id-icon"
                                           class="form-control" name="settings[site_email]"
                                           placeholder="Email" value="{{config('settings.site_email')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label"
                                       for="password-icon">{{trans('dashboard.settings.Company opening hours')}}</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i data-feather='clock'></i>
                                    </span>
                                    <input type="text" id="password-icon"
                                           class="form-control"
                                           name="settings[opening_hours]"
                                           value="{{ config("settings.opening_hours") }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1">
                                <label class="form-label"
                                       for="email-id-icon">{{trans('dashboard.settings.Company Location')}}</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                       <i data-feather='map-pin'></i>
                                    </span>
                                    <input type="text" id="email-id-icon"
                                           class="form-control" name="email-id-icon"
                                           placeholder="Email"
                                           value="{{ config("settings.company_location") ?? "" }}">
                                    <input type="hidden" id="latitude"
                                           value="{{ config("settings.company_latitude") ?? "53.8478" }}"
                                           name="settings[company_latitude]">
                                    <input type="hidden" id="longitude"
                                           value="{{ config("settings.company_longitude") ?? "23.4241" }}"
                                           name="settings[company_longitude]">

                                </div>
                            </div>
                        </div>
{{--                        <div class="col-12">--}}
{{--                            <div id="map"--}}
{{--                                 style="position: fixed !important; height: 300px !important; width: 100% !important">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <br>
                        <div class="col-12">
                            @include('dashboard.components.form-buttons')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>
