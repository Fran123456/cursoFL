<?php

use Faker\Generator as Faker;

$factory->define(App\Reviciones::class, function (Faker $faker) {
  $title = $faker->sentence(4);
     return [
       'name' => $title,
       'body' => $faker->text(500),

     ];
});
