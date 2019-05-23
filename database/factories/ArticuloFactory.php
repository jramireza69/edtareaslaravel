<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'idcategoria' => \App\Categoria::all()->random()->id,
        'nombre' => $faker->word,
        'observacion' => $faker->sentence,
        'valor' => $faker->currencyCode

    ];
});
