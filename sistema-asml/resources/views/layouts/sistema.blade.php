<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
      <title>LS</title>
      <style>
         .card-profile.text-center .card-profile-cover+.card-body .avatar {margin-top: -4.5rem;}
         .card-profile .card-body .avatar {width: 7rem;height: 7rem;border: .1875rem solid #fff;}
         .avatar {font-size: 1rem;display: inline-flex;width: 48px;height: 48px;color: #fff;border-radius: 50%;background-color: #adb5bd;align-items: center;justify-content: center;}
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">
            <a class="navbar-brand" href="#">Container</a>
            <button class="navbar-toggler" type="button"
               data-toggle="collapse" data-target="#navbarsExample07"
               aria-controls="navbarsExample07" aria-expanded="false"
               aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li> 
               </ul>
            </div>
         </div>
      </nav>
       
      <div class="container">
      <div class="row mt-4">
         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Compras</h5>
                  <p class="card-text"></p>
                  <a href="/modulo-compras" class="btn btn-primary">Acceder</a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 mt-2">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Gestión de calidad</h5>
                  <a href="/modulo-gestion-calidad" class="btn btn-primary">Acceder</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Exportar Excel</h5>
                  <a href="#" class="btn btn-primary">Acceder a la template</a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 mt-2">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Generar PDF Orden de compra</h5>
                  <a href="#" class="btn btn-primary">Acceder a la template</a>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="dist/js/bootstrap.js"></script>
   </body>
</html>