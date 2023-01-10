<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Cache;


class AboutController extends Controller
{
    public function __invoke()
    {
        $about = Cache::rememberForever('about', function () {
            return AboutUs::with(["translations"])->first();
        });

        return view("website.about.index", compact('about'));
    }
}
