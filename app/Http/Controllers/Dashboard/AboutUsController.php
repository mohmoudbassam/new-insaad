<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\AboutUs;
use App\Models\Setting;
use App\Traits\Uploadable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UpdateAboutUsRequest;

class AboutUsController extends Controller
{
    use Uploadable;

    public function edit()
    {
        abort_if(! auth()->user()->can('view aboutUs'), 403);

        $aboutUs = AboutUs::with('translations')->first();

        return view('dashboard.aboutUs.edit', compact('aboutUs'));
    }

    public function update(UpdateAboutUsRequest $request)
    {
        abort_if(! auth()->user()->can('update aboutUs'), 403);

        $aboutUs = AboutUs::first();
        $aboutUs->update($request->all());

        return redirect()->route('dashboard.index', ['lang' => app()->getLocale()]);
    }

    public function updateAboutUsImage(Request $request)
    {
        abort_if(! auth()->user()->can('update setting'), 403);

        $data = $request->all(["settings"]);

        foreach ($data["settings"] as $key => $requestData) {
            if ($request->hasFile("settings.$key")) {
                if (STR::contains($key, 'icon')) {
                    $fileName = $this->uploadOne($requestData, "91", "90", 'settings');
                } else {
                    $fileName = $this->uploadOne($requestData, "221", "300", 'settings');
                }
                Setting::set($key, $fileName);

            } else {

                Setting::set($key, $requestData);
            }
        }

        return back()->with("success", trans('dashboard.It was done successfully!'));


    }

}
