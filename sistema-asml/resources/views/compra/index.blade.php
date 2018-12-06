@extends('layouts.compra')

@section('content')
<div class="card text-center">
        <div class="card-header background-muted">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="{{ route('solicitud.create') }}" class="btn btn-primary btn-round">Nueva solicitud de compras</a> <a href="#" class="btn btn-primary btn-round">Solicitudes de compra</a> 
        </div>
        <div class="card-footer text-muted background-muted">
          2 days ago
        </div>
</div>
@endsection
