<?php

namespace App\Http\Controllers;

use App\Semestres;
use Illuminate\Http\Request;

class SemestresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestres=Semestres::all();
        return view("Semestres.index",compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Semestres.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semestre=array(
            "descripcion_semestre"=>$request->descripcion_semestre,
        );
        Semestres::create($semestre);
        return redirect("semestres");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semestres  $semestres
     * @return \Illuminate\Http\Response
     */
    public function show(Semestres $semestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semestres  $semestres
     * @return \Illuminate\Http\Response
     */
    public function edit(Semestres $semestre)
    {
        return view("Semestres.update",compact('semestre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semestres  $semestres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semestres $semestre)
    {
        $semestre->update($request->all());
        return redirect("semestres");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semestres  $semestres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semestres $semestre)
    {
        $semestre->delete();
        return redirect("semestres");
    }
}
