<?php

namespace App\Http\Controllers;

use App\Coordinadores;
use App\Sexos;
use Illuminate\Http\Request;

class CoordinadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinadores=Coordinadores::all();
        return view("coordinadores.index",compact('coordinadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos=Sexos::all();
        return view("coordinadores.create",compact("sexos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coordinadores::create($request->all());
        return redirect("coordinadores");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coordinadores  $coordinadores
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinadores $coordinadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coordinadores  $coordinadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinadores $coordinadore)
    {
        $sexos=Sexos::all();
        return view("coordinadores.update",compact('coordinadore',"sexos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coordinadores  $coordinadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordinadores $coordinadore)
    {
        $coordinadore->update($request->all());
        return redirect("coordinadores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coordinadores  $coordinadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinadores $coordinadore)
    {
        $coordinadore->delete();
        return redirect("coordinadores");
    }
}
