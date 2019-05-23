<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Destino;
use Faker\Generator as Faker;

$factory->define(Destino::class, function (Faker $faker) {
    return [
        'idcliente' => \App\Cliente::all()->random()->id,
        'ndestino' => $faker->name,
        'direccion' =>$faker->address,
        'idciudad' => \App\Ciudad::all()->random()->id,
        'telefono' => $faker->numerify('##########'),
        'observacion' => $faker->sentence

    ];
});
