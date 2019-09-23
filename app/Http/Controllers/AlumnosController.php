<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Carreras;
use App\Domicilios;
use App\Instituciones;
use App\Municipios;
use App\Semestres;
use App\Sexos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumnos::all();
        return view("alumnos.index",compact('alumnos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos=Sexos::all();
        $carreras=Carreras::all();
        $semestres=Semestres::all();
        $domicilios=Domicilios::all();
        $municipios=Municipios::all();
        $instituciones=Instituciones::all();
        return view("alumnos.create",compact("sexos","carreras","semestres","domicilios","municipios","instituciones"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alumnos::create($request->all());
        return redirect("alumnos");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumnos $alumno)
    {
        $sexos=Sexos::all();
        $carreras=Carreras::all();
        $semestres=Semestres::all();
        $domicilios=Domicilios::all();
        $municipios=Municipios::all();
        $instituciones=Instituciones::all();
        return view("alumnos.update",compact('alumno',"sexos","carreras","semestres","domicilios","municipios","instituciones"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnos $alumno)
    {
        $alumno->update($request->all());
        return redirect("alumnos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnos $alumno)
    {
        $alumno->delete();
        return redirect("alumnos");
    }
}
