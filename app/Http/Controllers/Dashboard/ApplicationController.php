<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\EditApplicationRequest;
use App\Mail\ApplicationStatusMail;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Uploadable;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    use Uploadable;

    public function index(Request $request)
    {
        abort_if(!auth()->user()->can('view application'), 403);

        return view("dashboard.application.index");
    }

    public function show(Application $application)
    {
        abort_if(!auth()->user()->can('view application'), 403);

//        auth()->user()->notifications->where('data.data.id', $application->id)->markAsRead();

        $application->update(['is_read' => now()]);

        return view("dashboard.application.show", compact("application"));
    }

    public function update(Application $application, EditApplicationRequest $request)
    {

        $data = [];
        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                $value = $this->uploadFiles($value, '', '', 'applications');
            }
            $data[$key] = $value;
        }
        $application->update($data);
        if (!is_null($application->user)) {
            Mail::to($application->user)->send(new ApplicationStatusMail($application));
        }
        return redirect()->back();
    }
}
