<?php

namespace App\Http\Controllers\Compra;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProveedorRequest;
use App\Models\Compra\Proveedor;

class ProveedorController extends Controller{

    public function index()
    {
        return view('compra.proveedor.index')->with('proveedores', Proveedor::all());
    }

    public function getProveedores()
    {
        $instancia = new Proveedor();
        $proveedores = $instancia->getComunas();
        return response()->json($proveedores); //Proveedor::all());
    }

    public function create()
    {
        return view('compra.proveedor.create');
    }
   
    public function store(ProveedorRequest $request)
    {
        $request->flash();
        $validated = $request->validated();
        $proveedor = Proveedor::create($request->except('_token'));

        if ($proveedor) {
            return redirect(route('proveedorIso.previewCreateIso'))->with('id', $proveedor->id);
        }else{
            echo 'Error.';
        }
        

        // return redirect()->route('proveedor.index');

/*
        dd($resultado);
        $project = new Project;
        if($project->existProyect($request->uuid, $request->name)){
            return;
        } 

        $request->validated();
        $resultado = Project::create($request->except('_token'));
        if ($resultado->wasRecentlyCreated) {
            Activity::registerActivityProyecto($request->uuid, $request->name);
            return redirect()->route('projects');
        }
         return 1;       
*/


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function getComunas()
    {
        $instancia = new Proveedor();
        $comunas = $instancia->getComunas();
        return response()->json($comunas); 
    } 
}
