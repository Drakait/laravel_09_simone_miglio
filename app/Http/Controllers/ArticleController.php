<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
    return view('article.create');
    }

public function store(Request $request)
{
    Article::create([
        'title' => $request->input('title'),
        'author' => $request->input('author'),
        'body' => $request->input('body'),
    ]);

    return redirect()->route('article.index');
}

public function index()
    {
    $articles = Article::all();
    return view('article.index', ['articles' => $articles]);
    }
}
