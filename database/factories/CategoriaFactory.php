<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
       'nombre'=>$faker->randomElement(['TRANSPORTE', 'MENSAJERIA', 'SEGURIDADSOCIAL']),
        'descripcion'=>$faker->sentence
    ];
});
