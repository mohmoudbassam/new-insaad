<div role="tabpanel" class="tab-pane" id="seo" aria-labelledby="seo-tab" aria-expanded="true">
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

                            <div class="divider">
                                <div class="divider-text">SEO {{  $language}}</div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        site keywords {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"></span>
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[site_{{$key}}_keywords]"
                                               value="{{ config("settings.site_".$key."_keywords") }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        meta description {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"></span>
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               value="{{ config("settings.site_".$key."_meta") ?? "" }}"
                                               name="settings[site_{{$key}}_meta]">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        about meta description {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[about_{{$key}}_meta]"
                                               value="{{ config("settings.about_".$key."_meta") ?? "" }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        university meta description {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[university_{{$key}}_meta]"
                                               value="{{ config("settings.university_".$key."_meta") ?? "" }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        blog meta description {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[blog_{{$key}}_meta]"
                                               value="{{ config("settings.blog_".$key."_meta") ?? "" }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        services meta description {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[services_{{$key}}_meta]"
                                               value="{{ config("settings.services_".$key."_meta") ?? "" }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-icon">
                                        contact meta description {{$language}}
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="first-name-icon"
                                               class="form-control"
                                               name="settings[contact_{{$key}}_meta]"
                                               value="{{ config("settings.contact_".$key."_meta") ?? "" }}"
                                        >
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="divider">
                            <div class="divider-text">Analytics</div>
                        </div>

                        <div class="col-4">
                            <div class="mb-1">
                                <label class="form-label"
                                       for="email-id-icon">{{trans('dashboard.settings.Google Analytics MEASUREMENT_ID')}}</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather='file-text'></i></span>
                                    <input type="text" id="email-id-icon"
                                           class="form-control" name="settings[site_GA_MEASUREMENT_ID]"
                                           value="{{ config("settings.site_GA_MEASUREMENT_ID") ?? "" }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-1">
                                <label class="form-label"
                                       for="email-id-icon">{{trans('dashboard.settings.Google Analytics VIEW ID')}}</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather='file-text'></i></span>
                                    <input type="text" id="email-id-icon"
                                           class="form-control" name="settings[site_GA_VIEW_ID]"
                                           value="{{ config("settings.site_GA_VIEW_ID") ?? "" }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-1">
                                <label class="form-label"
                                       for="email-id-icon">{{trans('dashboard.settings.Facebook Pixel ID')}}</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">
                                        <i data-feather='facebook'></i>
                                    </span>
                                    <input type="text" id="email-id-icon"
                                           class="form-control" name="settings[site_Facebook_Pixel_ID]"
                                           value="{{ config("settings.site_Facebook_Pixel_ID") ?? "" }}">
                                </div>
                            </div>
                        </div>

                        <br>
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
