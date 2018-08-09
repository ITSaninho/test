<?php

use Faker\Generator as Faker;
use App\Article_Tag;

$factory->define(Article_Tag::class, function (Faker $faker) {
    return [
        'article_id' => rand(1,200),
        'tag_id' => rand(1,200),
    ];
});
