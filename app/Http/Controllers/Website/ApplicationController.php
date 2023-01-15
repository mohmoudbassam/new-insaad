<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\StoreApplicationRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {

        return view("website.application.index");

    }

    public function store(StoreApplicationRequest $request)
    {
        Application::create($request->validated());
        return back()->with('success', trans('dashboard.It was done successfully!'));
    }
}
