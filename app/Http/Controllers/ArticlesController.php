<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * Get articles list
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        $articles = Article::latest()->paginate(10);
        $tags = Tag::all();
        return view('list', ['tags' => $tags, 'articles' => $articles]);
    }

    /**
     * Get article by slug
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function get(string $slug) {
        $article = Article::where('url', $slug)->firstOrFail();
        return view('article', ['article' => $article]);
    }
}
