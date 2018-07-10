<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        // return \Auth::user()->name;
        $articles = Article::published()->latest('created_at')->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // dd($id);
        // $article = Article::findOrFail($id);
        // dd($article->published_at);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::pluck('name', 'id');
        return view('articles.create', compact('tags'));
    }

    // public function store (Request $request)
    public function store(ArticleRequest $request)
    {
        // $article = new Article($request->all());
        // Auth::user()->articles()->save($article);

        $this->createArticle($request);

        // $this->validate($request, ['title' => 'required|min:3', 'body' => 'required']);  // without ArticleRequest form-request
        // Article::create($request->all());

        // flash()->overlay('Your article has been created.', 'Good job!');
        flash('Your article has been created.');

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        // $article = Article::findOrFail($id);
        $tags = Tag::pluck('name', 'id');
        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        // $article = Article::findOrFail($id);

        $article->update($request->all());

        $this->syncTags($article, $request->input('tags'));
        // $article->tags()->sync($request->input('tags'));

        return redirect('articles');
    }

    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('tags'));
        // $article->tags()->attach($request->input('tags'));

        return $article;
    }
}
