<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $article = new Article;
            $article->title = $faker->sentence(4);
            $article->summary = $faker->realText(100).'...';
            $article->content = $faker->realText(500);
            $article->is_published = $faker->numberBetween(0,1);
            $article->category_id = $faker->numberBetween(1,5);
            $article->user_id = $faker->numberBetween(1,3);
            $article->save();
        }
    }
}
