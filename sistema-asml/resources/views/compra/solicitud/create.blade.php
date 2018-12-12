@extends('layouts.compra')

@section('content')
{{ dd($jefaturas) }}
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
                        <button class="btn btn-primary" id="buscar-proveedor">Traer datos del proeedor</button>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="col-8 mt-4">
                        <table class="table table-bordered">
                           <tbody>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                              <tr>
                                 <td>Mark</td>
                                 <td>Otto</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="pago" role="tabpanel" aria-labelledby="pago-tab">
            <p>Food truck fixie locavore, accusamus mcsween</p>
         </div>
         <div class="tab-pane fade" id="producto" role="tabpanel" aria-labelledby="producto-tab">
            <p>Etsy mixtape wayfarers, ethical wes andr.</p>
         </div>
         <div class="tab-pane fade" id="confirmar" role="tabpanel" aria-labelledby="confirmar-tab">
            <div class="card">
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
@endsection