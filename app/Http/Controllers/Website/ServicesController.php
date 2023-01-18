<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {

        $services = Service::with("translations", "image")
            ->orderBy("order")
            ->paginate(16);

        return view("website.services.index",compact("services"));
    }
    public function show($slug)
    {

        $service = Service::whereTranslation('slug',$slug)->firstOrFail();

        return view("website.services.show",compact("service"));
    }

}

