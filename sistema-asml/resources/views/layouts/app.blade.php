<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
section{
  position: relative;
}

.bg-image{
  &:not([class*='absolute']){
    position: absolute;
  }
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  + .card-body{
    position: relative;
    z-index: 1;
  }
}

img.bg-image{
  object-fit: cover;
}
}
        </style>
</head>
<body>
        <section class="bg-gradient-3">
                <img src="image/header-17.jpg" alt="Image" class="bg-image opacity-10">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                      <div class="card py-3 shadow-lg">
                            <div class="card-body">
                                    <h1 class="h2 text-center">Welcome back</h1>
                                    @yield('content')
                                </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
 
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
