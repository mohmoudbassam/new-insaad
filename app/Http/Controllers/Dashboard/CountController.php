<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Count;
use App\Traits\Uploadable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCountRequest;
use App\Http\Requests\Dashboard\UpdateCountRequest;

class CountController extends Controller
{
    use Uploadable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(!auth()->user()->can('view count'), 403);

        return view('dashboard.counts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(!auth()->user()->can('create count'), 403);
        return view('dashboard.counts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountRequest $request)
    {
//        dd($request->validated());
        $data = $request->validated();
        if ($request->hasFile('image')){
            $data['image'] = $this->uploadOne($request['image'] , '100','100','counts');
        }
        $count = Count::create($data);


        return redirect()->route(
            'counts.index',
            ['lang' => app()->getLocale()]
        )->with("success", trans('dashboard.It was done successfully!'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function show(Count $count)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function edit(Count $count)
    {
        abort_if(!auth()->user()->can('update count'), 403);

        return view('dashboard.counts.edit',compact('count'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountRequest $request, Count $count)
    {
        $data = $request->validated();
        if ($request->hasFile('image')){
            $data['image'] = $this->uploadOne($request['image'] , '100','100','counts');
        }
        $count->update($data);
        return redirect()->route(
            'counts.index',
            ['lang' => app()->getLocale()]
        )->with("success", trans('dashboard.It was done successfully!'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function destroy(Count $count)
    {
        //
    }
}
