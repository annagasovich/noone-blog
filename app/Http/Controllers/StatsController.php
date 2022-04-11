<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Add view
     *
     * @param Request $request
     *
     * @return array
     */
    public function view(Request $request) {
        $article = Article::find($request->id);
        if(!$article) {
            return ['result' => false];
        }
        $article->views++;
        $article->save();
        return ['result' => true, 'views' => $article->views];
    }

    /**
     * Add like
     *
     * @param Request $request
     *
     * @return array
     */
    public function like(Request $request) {
        $article = Article::find($request->id);
        if(!$article) {
            return ['result' => false];
        }
        $article->likes++;
        $article->save();
        return ['result' => true, 'likes' => $article->likes];
    }
}
