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

        Storage::deleteDirectory('users');

        Storage::makeDirectory('users');


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
        ])
          ->each(function (\App\User $u){
          factory(\App\Cliente::class,1)->create(['user_id' => $u->id]);});

        factory(\App\User::class,50)->create()
            ->each(function (\App\User $u) {
                factory(\App\Cliente::class, 1)->create(['user_id' => $u->id]);
            });

        factory(\App\Categoria::class,3)->create();
        factory(\App\Articulo::class, 3)->create();

        factory(\App\Cliente::class,5)->create();
        factory(\App\Destino::class,5)->create();
        factory(\App\Empresa::class,3)->create();
        factory(\App\Centrocosto::class,2)->create();
        factory(\App\Empleado::class,15)->create();
        factory(\App\Vd::class,15)->create();

    }
}
