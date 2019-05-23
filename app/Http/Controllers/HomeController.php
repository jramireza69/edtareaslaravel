<?php

namespace App\Http\Controllers;

use App\Vd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');
        $vds = Vd::withCount('users')

        ->with( 'clientes','destino','users')

            ->where('condicion', Vd::PENDIENTE)
            ->where('idempleado', 8)
            ->latest()
            ->paginate();
        dd($vds);
    }
}
