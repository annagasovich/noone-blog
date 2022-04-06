<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{

    const ARTICLES_NUMBER = 20;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < self::ARTICLES_NUMBER; $i++) {
            $article = new Article();
            $article->title = $faker->words(3, true);
            $article->url = Str::slug($article->title);
            $article->content = $faker->text(1000);
            $color = substr($faker->hexColor(), 1);
            $article->image = 'https://via.placeholder.com/600/' . $color . '/FFFFFF?text=' . $article->title;

            $article->save();

            //add tags
            $article->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        }

    }
}
