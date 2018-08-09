<?php

use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,100),
        'article_id' => rand(1,200),
        'message' => substr($faker->text, 0, 100),
    ];
});
