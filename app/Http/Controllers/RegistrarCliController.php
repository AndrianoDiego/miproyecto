<?php

namespace App\Http\Controllers;

use App\Models\RegistrarCli;
use Illuminate\Http\Request;

class RegistrarCliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datoscli=RegistrarCli::paginate();

        return view('RegistrarCli.index', compact('datoscli'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/RegistrarCli.create',);
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
        $datoscli=request()->except('_token');
        RegistrarCli::insert($datoscli);
        return back()->with('registrado', 'Datos Enviados');
        
        $datoscli=request()->validate([
            'nombrecli'=> 'required',
            'apellidos'=> 'required',
            'direccion'=> 'required',
            'producto'=> 'required',
            'cantidad'=> 'required',
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrarCli  $registrarCli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registrarcli= RegistrarProd::findOrFail($id);
        return view('RegistrarCli.show', compact('registrarcli'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrarCli  $registrarCli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrarcli= RegistrarCli::findOrFail($id);
        return view('RegistrarCli.edit', compact('registrarcli'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrarCli  $registrarCli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoscli=request()->except(['_token','_method']);
        RegistrarCli::where('id','=',$id)->update($datoscli);
        $registrarcli= RegistrarCli::findOrFail($id);
        
        
        return redirect()->route('RegistrarCli.index')->with('success', 'MODIFICADO EXITOSAMENTE');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrarCli  $registrarCli
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrarCli $registrarCli)
    {
        RegistrarCli::destroy($id);

        return redirect()->route('RegistrarCli.index')->with('exitoso', 'BORRADO CON EXITO');
        //
    }
}
