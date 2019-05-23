<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'cliente_id' => \App\Cliente::all()->random()->id,
        'nombre' =>$faker->name,
        'telefono' => $faker->numerify('#######'),
    ];
});
