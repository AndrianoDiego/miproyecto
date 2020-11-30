<?php

namespace App\Http\Controllers;

use App\Models\Sesionees;
use Illuminate\Http\Request;
use PDF;


class PDFController extends Controller
{
    public function index()
    {
        $sesiones=PDF::All();
        return view ('Sesiones.index', compact('sesiones'));
        //
    }
    public function PDF(){
        $pdf = \PDF::loadView('prueba');
        return $pdf->download('Reporte.pdf');
    }
    
    public function PDFProductos(){

    	$sesiones = Sesionees::all();
    	$pdf = PDF::loadView('/miweb/reporte', compact('sesiones'));
    	return $pdf->stream('productos.pdf');
    }
    //
}
