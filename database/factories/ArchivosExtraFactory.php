<?php

use Faker\Generator as Faker;

$factory->define(App\ArchivosExtra::class, function (Faker $faker) {
  $title = $faker->sentence(4);
     return [
       'name' => $title,
       'url' => $faker->text(10),

     ];
});
