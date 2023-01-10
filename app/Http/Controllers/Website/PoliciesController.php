<?php

namespace App\Http\Controllers\Website;

use App\Models\Faq;
use App\Models\Policies;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;


class PoliciesController extends Controller
{
    public function refund()
    {
        $refund = Policies::with('translations')->first();

        return view("website.policies.refund", compact('refund'));
    }

    public function privacy()
    {
        $privacy = Policies::with('translations')->first();

        return view("website.policies.privacy", compact('privacy'));
    }
    public function agreement()
    {
        $agreement = Policies::with('translations')->first();

        return view("website.policies.agreement", compact('agreement'));
    }

    public function usage()
    {
        $usage = Policies::with('translations')->first();

        return view("website.policies.usage", compact('usage'));
    }

}
