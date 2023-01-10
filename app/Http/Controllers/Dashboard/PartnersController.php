<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\EditPartnerRequest;
use App\Http\Requests\Dashboard\StorePartnerRequest;
use App\Models\Partner;
use App\Traits\Uploadable;

class PartnersController extends Controller
{
    use Uploadable;

    public function index($type)
    {
        $partners = Partner::where('type',$type)->orderBy("created_at", "desc")
            ->get();

        return view('dashboard.partners.index', compact('partners','type'));
    }


    public function create($type)
    {
        return view('dashboard.partners.create',['type'=>$type]);
    }


    public function store(StorePartnerRequest $request)
    {
        $data = $request->all();
        if ($request->has("image")) {
            $image = $this->uploadOne($request['image'], '150', '150', 'partners');
            $data['image'] = $image;
        }
        $partner = Partner::create($data);

        return redirect()->route('partners.index', ['lang' => app()->getLocale(),'type'=>$partner->type])->with(
            "success",
            trans('dashboard.It was done successfully!')
        );
    }


    public function show($id)
    {
        //
    }


    public function edit(Partner $partner)
    {
        return view('dashboard.partners.edit', compact('partner'));
    }


    public function update(EditPartnerRequest $request, Partner $partner)
    {
        $data = $request->all();

        if ($request->has("image")) {
            $image = $this->uploadOne($request['image'], '150', '150', 'partners');
            $data['image'] = $image;
        }
        $partner->update($data);

        return redirect()->route('partners.index', ['lang' => app()->getLocale(),'type'=>$partner->type])->with(
            "success",
            trans('dashboard.It was done successfully!')
        );
    }


    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->back();
    }
}
