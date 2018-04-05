<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
       'categoria' => $faker->numerify('Categoría_###'),
    ];

});
$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
       'articulo' => $faker->numerify('Artículo_###'),
       'precio'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
       'category_id'=> $faker->numberBetween($min=1, $max=49),
    ];

});