<?php

namespace App\Http\Controllers;

use App\Municipios;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios=Municipios::all();
        //dd($generos);
        return view("Municipios.index",compact('municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Municipios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipio=array(
            "descripcion_m"=>$request->descripcion_m,
        );
        Municipios::create($municipio);
        return redirect("municipios");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function show(Municipios $municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipios $municipio)
    {
        return view("Municipios.update",compact('municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipios $municipio)
    {
        $municipio->update($request->all());
        return redirect("municipios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipios $municipio)
    {
        $municipio->delete();
        return redirect("municipios");
    }
}
