<?php

namespace App\Http\Controllers\Compra;

use App\Models\Compra\Solicitud;
use App\Models\Compra\Estado;
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
        $solicitud = new Solicitud;
        $solicitud->fecha = date('y-m-d');
        $solicitud->rut = '14127721';
        $solicitud->dv = '9';
        $solicitud->nombre = 'EMPRESAS DEL SUR SPA';
        $solicitud->direccion = 'LOS LINGUES 55';
        $solicitud->comuna = 'PUCON';
        $solicitud->ciudad = 'VILLARRICA';
        $solicitud->fono = '8889988';
        $solicitud->fax = '4445588';
        $solicitud->email = 'mail@mail.com';
        $solicitud->contacto = 'FRANK FISHERT';
        $solicitud->tipo_solicitud = '1';
        $solicitud->solicitante_id = '2';
        $solicitud->jefatura_id = '3';
        $solicitud->estado_jefatura = Estado::PENDIENTE;
        $solicitud->estado_finanzas = Estado::PENDIENTE;
        $solicitud->estado_gerencia = Estado::PENDIENTE;
        $solicitud->archivo_uno = '';
        $solicitud->archivo_dos = '';
        $solicitud->neto = '1000';
        $solicitud->iva = '190';
        $solicitud->exento = '0';
        $solicitud->monto_total = '1190';
        $solicitud->observaciones = 'SIN OBSERVACIONES';
        $solicitud->tipo_proveedor = '1';
        $solicitud->leido = Estado::NO_LEIDO;
        $solicitud->vigente = Estado::VIGENTE;
        $solicitud->save();

        dd($request);


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
