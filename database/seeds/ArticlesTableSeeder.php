<?php

use Illuminate\Database\Seeder;
use App\Article;
//use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
       factory(Article::class,250)->create();
    }
}
