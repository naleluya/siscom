<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    //
    public function comisiones()
    {
        return view("registros.comisiones");
    }

    public function permisos()
    {
        return view("registros.permisos");
    } 

    public function salidas()
    {
        return view("registros.salidas");
    }
}
