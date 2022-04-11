<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class SaveCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles_cache:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save views from redis to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $keys = Redis::keys('article:[0-9]*:view');
        foreach ($keys as $key) {
            $key = str_replace('laravel_database_', '', $key);
            $views = Redis::get($key);
            preg_match("/[0-9]+/", $key,$articleId);
            $article = Article::find($articleId[0]);
            if($article) {
                $article->views = $views;
                $article->save();
            }
        }
    }
}
