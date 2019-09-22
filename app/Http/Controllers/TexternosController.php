<?php

namespace App\Http\Controllers;

use App\Sexos;
use App\Texternos;
use Illuminate\Http\Request;

class TexternosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texternos=Texternos::all();
        return view("texternos.index",compact('texternos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos=Sexos::all();
        return view("texternos.create",compact("sexos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Texternos::create($request->all());
        return redirect("texternos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Texternos  $texternos
     * @return \Illuminate\Http\Response
     */
    public function show(Texternos $texternos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Texternos  $texternos
     * @return \Illuminate\Http\Response
     */
    public function edit(Texternos $texterno)
    {
        $sexos=Sexos::all();
        return view("texternos.update",compact('texterno',"sexos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Texternos  $texternos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Texternos $texterno)
    {
        $texterno->update($request->all());
        return redirect("texternos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Texternos  $texternos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Texternos $texterno)
    {
        $texterno->delete();
        return redirect("texternos");
    }
}
