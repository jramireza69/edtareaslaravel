<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'idusuario' => \App\User::all()->random()->id,
        'cliente_id' => \App\Cliente::all()->random()->id,
        'numdocumento' =>$faker->numerify('########'),
        'direccion' =>$faker->address,
        'idciudad' => \App\Ciudad::all()->random()->id,
        'celular' => $faker->numerify('##########'),
        'telefono' => $faker->numerify('#######'),
       //'cargo' => $faker->
        'observacion' => $faker->sentence


    ];
});
