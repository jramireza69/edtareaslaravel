<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TipoCliente;
use Faker\Generator as Faker;

$factory->define(TipoCliente::class, function (Faker $faker) {
    return [
       'name' => $faker->word
    ];
});
