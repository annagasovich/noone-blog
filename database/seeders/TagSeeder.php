<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{

    const TAGS_NUMBER = 7;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < self::TAGS_NUMBER; $i++) {
            $tag = new Tag();
            $tagName = $faker->words(rand(1,3), true);
            $tag->title = $tagName;
            $tag->url = Str::slug($tagName);
            $tag->save();
        }
    }
}
