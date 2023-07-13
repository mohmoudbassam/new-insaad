<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\CreateArticleRequest;
use App\Models\Article;
use App\Models\Faq;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreFaqRequest;
use App\Http\Requests\Dashboard\UpdateFaqRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ArticleController extends Controller
{

    public function index()
    {
        return view('dashboard.articles.index');
    }

    public function list()
    {
        $articles = Article::query();

        return DataTables::of($articles)
            ->addColumn('title', function ($article) {
                return $article->title;
            })
            ->addColumn('description', function ($article) {
                return substr($article->description, 0, 50);
            })
            ->addColumn('actions', function ($article) {
                return view('dashboard.articles.datatables_actions', ['article' => $article]);
            })
            ->addColumn('created_at', function ($article) {
                return $article->created_at->format('Y-m-d');
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        $article = Article::create([
            'title' => [
                'ar' => $request->title_ar,
                'en' => $request->title_en
            ],
            'description' => [
                'ar' => $request->description_ar,
                'en' => $request->description_en
            ],
            'slug' =>[
                'ar' => $this->prepare_slug($request->title_ar),
                'en' => $this->prepare_slug($request->title_en)
            ],
        ]);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $article->update([
                'image' => $path
            ]);
        }
        return redirect()->route('articles.index', ['lang' => app()->getLocale()])->with('success', 'Article created successfully');
    }

    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', compact('article'));
    }

    public function update(Request $request)
    {
        $article = Article::findOrFail($request->id);
        $article->update([
            'title' => [
                'ar' => $request->title_ar,
                'en' => $request->title_en
            ],
            'description' => [
                'ar' => $request->description_ar,
                'en' => $request->description_en
            ],
            'slug' =>[
                'ar' => $this->prepare_slug($request->title_ar),
                'en' => $this->prepare_slug($request->title_en)
            ],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $article->update([
                'image' => $path
            ]);
        }
        return redirect()->route('articles.index', ['lang' => app()->getLocale()])->with('success', 'Article updated successfully');
    }

    public function prepare_slug($title)
    {
        return str_replace(' ', '-',$title);
    }

    public function delete(Request $request)
    {
        $article = Article::findOrFail($request->id);
        $article->delete();
        return response()->json([
            'success' => true,
            'message' => 'Article deleted successfully'
        ]);
    }


}
