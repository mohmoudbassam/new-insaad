<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function __invoke($lang)
    {
        $prevUrl = explode('/', url()->previous());
        $prevUrl[3] = $lang;
        $redirectUrl = implode('/', $prevUrl);
        app()->setLocale($lang);
        session()->put('locale', $lang);
        return redirect($redirectUrl);
    }
}
