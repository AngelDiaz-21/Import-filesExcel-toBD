<?php

use App\Models\Estado;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CodigoPController;
use App\Http\Controllers\UsoCFDIController;
use App\Http\Controllers\ColoniasController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\FormasPagoController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\ClaveUnidadController;
use App\Http\Controllers\NuevoBoletinController;
use App\Http\Controllers\RegimenFiscalController;
use App\Http\Controllers\SeleccionarDatosController;
use App\Http\Controllers\Clave_ProductoServiciosController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Estados
Route::resource('estado', EstadoController::class);
// Route::get('/estado', function () {
//     dd(Estado::get());
// });

// Codigos postales
Route::resource('codigoPostal', CodigoPController::class);

// Localidades
Route::resource('localidad', LocalidadController::class);

//Municipios
Route::resource('/municipio', MunicipioController::class);
// Route::post('municipio', MunicipioController::class);

// Colonias
Route::resource('colonia', ColoniasController::class);

// Métodos de pago
Route::resource('metodoPago', MetodoPagoController::class);

// Regimén Fiscal
Route::resource('regimenFiscal', RegimenFiscalController::class);

// Formas de pago
Route::resource('formaPago', FormasPagoController::class);

// Uso CFDI
Route::resource('usoCFDI', UsoCFDIController::class);

// Claves de productos y servicios
Route::resource('claves_productosServicios', Clave_ProductoServiciosController::class);

// Claves de unidad
Route::resource('clavesUnidad', ClaveUnidadController::class);

// Ejemplo de eventos y listener
Route::get('/evento-listener', [NuevoBoletinController::class, 'index']);
Route::post('/subscribe', [NuevoBoletinController::class, 'subscribe']);





//Seleccionar todos los datos
// Route::resource('seleccionar-datos', SeleccionarDatosController::class);
Route::get('/seleccionar-datos', [App\Http\Controllers\SeleccionarDatosController::class, 'index']);

// Route::post('municipios', SeleccionarDatosController::class);
Route::post('/municipios', [App\Http\Controllers\SeleccionarDatosController::class, 'municipios']);

Route::post('/localidades', [App\Http\Controllers\SeleccionarDatosController::class, 'localidades']);

