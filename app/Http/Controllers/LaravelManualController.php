<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelManualController extends Controller
{
    public function instalacion(){
        $vistas = view('laravelManual/instalacion');
    return $vistas;
    }

    public function vistas(){
        $vistas =
                view('laravelManual/vistas');
    return $vistas;
    }
    public function vistasBlade(){
        $vistas =
                view('laravelManual/vistasBlade');
    return $vistas;
    }
    public function rutas(){
        $vistas =
                view('laravelManual/rutas');
    return $vistas;
    }
    public function controladores(){
        $vistas =
                view('laravelManual/controladores');
    return $vistas;
    }
    public function proteccion(){
        $vistas =
                view('laravelManual/proteccion');
    return $vistas;
    }
}

