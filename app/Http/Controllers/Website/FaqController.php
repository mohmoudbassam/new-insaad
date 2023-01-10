<?php

namespace App\Http\Controllers\Website;

use App\Models\Faq;
use App\Http\Controllers\Controller;


class FaqController extends Controller
{
    public function __invoke()
    {
        $faqs = Faq::with('translations')
            ->where('available', 1)
            ->orderBy("created_at", "desc")
            ->get();

        return view("website.faq.index", compact('faqs'));
    }
}
