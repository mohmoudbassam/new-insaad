<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Policies;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\UpdatePoliciesRequest;

class PoliciesController extends Controller
{
    public function edit()
    {
        abort_if(!auth()->user()->can('view policy'), 403);

        $policy = Policies::with('translations')->first();

        return view('dashboard.policies.edit', compact('policy'));
    }

    public function update(UpdatePoliciesRequest  $request)
    {
        abort_if(!auth()->user()->can('update policy'), 403);

        $policy = Policies::first();
        $policy->update($request->all());

        return redirect()->route('dashboard.index',['lang'=>app()->getLocale()]);
    }

}
