<?php

use Faker\Generator as Faker;

$factory->define(App\Nivel::class, function (Faker $faker) {
  $title = $faker->sentence(4);
     return [
       'name' => $title,
       'slug' => str_slug($title),
       'body' => $faker->text(200),
       'file' 			=> $faker->imageUrl($width = 1200, $height = 800)
     ];
});
