<div role="tabpanel" class="tab-pane" id="social" aria-labelledby="social-tab"
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
                        <div class="col-6">
                            <label class="form-label" for="basic-default-password">{{trans('dashboard.settings.Facebook')}}</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><i data-feather='facebook'></i></span>
                                <input type="text" class="form-control" name="settings[social_facebook]"
                                       value="{{ config("settings.social_facebook") ?? "" }}"
                                       aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="basic-default-password">{{trans('dashboard.settings.Twitter')}}</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><i data-feather='twitter'></i></span>
                                <input type="text" class="form-control" name="settings[social_twitter]"
                                       value="{{ config("settings.social_twitter") ?? "" }}"
                                       aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="basic-default-password">{{trans('dashboard.settings.Instagram')}}</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><i data-feather='instagram'></i></span>
                                <input type="text" class="form-control" name="settings[social_instagram]"
                                       value="{{ config("settings.social_instagram") ?? "" }}"
                                       aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="basic-default-password">{{trans('dashboard.settings.Whatsapp number')}}</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><img height="14" width="14" src="{{asset('images/whatsapp.svg')}}"></span>
                                <input type="text" class="form-control" name="settings[social_whatsapp]"
                                       value="{{ config("settings.social_whatsapp") ?? "" }}"
                                       aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="basic-default-password">linkedin</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1">
                                  <i data-feather='linkedin'></i></span>
                                <input type="text" class="form-control" name="settings[social_linkedin]"
                                       value="{{ config("settings.social_linkedIn") ?? "" }}"

                                       aria-label="Username" aria-describedby="basic-addon1">
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
