<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $category = new Category();
            $category->name = $faker->word;
            $category->save();
        }
    }
}
