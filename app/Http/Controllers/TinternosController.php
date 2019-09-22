<?php

namespace App\Http\Controllers;

use App\Sexos;
use App\Tinternos;
use Illuminate\Http\Request;

class TinternosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tinternos=Tinternos::all();
        return view("tinternos.index",compact('tinternos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos=Sexos::all();
        return view("tinternos.create",compact("sexos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tinternos::create($request->all());
        return redirect("tinternos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tinternos  $tinternos
     * @return \Illuminate\Http\Response
     */
    public function show(Tinternos $tinternos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tinternos  $tinternos
     * @return \Illuminate\Http\Response
     */
    public function edit(Tinternos $tinterno)
    {
        $sexos=Sexos::all();
        return view("tinternos.update",compact('tinterno',"sexos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tinternos  $tinternos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tinternos $tinterno)
    {
        $tinterno->update($request->all());
        return redirect("tinternos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tinternos  $tinternos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tinternos $tinterno)
    {
        $tinterno->delete();
        return redirect("tinternos");
    }
}
