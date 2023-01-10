<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\EditSliderRequest;
use App\Http\Requests\Dashboard\StoreSliderRequest;
use App\Models\Slider;
use App\Models\SliderTranslation;
use App\Traits\Uploadable;

class SlidersController extends Controller
{
    use Uploadable;

    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->paginate(10);

        return view('dashboard.sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('dashboard.sliders.create');

    }

    public function store(StoreSliderRequest $request)
    {
        $data = $request->all();
        $slider = Slider::create($data);
        foreach (config('app.locales') as $item) {
            if ($request->hasFile("$item.image")) {
                $image = $this->uploadOne($data[$item]['image'], '2000', '1333', 'sliders');
                $slider->translate("$item")->image = $image;
                $slider->save();
            }
        }

        return redirect()->route('sliders.index', ['lang' => app()->getLocale()])->with("success", trans('dashboard.It was done successfully!'));

    }


    public function show($id)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.edit', compact('slider'));
    }


    public function update(EditSliderRequest $request, Slider $slider)
    {
        $data = $request->all();
        $slider->update($data);

        foreach (config("app.locales") as $item) {
            if ($request->hasFile("$item.image")) {
                $image = $this->uploadOne($data[$item]['image'], '2000', '1333', 'sliders');
                $slider->translate("$item")->image = $image;
                $slider->save();

            }
        }

        return redirect()->route('sliders.index', ['lang' => app()->getLocale()])->with("success", trans('dashboard.It was done successfully!'));
    }


    public function destroy(Slider $slider)
    {
        $slider_translations = SliderTranslation::where('slider_id', $slider->id)->get();
        if (!empty($slider_translations)) {
            foreach ($slider_translations as $slider_translation) {
                $slider_translation->delete();
            }
        }
        $slider->delete();
        return redirect()->back();

    }
}
