<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosproductos=Productos::paginate();

        return view('Productos.index', compact('datosproductos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Productos.create');
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
        $datosproductos=request()->except('_token');
        Productos::insert($datosproductos);

        //return response()->json($datosclientes);
        return back()->with('success', 'Datos Enviados');
        
        $datosproductos=request()->validate([
            'nombre3'=> 'required',
            'apellidos'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'cantidad'=> 'required',
            'color'=> 'required',
            'fecha'=> 'required',
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto= Productos::findOrFail($id);
        return view('Productos.show', compact('producto'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $producto= Productos::findOrFail($id);
        return view('Productos.edit', compact('producto'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosproductos=request()->except(['_token','_method']);
        Productos::where('id','=',$id)->update($datosproductos);
        $producto= Productos::findOrFail($id);
        
        
        return redirect()->route('Sesiones.index')->with('success', 'MODIFICADO EXITOSAMENTE');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Productos::destroy($id);

        return redirect()->route('Productos.index')->with('exitoso', 'BORRADO CON EXITO');
        //
    }
}
