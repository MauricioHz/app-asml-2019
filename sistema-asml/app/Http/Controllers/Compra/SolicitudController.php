<?php

namespace App\Http\Controllers\Compra;

use App\Models\Compra\Solicitud;
use App\Models\Compra\Proveedor;
use App\Models\Compra\Estado;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudController extends Controller
{

    public function index()
    {
        return view('compra.solicitud.index')
                ->with('solicitudes', Solicitud::where('vigente', Estado::VIGENTE)->get());
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
        $proveedor = Proveedor::where('rut', $request->rut);

        $solicitud = new Solicitud;
        $solicitud->fecha = date('y-m-d');
        $solicitud->rut = $proveedor->rut;
        $solicitud->dv = $proveedor->dv;
        $solicitud->nombre = $proveedor->nombre;
        $solicitud->direccion = $proveedor->direccion;
        $solicitud->comuna = $proveedor->comuna;
        $solicitud->ciudad = $proveedor->ciudad;
        $solicitud->fono = $proveedor->fono;
        $solicitud->fax = $proveedor->fax;
        $solicitud->email = $proveedor->email;
        $solicitud->contacto = $proveedor->contacto;
        $solicitud->tipo_solicitud = $request->tipo_solicitud;
        $solicitud->solicitante_id = $request->solicitante_id;
        $solicitud->jefatura_id = $request->jefatura_id;
        $solicitud->estado_jefatura = Estado::PENDIENTE;
        $solicitud->estado_finanzas = Estado::PENDIENTE;
        $solicitud->estado_gerencia = Estado::PENDIENTE;
        $solicitud->archivo_uno = $request->archivo_uno;
        $solicitud->archivo_dos = $request->archivo_dos;
        $solicitud->neto = $request->neto;
        $solicitud->iva = $request->iva;
        $solicitud->exento = $request->exento;
        $solicitud->monto_total = $request->monto_total;
        $solicitud->observaciones = $request->observaciones;
        $solicitud->tipo_proveedor = $request->tipo_proveedor;
        $solicitud->leido = Estado::NO_LEIDO;
        $solicitud->vigente = Estado::VIGENTE;
        $resultado = 
        $solicitud->save();

        //dd($request);

        return redirect()->route('solicitud.index');
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
