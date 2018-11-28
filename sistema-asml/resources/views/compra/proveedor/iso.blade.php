@extends('layouts.compra')

@section('content')
<div class="row">
    <div class="col-sm-12">
       <div class="card text-center">
          <div class="card-header">
             Comprobante de ingreso
          </div>          
          <div class="card-body">
            @if (session('id'))
                {{ session('id') }}
                <div class="alert alert-success" role="alert">
                    El proveedor se ha ingresado correctamente.
                </div>
                <hr>
                <button type="button" class="btn btn-primary btn-sm">Listar proveedores</button>
                <a href="{{ url('proveedorIso/create/' . session('id')) }}" class="btn btn-secondary btn-sm">Agregar datos ISO</a>
            @endif
          </div>
          <div class="card-body">

          </div>    
       </div>
    </div>
 </div>
@endsection