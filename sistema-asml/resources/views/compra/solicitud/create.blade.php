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
   <div class="tab-content mt-2" id="myTabContent">
      <form>
         <div class="tab-pane fade active show" id="proveedor" role="tabpanel" aria-labelledby="proveedor-tab">
            <div class="card">
               <div class="card-header background-muted">
                  Datos del proveedor
               </div>
               <div class="card-body">
                  <div class="form-row">
                     <div class="col-4">
                        <select id="inputState" class="form-control">
                           <option value="1" selected>PROVEEDOR NACIONAL</option>
                           <option value="2">PROVEEDOR EXTRANJERO</option>
                        </select>
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" placeholder="Ingrese RUT sin puntos">
                     </div>
                     <div class="col">
                        <button class="btn btn-primary">Traer datos del proeedor</button>
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
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
               labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
               beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
               vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar
               helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes
               anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party
               scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
         </div>
         <div class="tab-pane fade" id="producto" role="tabpanel" aria-labelledby="producto-tab">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
               fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
               skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
               gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
               biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
               craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
         </div>
         <div class="tab-pane fade" id="confirmar" role="tabpanel" aria-labelledby="confirmar-tab">
            <div class="card">
               <div class="card-header background-muted">
                  Confirmar envio de solicitud
               </div>
               <div class="card-body">
                  <div class="form-row">
                     <div class="col-4">
                        <button class="btn btn-primary">Enviar solicitud</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

<div class="bd-example bd-example-tabs">

   <ul class="nav nav-tabs" id="myTab" role="tablist">
     <li class="nav-item">
       <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
     </li>
     <li class="nav-item">
       <a class="nav-link active show" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Contact</a>
     </li>
   </ul>

   <div class="tab-content" id="myTabContent">
     <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
       <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
     </div>
     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
       <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
     </div>
     <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
       <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
     </div>
   </div>

 </div>

@endsection