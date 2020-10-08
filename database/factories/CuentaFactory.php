<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cuenta;
use Faker\Generator as Faker;

$factory->define(Cuenta::class, function (Faker $faker) {

    return [
        'fecha' => $faker->word,
        'cambio' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
