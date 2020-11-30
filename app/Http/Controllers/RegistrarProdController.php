<?php

namespace App\Http\Controllers;

use App\Models\RegistrarProd;
use Illuminate\Http\Request;

class RegistrarProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosprod=Registrarprod::paginate();

        return view('RegistrarProd.index', compact('datosprod'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/RegistrarProd.create',);
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
        $datosprod=request()->except('_token');
        RegistrarProd::insert($datosprod);
        return back()->with('registrado', 'Datos Enviados');
        
        $datosprod=request()->validate([
            'nombreprod'=> 'required',
            'marca'=> 'required',
            'proveedor'=> 'required',
            'precio'=> 'required',
            'cantidad'=> 'required',
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrarProd  $registrarProd
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $registrar= RegistrarProd::findOrFail($id);
        return view('RegistrarProd.show', compact('registrar'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrarProd  $registrarProd
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $registrar= RegistrarProd::findOrFail($id);
        return view('RegistrarProd.edit', compact('registrar'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrarProd  $registrarProd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosprod=request()->except(['_token','_method']);
        RegistrarProd::where('id','=',$id)->update($datosprod);
        $registrar= RegistrarProd::findOrFail($id);
        
        
        return redirect()->route('RegistrarProd.index')->with('success', 'MODIFICADO EXITOSAMENTE');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrarProd  $registrarProd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegistrarProd::destroy($id);

        return redirect()->route('RegistrarProd.index')->with('exitoso', 'BORRADO CON EXITO');
        //
    }
}
