@extends('layouts.compra')
@section('content')
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header header-light">
            Crear proveedor
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif            
            <form action="{{ route('proveedor.store') }}" method="POST">
               {{ csrf_field() }}
               <div class="form-row">
                  <div class="form-group col-md-2">
                     <label for="rut">RUT</label>
                     <input type="text" class="form-control" id="rut" name="rut" placeholder="RUT" value="{{ old('rut') }}">
                  </div>
                  <div class="form-group col-md-5">
                     <label for="razon-social">Razón social</label>
                     <input type="text" class="form-control" id="razon-social" name="razon_social" placeholder="Razón social" value="{{ old('razon_social') }}">
                  </div>
                  <div class="form-group col-md-5">
                     <label for="nombre-comercial">Nombre comercial</label>
                     <input type="text" class="form-control" id="nombre-comercial" name="nombre_comercial" placeholder="" value="{{ old('nombre_comercial') }}">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="direccion">Dirección</label>
                     <input type="text" class="form-control" id="direccion" name="direccion" placeholder="RUT">
                  </div>
                  <div class="form-group col-md-3">
                     <label for="comuna">Comuna</label>
                     <select id="comuna" name="comuna" class="form-control">
                     </select>                       
                  </div>
                  <div class="form-group col-md-3">
                     <label for="ciudad">Ciudad</label>
                     <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="RUT">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="giro">Giro</label>
                     <input type="text" class="form-control" id="direccion" name="direccion" placeholder="RUT">
                  </div>
                  <div class="form-group col-md-3">
                     <label for="fono">Fono</label>
                     <input type="text" class="form-control" id="fono" name="fono" placeholder="">
                  </div>
                  <div class="form-group col-md-3">
                     <label for="fax">Fax</label>
                     <input type="text" class="form-control" id="fax" name="fax" placeholder="">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="email-sii">Email SII Facturación</label>
                     <input type="text" class="form-control" id="email-sii" name="email-sii" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                     <label for="contacto">Contacto</label>
                     <input type="text" class="form-control" id="contacto" name="contacto" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                     <label for="email-contacto">Email contacto</label>
                     <input type="text" class="form-control" id="email-contacto" name="email-contacto" placeholder="">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="sitio-web">Página Web</label>
                     <input type="text" class="form-control" id="sitio-web" name="sitio-web" placeholder="">
                  </div>
                  <div class="form-group col-md-3">
                     <label for="tipo-proveedor">Tipo de proveedor</label>
                     <select id="tipo-proveedor" name="tipo-proveedor" class="form-control">
                        <option value="N" selected>Nacional</option>
                        <option value="E">Extranjero</option>
                      </select>                     
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection