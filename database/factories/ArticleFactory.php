<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => substr($faker->text, 0, 100),
        'user_id' => 1,
        'category_id' => rand(1,7),
        'text' => $faker->realText(1000),
    ];
});
