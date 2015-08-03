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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Spring::class, function ($faker) {
    return [
        'title' => $faker->name,
        'alias' => 'multsun lähde',
        'description' => $faker->text,
        'short_description' => 'Veljesten nimet vanhimmasta nuorimpaan ovat: Juhani, Tuomas, Aapo, Simeoni, Timo, Lauri ja Eero. Ovat heistä Tuomas ja Aapo kaksoispari ja samoin Timo ja Lauri.',
        'status'=>'juomakelpoista',
        'tested_at' => '10-11-1981',
        'visibility' => true,
        'location' => new \Phaza\LaravelPostgis\Geometries\Point($faker->latitude, $faker->longitude),
        'image' => $faker->imageUrl()

    ];
});

