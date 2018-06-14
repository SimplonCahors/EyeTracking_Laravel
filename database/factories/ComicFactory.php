<?php

use Faker\Generator as Faker;

$factory->define(App\Comic::class, function (Faker $faker) {

    
    return [
        
        'comic_title' => $faker->unique()->realText($maxNbChars = 10, $indexSize = 2),
        'comic_author' => $faker->name,
        'comic_publisher' => $faker->company,
        'comic_miniature_url'  => 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg',
        'comic_publication' => $faker->numberBetween($min = 0, $max = 1),
        'fk_user_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});