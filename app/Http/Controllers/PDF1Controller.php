<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;
use PDF;

class PDF1Controller extends Controller
{
    public function index()
    {
        $eventos=PDF::All();
        return view ('Clientes.index', compact('eventos'));
        //
    }
    public function PDF(){
        $pdf = \PDF::loadView('prueba');
        return $pdf->download('Reporte.pdf');
    }
    
    public function PDFProductos1(){

    	$eventos = Eventos::all();
    	$pdf = PDF::loadView('/miweb/reporteseven', compact('eventos'));
    	return $pdf->stream('eventos.pdf');
    }
    //
}
