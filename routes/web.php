<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SesionesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\RegistrarProdController;
use App\Http\Controllers\RegistrarCodController;
use App\Http\Controllers\RegistrarCliController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PDF1Controller;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    /*return view('welcome');
    Route::get('/','inicioController@index');
}); */

Route::get('/', function(){
    return view('/miweb/index');
});
//CLIENTES
Route::get('/Clientes/create', [ServiciosController::class, 'create']);
//JALAR LAS RUTAS EN UNA
Route::resource('Clientes', ServiciosController::class);
//SESIONES
Route::get('/Sesiones/create', [SesionesController::class, 'create']);
//JALAR LAS RUTAS EN UNA
Route::resource('Sesiones', SesionesController::class);
//PRODUCTOS
Route::get('/Productos/create', [ProductosController::class, 'create']);
//JALAR LAS RUTAS EN UNA
Route::resource('Productos', ProductosController::class);

//REGISTRAR
Route::get('/RegistrarProd/create', [RegistrarProdController::class, 'create']);
//JALAR LAS RUTAS EN UNA
Route::resource('RegistrarProd', RegistrarProdController::class);

///////
Route::get('/RegistrarCon/create', [RegistrarCodController::class, 'create']);
//JALAR LAS RUTAS EN UNA
Route::resource('RegistrarCon', RegistrarCodController::class);

//////
Route::get('/RegistrarCli/create', [RegistrarCliController::class, 'create']);
//JALAR LAS RUTAS EN UNA
Route::resource('RegistrarCli', RegistrarCliController::class);





Route::get('/miweb/index', function(){
    return view('/miweb.index');
});
Route::get('/Layout/home', function(){
    return view('/Layout.home');
});
Route::get('/miweb/contacto', function(){
    return view('/miweb.contacto');
});
Route::get('/miweb/portafolio', function(){
    return view('/miweb.portafolio');
});
Route::get('/miweb/news', function(){
    return view('/miweb.news');
});
Route::get('/miweb/sobre', function(){
    return view('/miweb.sobre');
});
Route::get('/miweb/estrella', function(){
    return view('/miweb.estrella');
});
Route::get('/miweb/estrella1', function(){
    return view('/miweb.estrella1');
});
Route::get('/miweb/carrito', function(){
    return view('/miweb.carrito');
});
Route::get('/miweb/reporte', function(){
    return view('/miweb.reporte');
});
Route::get('/miweb/reporteseven', function(){
    return view('/miweb.reporteseven');
});
Route::get('/auth/login', function(){
    return view('/auth.login');
});

Auth::routes();

Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'PDF'])->name('descargarPDF');
Route::get('/pdfproductos', [App\Http\Controllers\PDFController::class, 'PDFProductos'])->name('descargarPDFproductos');

Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'PDF'])->name('descargarPDF');
Route::get('/pdfeventos', [App\Http\Controllers\PDF1Controller::class, 'PDFProductos1'])->name('descargarPDFeventos');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
