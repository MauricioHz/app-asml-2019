<?php

namespace App\Http\Controllers\Compra;

use App\Models\Compra\Solicitud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class SolicitudController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $jefaturas = User::select('name','email')
                            ->where('rol_id', User::JEFATURA)
                            ->where('vigente', User::VIGENTE)
                            ->get();
        return view('compra.solicitud.create')->with('jefaturas', $jefaturas);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        // return;

        return view('compra.solicitud.show');
    }

    public function edit(Solicitud $solicitud)
    {
        //
    }

    public function update(Request $request, Solicitud $solicitud)
    {
        //
    }

    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
