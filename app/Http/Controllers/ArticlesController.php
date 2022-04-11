<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index() {
        $articles = Article::latest()->paginate(10);
        $tags = Tag::all();
        return view('list', ['tags' => $tags, 'articles' => $articles]);
    }

    public function get($slug) {
        $article = Article::where('url', $slug)->firstOrFail();
        return view('article', ['article' => $article]);
    }
}
