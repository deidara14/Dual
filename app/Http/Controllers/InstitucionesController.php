<?php

namespace App\Http\Controllers;

use App\Instituciones;
use Illuminate\Http\Request;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones=Instituciones::all();
        return view("instituciones.index",compact('instituciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Instituciones.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Instituciones::create($request->all());
        return redirect("instituciones");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function show(Instituciones $instituciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituciones $institucione)
    {
        return view("Instituciones.update",compact('institucione'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instituciones $institucione)
    {
        $institucione->update($request->all());
        return redirect("instituciones");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instituciones $institucion)
    {
        $institucion->delete();
        return redirect("instituciones");
    }
}
