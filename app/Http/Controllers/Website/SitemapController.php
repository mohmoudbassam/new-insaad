<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Service;

class SitemapController extends Controller
{
    public function index()
    {
        $services = Service::with("translations")
            ->orderBy("created_at", "desc")
            ->get();

        return response()->view(
            'website.site-map',
            compact('services')
        )
            ->header('Content-Type', 'text/xml');
    }
}
