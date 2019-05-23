<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'tipoc_id' => \App\TipoCliente::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
        // 'tipo_documento' =>$faker->word,
        'num_documento' =>$faker->numerify('########'),
        'direccion' =>$faker->address,
        'idciudad' => \App\Ciudad::all()->random()->id,
        'celular' => $faker->numerify('##########'),
        'observacion' => $faker->sentence

    ];
});



