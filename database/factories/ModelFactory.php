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
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'username'   => $faker->userName,
        'email'      => $faker->unique()->email,
        'password'   => app('hash')->make('secret'),
        'api_token'  => str_random(60),
    ];
});

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'name'    => $faker->name,
        'email'   => $faker->unique()->email,
        'phone'   => $faker->phoneNumber,
        'address' => $faker->address,
    ];
});

$factory->define(App\ProjectStatus::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'client_id' => rand(1,10),
        'project_status_id' => rand(1,4),
    ];
});