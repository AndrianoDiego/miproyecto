<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosclientes=Servicios::paginate();

        return view('Clientes.index', compact('datosclientes'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clientes.create');
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
        $datosclientes=request()->except('_token');
        Servicios::insert($datosclientes);

        //return response()->json($datosclientes);
        return back()->with('success', 'Datos Enviados');
        
        $datosclientes=request()->validate([
            'nombre1'=> 'required',
            'paterno'=> 'required',
            'materno'=> 'required',
            'edad'=> 'required',
            'dia'=> 'required',
            'evento'=> 'required',
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes= Servicios::findOrFail($id);
        return view('Clientes.show', compact('clientes'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes= Servicios::findOrFail($id);
        return view('Clientes.edit', compact('clientes'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosclientes=request()->except(['_token','_method']);
        Servicios::where('id','=',$id)->update($datosclientes);
        $clientes= Servicios::findOrFail($id);
        
        
        return redirect()->route('Clientes.index')->with('success', 'MODIFICADO EXITOSAMENTE');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicios::destroy($id);

        return redirect()->route('Servicios.index')->with('exitoso', 'BORRADO CON EXITO');
        //
    }
}
