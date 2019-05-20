<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Role::class,1)->create(['name'=>'admin']);
        factory(\App\Role::class,1)->create(['name'=>'mensajero']);
        factory(\App\Role::class,1)->create(['name'=>'cliente']);
        factory(\App\Role::class,1)->create(['name'=>'coordinador']);

        factory(\App\Ciudad::class)->create(['nombreCiudad' => 'MEDELLIN']);

        factory(\App\TipoCliente::class,1)->create(['name'=>'EMPRESA']);
        factory(\App\TipoCliente::class,1)->create(['name'=>'SAFIL']);
        factory(\App\TipoCliente::class,1)->create(['name'=>'MENUDEO']);
        factory(\App\TipoCliente::class,1)->create(['name'=>'SPYME']);

        factory(\App\User::class, 1)->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'role_id' => \App\Role::ADMIN
        ]);


    }
}
