<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\Setting;
use App\Traits\Uploadable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\EditServiceRequest;
use App\Http\Requests\Dashboard\StoreServiceRequest;

class ServiceController extends Controller
{
    use Uploadable;

    public function index()
    {

        return view("dashboard.services.index");
    }

    public function create()
    {
        return view("dashboard.services.create");
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->uploadOne($request['image'], '400', '300', 'services');
        $data['icon'] = $this->uploadOne($request['icon'], '400', '300', 'services');
//        dd($data);
        $service = Service::create($data);

        return redirect()->route('services.index', ['lang' => app()->getLocale()])->with("success",
            trans('dashboard.It was done successfully!'));
    }


    public function edit(Service $service)
    {

        return view("dashboard.services.edit", compact("service"));
    }

    public function update(EditServiceRequest $request, Service $service)
    {

     //  $data = $request->validated();
        $data=request()->all();
        if ($request->has("image")) {
            $data['image'] = $this->uploadOne($request['image'], '400', '300', 'services');
        }
        if ($request->has("icon")) {
            $data['icon'] = $this->uploadOne($request['icon'], '400', '300', 'services');
        }

        $service->update($data);
        return redirect()->route('services.index', ['lang' => app()->getLocale()])->with("success",
            trans('dashboard.It was done successfully!'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
    }


    public function updateServiceImage(Request $request)
    {
        if ($request->hasFile("settings.service_image")) {
            $fileName = $this->uploadOne($request->settings['service_image'], 450, 400, 'settings');
            Setting::set("service_image", $fileName);
            Setting::set("service_type", 'image');
        } else {
            Setting::set("service_type", 'video');
            Setting::set("service_video", $request->settings['service_video']);
        }

        return back()->with("success", trans('dashboard.It was done successfully!'));
    }
}
