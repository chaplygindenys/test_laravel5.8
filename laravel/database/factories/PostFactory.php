<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use Faker\Generator as Faker;
use \Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'title'=>$title,
        'slug'=> Str::slug($title),
        'body'=>$faker->paragraph(2),
        'views'=>$faker ->numberBetween(0,100),
        'likes'=>$faker->numberBetween(0,50),
    ];
});
