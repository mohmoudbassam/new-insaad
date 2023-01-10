<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreFaqRequest;
use App\Http\Requests\Dashboard\UpdateFaqRequest;


class FaqController extends Controller
{

    public function index()
    {
        abort_if(!auth()->user()->can('view faq'), 403);

        return view('dashboard.faqs.index');
    }

    public function create()
    {
        abort_if(!auth()->user()->can('create faq'), 403);

        return view('dashboard.faqs.create');
    }

    public function store(StoreFaqRequest $request)
    {
        Faq::create($request->validated());

        return redirect()->route('faqs.index',['lang'=>app()->getLocale()])
            ->with(['success' => trans('dashboard.It was done successfully!')]);
    }

    public function show($id)
    {
        //
    }

    public function edit(Faq $faq)
    {
        abort_if(!auth()->user()->can('update faq'), 403);

        return view('dashboard.faqs.edit', compact('faq'));
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());

        return redirect()->route('faqs.index',['lang'=>app()->getLocale()])
            ->with(['success' => trans('dashboard.It was done successfully!')]);
    }


    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->back()->with(['success' => trans('dashboard.It was done successfully!')]);

    }

    public function available(Faq $faq)
    {
        $faq->update(['available' => ! $faq->available]);

        return response()->json('it is done');
    }
}
