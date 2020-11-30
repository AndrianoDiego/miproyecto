<?php

namespace App\Http\Controllers;

use App\Models\Sesiones;
use Illuminate\Http\Request;

class SesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosesiones=Sesiones::paginate();

        return view('Sesiones.index', compact('datosesiones'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Sesiones.create',);
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
        $datosesiones=request()->except('_token');
        Sesiones::insert($datosesiones);
        return back()->with('registrado', 'Datos Enviados');
        
        $datosesiones=request()->validate([
            'nombre2'=> 'required',
            'paterno'=> 'required',
            'materno'=> 'required',
            'email'=> 'required',
            'edad'=> 'required',
            'fecha'=> 'required',
            'albunes'=> 'required',
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $sesiones= Sesiones::findOrFail($id);
        return view('Sesiones.show', compact('sesiones'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $sesiones= Sesiones::findOrFail($id);
        return view('Sesiones.edit', compact('sesiones'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosesiones=request()->except(['_token','_method']);
        Sesiones::where('id','=',$id)->update($datosesiones);
        $sesiones= Sesiones::findOrFail($id);
        
        
        return redirect()->route('Sesiones.index')->with('success', 'MODIFICADO EXITOSAMENTE');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sesiones::destroy($id);

        return redirect()->route('Sesiones.index')->with('exitoso', 'BORRADO CON EXITO');
        //
    }
}
