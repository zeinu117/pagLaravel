<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\LaravelManualController;
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

Route::get('/', InicioController::class);
Route::get('/laravelManual/instalacion', [LaravelManualController::class, 'instalacion']);
Route::get('/laravelManual/vistas', [LaravelManualController::class, 'vistas']);
Route::get('/laravelManual/vistasBlade', [LaravelManualController::class, 'vistasBlade']);
Route::get('/laravelManual/controladores', [LaravelManualController::class, 'controladores']);
Route::get('/laravelManual/rutas', [LaravelManualController::class, 'rutas']);
Route::get('/laravelManual/proteccion', [LaravelManualController::class, 'proteccion']);
