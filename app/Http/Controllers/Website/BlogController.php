<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Article;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;


class BlogController extends Controller
{
    public function index()
    {

        $articles = Article::query()->paginate(2);
        $services=Service::query()->get();
        return view("website.blog.index", ['articles' => $articles,'services' => $services]);
    }

    public function show($slug)
    {
        $article = Article::query()->where('slug->'.app()->getLocale(), $slug)->firstOrFail();
        $services=Service::query()->get();
        return view("website.blog.show", compact('article','services'));
    }
}
