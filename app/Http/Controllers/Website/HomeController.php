<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Count;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {

        $numbers = Count::with(["translations", 'image'])
            ->where('available', 1)
            ->orderBy("created_at", "desc")
            ->limit(4)
            ->get();

        $about = AboutUs::with(["translations"])->first();

        $services = Service::with(["translations"])->get();
        $partners = Partner::where('type',Partner::TYPE_PARTNER)->orderBy("created_at", "desc")->get();

        $clients = Partner::where('type',Partner::TYPE_CLIENT)->orderBy("created_at", "desc")->get();

        return view(
            'website.home.index',
            compact(
                'about',
                'services',
                'partners',
                'clients',
                'numbers'
            )
        );
    }

    public function search(Request $request)
    {
        return view('website.home.search-results');
    }
}
