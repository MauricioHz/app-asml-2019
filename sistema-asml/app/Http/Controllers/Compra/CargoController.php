<?php

namespace App\Http\Controllers\Compra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Compra\Cargo;

class CargoController extends Controller
{

    public function index()
    {

        return view('compra.cargo.index')->with('cargos', Cargo::all());
    }

    public function create()
    {
        return view('compra.cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(['nombre' => 'required|max:100',]);

        $cargo = Cargo();
        $cargo->nombre = $request->nombre;
        $cargo->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        //
    }
}
