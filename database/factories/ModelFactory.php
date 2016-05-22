<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Link::class, function (Faker\Generator $faker) {
  return [
    'name'  =>  $faker->domainName,
    'url' =>  $faker->url,
    'desc'  =>  $faker->text($maxNbChars = 200),
    'type'  =>  $faker->numberBetween($min = 1, $max = 20),
    'recommend' => ($faker->randomNumber($nbDigits = NULL)%2 == 0) ? 0 : 1,
  ];
});
