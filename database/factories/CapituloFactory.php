<?php

use Faker\Generator as Faker;

$factory->define(App\Capitulo::class, function (Faker $faker) {
$title = $faker->sentence(4);
    return [
    'nivel_id' 	=> rand(1,4),
    'name' 			=> $title,
    'slug' 			=> str_slug($title),
    'body' 			=> $faker->text(50),
    'descarga_video'  => $faker->text(10),
    'descarga_material'  => $faker->text(10),
    'url'        => $faker->text(10),
    ];
});
