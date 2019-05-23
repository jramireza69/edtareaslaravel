<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Centrocosto;
use Faker\Generator as Faker;

$factory->define(Centrocosto::class, function (Faker $faker) {
    return [
        'idempresa' => \App\Empresa::all()->random()->id,
        'nombrecc' => $faker->name
    ];
});
