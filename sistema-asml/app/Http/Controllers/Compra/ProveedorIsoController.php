<?php

namespace App\Http\Controllers\Compra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Compra\Proveedor;

class ProveedorIsoController extends Controller
{
    public function previewCreateIso(){
        return view('compra.proveedor.iso');
    }

    public function create($id){
        if ($id == null){ 
            return false;
        }
        
        $proveedor = Proveedor::find($id);
        if ($proveedor == null){
            return false;
        }
        return view('compra.iso.create')->with('proveedor', $proveedor);
    }    
}