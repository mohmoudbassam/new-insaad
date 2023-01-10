<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\EditSettingsRequest;
use App\Models\Setting;
use App\Traits\Uploadable;
use Illuminate\Support\Str;

class SettingsController extends Controller
{

    use Uploadable;


    public function show()
    {
        abort_if(!auth()->user()->can('view setting'), 403);

        return view("dashboard.settings.settings");
    }


    public function update(EditSettingsRequest $request)
    {
        abort_if(!auth()->user()->can('update setting'), 403);

        $data = $request->all(["settings"]);

        if ($request->hasFile("settings.site_logo_dark") ||
            $request->hasFile("settings.site_favicon") ||
            $request->hasFile("settings.site_logo")) {
            foreach ($data["settings"] as $key => $value) {
                $fileName = $this->uploadOne($value, 152, 90, 'settings');
                Setting::set($key, $fileName);
            }

        } else {
            foreach ($data["settings"] as $key => $value) {
                Setting::set($key, $value);
            }
        }

        return back()->with("success", trans('dashboard.It was done successfully!'));
    }
    public function homeImage()
    {
        $request = request();
        abort_if(! auth()->user()->can('update setting'), 403);

        $data = $request->all(["settings"]);

        foreach ($data["settings"] as $key => $requestData) {
            if ($request->hasFile("settings.$key")) {
                if (STR::contains($key, 'icon')) {
                    $fileName = $this->uploadOne($requestData, "50", "50", 'settings');
                } else {
                    $fileName = $this->uploadOne($requestData, "1920", "1080", 'settings');
                }
                Setting::set($key, $fileName);

            } else {

                Setting::set($key, $requestData);
            }
        }

        return back()->with("success", trans('dashboard.It was done successfully!'));


    }
}
