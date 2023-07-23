<div role="tabpanel" class="tab-pane" id="phone" aria-labelledby="phone-tab"
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
                        <div class="col-4">
                            <label class="form-label" for="basic-default-password">{{trans('dashboard.settings.Phone Number')}}</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><i data-feather='phone'></i></span>
                                <input type="text" class="form-control" name="settings[site_phone_number]"
                                       value="{{ config("settings.site_phone_number") ?? "" }}"
                                       aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="basic-default-password">address</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon1"><i data-feather='map'></i></span>
                                <textarea type="text" class="form-control" name="settings[company_location]"
                                          aria-label="Username" aria-describedby="basic-addon1">
                              {{ config("settings.company_location") ?? "" }}
                                </textarea>
                            </div>
                        </div>
                        <br>


                    </div>


                    <div class="col-12">
                        @include('dashboard.components.form-buttons')
                    </div>
                </form>
            </div>
        </div>
    </form>

</div>
