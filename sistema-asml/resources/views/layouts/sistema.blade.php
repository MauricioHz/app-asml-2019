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
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle"
                        href="https://example.com" id="dropdown07"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Dropdown</a>
                     <div class="dropdown-menu"
                        aria-labelledby="dropdown07">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else
                        here</a>
                     </div>
                  </li>
               </ul>
               <form class="form-inline my-2 my-md-0">
                  <input class="form-control" type="text"
                     placeholder="Search" aria-label="Search">
               </form>
            </div>
         </div>
      </nav>
      <!--
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
         
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
         
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                            id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Parámetros
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else
                                here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Solicitudes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reporte</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </div>
         </nav>           
         -->
      <div class="container">
      <div class="row mt-4">
         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Compras</h5>
                  <p class="card-text"></p>
                  <a href="/modulo-compras" class="btn btn-primary">Go somewhere</a>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Gestión de calidad</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="/modulo-gestion-calidad" class="btn btn-primary">Go somewhere</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Exportar Excel</h5>
                  <p class="card-text">111 With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title">Generar PDF Orden de compra</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="dist/js/bootstrap.js"></script>
   </body>
</html>