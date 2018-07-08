<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::pubslished()->latest('published_at')->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        // dd($article->published_at);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    // public function store (Request $request)
    public function store(ArticleRequest $request)
    {
        // $this->validate($request, ['title' => 'required|min:3', 'body' => 'required']);
        Article::create($request->all());

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
