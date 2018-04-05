<?php

use Illuminate\Database\Seeder;
use App\Category;
//use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
       factory(Category::class, 50)->create();
    }
}
