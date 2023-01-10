<div role="tabpanel" class="tab-pane" id="aboutUs" aria-labelledby="aboutUs-tab"
     aria-expanded="true">
    <form action="{{ route("aboutUs.image.update",['lang' => app()->getLocale()]) }}"
          method="post" enctype="multipart/form-data">
        @csrf
        @method("put")

        <div class="row">
            <div class="col-12">
                <div class="mb-1">
                    <label class="form-label"
                           for="first-name-image">{{trans('dashboard.settings.url')}}</label>
                    <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><i
                                                                        data-feather='type'></i></span>
                        <input type="url" id="first-name-image" class="form-control
                                                                @error("url") is-invalid @enderror"
                               name="settings[aboutUs_video]"
                               value=" {{config("settings.aboutUs_video") }}" required>
                        @error("image")
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.aboutUs_image1")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 20px auto">
                    </div>
                    <label for="customFile1"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image1')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile1"
                           name="settings[aboutUs_image1]">
                    @if($errors->has('settings.aboutUs_image1'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image1')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.aboutUs_image2")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 20px auto">
                    </div>
                    <label for="customFile2"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image2')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile2"
                           name="settings[aboutUs_image2]">
                    @if($errors->has('settings.aboutUs_image2'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image2')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.aboutUs_image3")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile3"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image3')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile3"
                           name="settings[aboutUs_image3]">
                    @if($errors->has('settings.aboutUs_image3'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image3')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.aboutUs_image4")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile4"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image4')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile4"
                           name="settings[aboutUs_image4]">
                    @if($errors->has('settings.aboutUs_image4'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image4')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.aboutUs_image5")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile4"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image5')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile4"
                           name="settings[aboutUs_image5]">
                    @if($errors->has('settings.aboutUs_image5'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image5')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.icon_aboutUs_image6")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile4"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image6')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile4"
                           name="settings[icon_aboutUs_image6]">
                    @if($errors->has('settings.aboutUs_image6'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image6')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.icon_aboutUs_image7")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile4"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image7')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile4"
                           name="settings[icon_aboutUs_image7]">
                    @if($errors->has('settings.aboutUs_image7'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image7')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.icon_aboutUs_image8")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile8"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image8')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile8"
                           name="settings[icon_aboutUs_image8]">
                    @if($errors->has('settings.aboutUs_image8'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image8')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.icon_aboutUs_image9")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile9"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image9')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile9"
                           name="settings[icon_aboutUs_image9]">
                    @if($errors->has('settings.aboutUs_image9'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image9')}}</div>
                    @endif

                </div>
            </div>
            <div class="col-6">
                <div class="mb-1">
                    <div class="col-3">
                        <img src="{{ asset(config("settings.icon_aboutUs_image10")) ?? "https://via.placeholder.com/80x80?text=Placeholder+Image" }}"
                             alt="site aboutUs"
                             style="width: 80px; height: auto; border-radius: 50%;margin: 30px auto">
                    </div>
                    <label for="customFile9"
                           class="form-label">{{trans('dashboard.settings.aboutUs_image10')}}(height: 300, width: 221)</label>
                    <input class="form-control" type="file" id="customFile10"
                           name="settings[icon_aboutUs_image10]">
                    @if($errors->has('settings.aboutUs_image10'))
                        <div class="error text-danger ">{{ $errors->first('settings.aboutUs_image10')}}</div>
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


