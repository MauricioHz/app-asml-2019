@extends('layouts.compra')

@section('content')  
    <div class="card">
            <div class="card-header header-light">
                    Cargos
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
                            @foreach ($cargos as $cargo)
                                <tr>
                                <td>{{ $proveedor->id }}</td>
                                <td>{{ $proveedor->id }}</td>
                                </tr>    
                            @endforeach
                            <tbody>    
                        </table>   
            </div>
    </div>
@endsection