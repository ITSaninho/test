<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {

    return [
        'title' => 'Category'.rand(1,200),
    ];
});