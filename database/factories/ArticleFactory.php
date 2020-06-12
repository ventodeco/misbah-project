<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
	$randomNumber = rand(1,100);
    $cover = "https://picsum.photos/id/{$randomNumber}/500/800";
    
    return [
    	'user_id' => 1,
    	'title' => $faker->sentence(4),
    	'content' => $faker->sentence(100),
    	'cover' => $cover,
    	'price' => $faker->randomFloat(2,100000,500000)
    ];
});
