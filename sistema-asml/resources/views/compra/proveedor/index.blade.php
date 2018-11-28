@extends('layouts.compra')

@section('content')  
    <div class="card">
            <div class="card-header header-light">
                    Proveedores
            </div>
            <div class="card-body">
                    <table id="proveedores" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($proveedores as $proveedor)
                                <tr>
                                <td>{{ $proveedor->rut }}</td>
                                <td>{{ $proveedor->razon_social }}</td>
                                </tr>    
                            @endforeach
                            <tbody>    
                        </table>   
            </div>
    </div>
@endsection