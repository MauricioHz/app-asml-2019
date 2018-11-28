<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

      <link rel="stylesheet" href="http://foxythemes.net/preview/products/beagle/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css">
      <link rel="stylesheet" href="http://foxythemes.net/preview/products/beagle/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
      
 
  
      
      <title>LS</title>
      <style>
         .card-profile.text-center .card-profile-cover+.card-body .avatar {margin-top: -4.5rem;}
         .card-profile .card-body .avatar {width: 7rem;height: 7rem;border: .1875rem solid #fff;}
         .avatar {font-size: 1rem;display: inline-flex;width: 48px;height: 48px;color: #fff;border-radius: 50%;background-color: #adb5bd;align-items: center;justify-content: center;}
         .form-control--muted {background: #EDF0F5;border-color: #EDF0F5;}
         .header-light{background-color: #fff;color: #2f1e8e;font-weight: bold;border-left: 4px solid #2f1e8e;}
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">
            <a class="navbar-brand" href="#">Compras</a>
            <button class="navbar-toggler" type="button"
               data-toggle="collapse" data-target="#navbarsExample07"
               aria-controls="navbarsExample07" aria-expanded="false"
               aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Orden de compra <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Informes</a>
                  </li>
 
                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#" id="dropdown07"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Autorizaciones</a>
                        <div class="dropdown-menu"
                           aria-labelledby="dropdown07">
                           <a class="dropdown-item" href="{{ route('autorizacion.jefatura') }}">Autorizacion Jefatura</a>
                           <a class="dropdown-item" href="{{ route('autorizacion.finanzas') }}">Autorizacion Gerencia Admin. y Finanzas</a>
                           <a class="dropdown-item" href="{{ route('autorizacion.gerencia') }}">Autorizacion Gerencia General</a>
                        </div>
                     </li>                  
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle"
                        href="#" id="dropdown07"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Proveedor</a>
                     <div class="dropdown-menu"
                        aria-labelledby="dropdown07">
                        <a class="dropdown-item" href="{{ route('proveedor.create') }}">Nuevo proveedor</a>
                        <a class="dropdown-item" href="{{ route('proveedor.index') }}">Proveedores</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Acerca de</a>
                  </li>                  
               </ul>
               <form class="form-inline my-2 my-md-0">
                  <input class="form-control" type="text"
                     placeholder="Search" aria-label="Search">
               </form>
            </div>
         </div>
      </nav>
      <div class="container mt-2">
        @yield('content')
      </div>
      <script src="http://foxythemes.net/preview/products/beagle/assets/lib/jquery/jquery.min.js"></script>
      <script src="http://foxythemes.net/preview/products/beagle/assets/lib/datatables/datatables.net/js/jquery.dataTables.js"></script>

      <script src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="{{ asset('js/proveedor.js') }}"></script>
   </body>
</html>