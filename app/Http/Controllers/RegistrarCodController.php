<?php

namespace App\Http\Controllers;

use App\Models\RegistrarCod;
use Illuminate\Http\Request;

class RegistrarCodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/RegistrarCon.create',);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrarCod  $registrarCod
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrarCod $registrarCod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrarCod  $registrarCod
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrarCod $registrarCod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrarCod  $registrarCod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrarCod $registrarCod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrarCod  $registrarCod
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrarCod $registrarCod)
    {
        //
    }
}
