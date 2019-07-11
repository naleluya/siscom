<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DependenciasController extends Controller
{
    //
    public function secretarias()
    {
        return view('dependencias.dependencias');
    }
}
