<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function principal(){
        return view('principal');
    }
    
    public function moduloCompra(){
        return view('compra.index');
    }

    public function moduloGestion(){
        return view('gestion.index');
    }
    
    public function moduloMantencion(){
        return view('mantencion.index');
    }    
}
