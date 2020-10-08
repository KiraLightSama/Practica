<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DetalleCuenta;
use Faker\Generator as Faker;

$factory->define(DetalleCuenta::class, function (Faker $faker) {

    return [
        'cantidad' => $faker->randomDigitNotNull,
        'cuenta_id' => $faker->randomDigitNotNull,
        'productos_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
