@extends('layouts.compra')

@section('content')
<div class="bd-example bd-example-tabs">
   <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
         <a class="nav-link active show" id="proveedor-tab" data-toggle="tab" href="#proveedor" role="tab"
            aria-controls="proveedor" aria-selected="true">
            <strong>Paso 1:</strong><br>
            <i class="fa fa-truck" style="color: orangered"></i> Proveedor
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="pago-tab" data-toggle="tab" href="#pago" role="tab" aria-controls="pago" aria-selected="false">
            <strong>Paso 2:</strong><br>
            <i class="fa fa-truck" style="color: orangered"></i> Forma pago
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="producto-tab" data-toggle="tab" href="#producto" role="tab" aria-controls="producto"
            aria-selected="false">
            <strong>Paso 3:</strong><br>
            <i class="fa fa-truck" style="color: orangered"></i> Productos
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="confirmar-tab" data-toggle="tab" href="#confirmar" role="tab" aria-controls="confirmar"
            aria-selected="false">
            <strong>Paso 4:</strong><br>
            <i class="fa fa-truck" style="color: orangered"></i> Confirmar
         </a>
      </li>
   </ul>
   <form action="{{ Route('solicitud.store') }}" method="POST">
      {{ csrf_field() }}
      <div class="tab-content mt-2" id="myTabContent">
         <div class="tab-pane fade active show" id="proveedor" role="tabpanel" aria-labelledby="proveedor-tab">
            <div class="card">
               <div class="card-header background-muted">
                  Datos del proveedor
               </div>
               <div class="card-body">
                  <div class="form-row">
                     <div class="col-4">
                        <select id="tipo_proveedor" name="tipo_proveedor" class="form-control">
                           <option value="1" selected>PROVEEDOR NACIONAL</option>
                           <option value="2">PROVEEDOR EXTRANJERO</option>
                        </select>
                     </div>
                     <div class="col">
                        <input type="text" id="rut" name="rut" class="form-control" placeholder="Ingrese RUT sin puntos">
                     </div>
                     <div class="col">
                        <button type="button" class="btn btn-primary" id="buscar-proveedor">Traer datos del proeedor</button>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="col-8 mt-4">
                        <table class="table table-bordered" id="datos-proveedor">
                           <tbody></tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pago" role="tabpanel" aria-labelledby="pago-tab">
            <div class="card">
               <div class="card-header background-muted">
                  Solicitud y formas de pago
               </div>
               <div class="card-body">
                  <div class="form-row">
                     <label for="jefatura_id" class="col-sm-2 col-form-label">Jefatura</label>
                     <div class="col-4">
                        <select id="jefatura_id" name="jefatura_id" class="form-control">
                        </select>
                     </div>
                  </div>
                  <div class="form-row mt-2">
                     <div class="col-4">
                        <select id="tipo_proveedor" name="tipo_proveedor" class="form-control">
                           <option value="0" selected>Prioridad de la compra ...</option>
                           <option value="1">UGENTE</option>
                           <option value="2">EMPAQUE DE HUEVOS(3 SEMANAS)</option>
                           <option value="3">NORMAL</option>
                        </select>
                     </div>
                     <div class="col-4">
                        <select id="tipo_proveedor" name="tipo_proveedor" class="form-control">
                           <option value="0" selected>Documento de pago ...</option>
                           <option value="1">FACTURA</option>
                           <option value="2">ORDEN DE COMPRA</option>
                           <option value="3">NORMAL</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="producto" role="tabpanel" aria-labelledby="producto-tab">
            <div class="card">
               <div class="card-header background-muted">
                  Solicitud y formas de pago
               </div>

               <div class="card-body">
                  <button type="button" class="btn btn-primary" id="agregar-producto" data-toggle="modal" data-target="#productoModal">Agregar
                     producto</button>
                  <table class="table table-bordered mt-2" id="productos-seleccionados">
                     <thead>
                        <tr>
                           <th scope="col"></th>
                           <th scope="col">Tipo compra / Área</th>
                           <th scope="col">Producto / Descripción</th>
                           <th scope="col">Unidad</th>
                           <th scope="col">Cantidad</th>
                           <th scope="col">Precio</th>
                           <th scope="col">Total</th>
                           <th scope="col">Afecto</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
                  <table class="table table-bordered mt-2">
                     <tbody>
                        <tr>
                           <td colspan="8">Neto</td>
                           <td id="neto" name="neto"></td>
                        </tr>
                        <tr>
                           <td colspan="8">Exento</td>
                           <td id="exento" name="exento"></td>
                        </tr>
                        <tr>
                           <td colspan="8">IVA</td>
                           <td id="iva" name="iva"></td>
                        </tr>
                        <tr>
                           <td colspan="8">Total</td>
                           <td id="total" name="total"></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="confirmar" role="tabpanel" aria-labelledby="confirmar-tab">
            <div class="card mt-2">
               <div class="custom-file">
                  <input type="file" class="custom-file-input" id="archivo-uno" name="archivo_uno">
                  <label class="custom-file-label" for="archivo-uno">Seleccionar archivo</label>
               </div>
            </div>
            <div class="card mt-2">
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" id="archivo-dos" name="archivo_dos">
                     <label class="custom-file-label" for="archivo-dos">Seleccionar archivo</label>
                  </div>
               </div>            
            <div class="card mt-2">
               <div class="card-header background-muted">
                  Confirmar envio de solicitud
               </div>
               <div class="card-body">
                  <div class="form-row">
                     <div class="col-4">
                        <button type="submit" class="btn btn-primary">Enviar solicitud</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>

<!-- Modal agregar -->
<div class="modal fade" id="productoModal" tabindex="-1" role="dialog" aria-labelledby="productoModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="productoModalLabel">Producto o servicio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label for="exampleFormControlSelect1">Tipo de compra</label>
               <select class="form-control" id="tipo-compra">
                  <option value="">Seleccionar ...</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
            </div>
            <hr>
            <div>
               <div class="form-group row">
                  <label for="form-producto" class="col-sm-2 col-form-label">Producto</label>
                  <div class="col-md-5">
                     <input id="form-producto" type="text" placeholder="Nombre producto o servicio" class="form-control input-md"
                        required="" maxlength="23" style="text-transform: uppercase">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="form-descripcion" class="col-sm-2 col-form-label">Descripción</label>
                  <div class="col-md-8">
                     <input id="form-descripcion" type="text" placeholder="Breve descripción ..." class="form-control input-md"
                        required="" maxlength="45" style="text-transform: uppercase">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="form-unidad">Unidad</label>
                  <div class="col-md-4">
                     <select id="form-unidad" class="form-control">
                        <option value="UN011">Unidad</option>
                        <option value="UN001">Bandejas</option>
                        <option value="UN002">Cajas</option>
                        <option value="UN003">Centímetros</option>
                        <option value="UN004">Estuches</option>
                        <option value="UN005">Gramos</option>
                        <option value="UN006">Kilos</option>
                        <option value="UN007">Litros</option>
                        <option value="UN008">Metros</option>
                        <option value="UN009">Rollos</option>
                        <option value="UN010">Toneladas</option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="form-cantidad">Cantidad</label>
                  <div class="col-md-4">
                     <input id="form-cantidad" type="number" min="1" max="99000000" class="form-control input-md"
                        required="">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="form-precio">Precio</label>
                  <div class="col-md-4">
                     <input id="form-precio" type="number" min="1" max="99000000" class="form-control input-md"
                        required="">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="form-afecto-impuesto"></label>
                  <div class="col-md-4">
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" id="form-afecto-impuesto" value="on" checked="checked"> Afecto a
                           impuesto IVA
                        </label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="agregar-producto-pedido">Aceptar</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal editar -->
<div class="modal fade" id="editarProductoModal" tabindex="-1" role="dialog" aria-labelledby="productoModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="productoModalLabel">Editar producto o servicio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label for="e-tipo-compra">Tipo de compra</label>
               <select class="form-control" id="e-tipo-compra">
                  <option value="">Seleccionar ...</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
            </div>
            <hr>
            <div>
               <div class="form-group row">
                  <label for="e-form-producto" class="col-sm-2 col-form-label">Producto</label>
                  <div class="col-md-5">
                     <input id="e-form-producto" type="text" placeholder="Nombre producto o servicio" class="form-control input-md"
                        required="" maxlength="23" style="text-transform: uppercase">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="e-form-descripcion" class="col-sm-2 col-form-label">Descripción</label>
                  <div class="col-md-8">
                     <input id="e-form-descripcion" type="text" placeholder="Breve descripción ..." class="form-control input-md"
                        required="" maxlength="45" style="text-transform: uppercase">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="e-form-unidad">Unidad</label>
                  <div class="col-md-4">
                     <select id="e-form-unidad" class="form-control">
                        <option value="UN011">Unidad</option>
                        <option value="UN001">Bandejas</option>
                        <option value="UN002">Cajas</option>
                        <option value="UN003">Centímetros</option>
                        <option value="UN004">Estuches</option>
                        <option value="UN005">Gramos</option>
                        <option value="UN006">Kilos</option>
                        <option value="UN007">Litros</option>
                        <option value="UN008">Metros</option>
                        <option value="UN009">Rollos</option>
                        <option value="UN010">Toneladas</option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="e-form-cantidad">Cantidad</label>
                  <div class="col-md-4">
                     <input id="e-form-cantidad" type="number" min="1" max="99000000" class="form-control input-md"
                        required="">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="e-form-precio">Precio</label>
                  <div class="col-md-4">
                     <input id="e-form-precio" type="number" min="1" max="99000000" class="form-control input-md"
                        required="">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="e-form-afecto-impuesto"></label>
                  <div class="col-md-4">
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" id="e-form-afecto-impuesto" value="on" checked="checked"> Afecto a
                           impuesto IVA
                        </label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="editar-producto-pedido">Aceptar</button>
         </div>
      </div>
   </div>
</div>
@endsection