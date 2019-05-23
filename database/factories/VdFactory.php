<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Vd;
use Faker\Generator as Faker;

$factory->define(Vd::class, function (Faker $faker) {
    $condicion = $faker->randomElement([Vd::PENDIENTE, Vd::INICIADO, Vd::COMPLETADO]);
    return [
        'idcliente' => \App\Cliente::all()->random()->id,
        'idcentro_costos' => \App\Centrocosto::all()->random()->id,
        'idarticulo' => \App\Articulo::all()->random()->id,
        'iddestino' => \App\Destino::all()->random()->id,
        'idempleado' => \App\Empleado::all()->random()->id,
        'observacion' => $faker->sentence,
        'condicion' => $condicion,
        'previous_approved' =>$condicion !== Vd::PENDIENTE ? false : true,
        'previous_rejected' =>$condicion !== Vd::INICIADO ? true : false,

    ];
});
