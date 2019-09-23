<?php

namespace App\Http\Controllers;

use App\Domicilios;
use Illuminate\Http\Request;

class DomiciliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domicilios=Domicilios::all();
        return view("domicilios.index",compact('domicilios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Domicilios.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domicilio=array(
            "descripcion"=>$request->descripcion,
        );
        Domicilios::create($domicilio);
        return redirect("domicilios");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domicilios  $domicilios
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilios $domicilios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domicilios  $domicilios
     * @return \Illuminate\Http\Response
     */
    public function edit(Domicilios $domicilio)
    {
        return view("Domicilios.update",compact('domicilio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domicilios  $domicilios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domicilios $domicilio)
    {
        $domicilio->update($request->all());
        return redirect("domicilios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domicilios  $domicilios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domicilios $domicilio)
    {
        $domicilio->delete();
        return redirect("domicilios");
    }
}
