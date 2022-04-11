<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessComment;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Save comment
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {

        $rules = [
            'subject' => 'required',
            'body' => 'required|max:255',
        ];
        $messages = [
            'subject.required' => 'Введите заголовок комментария!',
            'body.required' => 'Введите текст комментария!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $article = Article::find($request->article_id);

        if (!$validator->fails()) {
            return Redirect::to($article->full_url)->withInput()->withErrors($validator);
        }

        $comment = new Comment();
        $comment->subject = $request->subject;
        $comment->body = $request->body;
        $comment->article_id = $article->id;

        $job = new ProcessComment($comment);
        dispatch($job);
        return Redirect::to($article->full_url);
    }
}
