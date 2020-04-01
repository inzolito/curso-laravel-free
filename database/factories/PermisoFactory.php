<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\permiso;
use Faker\Generator as Faker;

$factory->define(permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slog' => $faker->word,
    ];
});
