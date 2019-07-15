<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Secretarie;
use App\Direction;

use App\Unit;

class DependenciasController extends Controller
{
    //
    public function dependencias()
    {
        //
        $secre = Secretarie::all();
        $secre = $secre->map(function ($value, $key) {
            ($key%2 == 0)?$value['class'] = 'bg-red':$value['class'] = 'bg-yellow';
            
            return $value;
        });
        return view('dependencias.dependencias', ['dependencia'=>$secre]);
    }

    public function menores()
    {
        $direccion = Direction::all();
        $unidades = Unit::all();
        
        return view('dependencias.dependencias', ['direccion'=>$direccion, 'unidad'=>$unidades]);
    }

    public function create_secretarias()
    {
        //
        /*$secretary = new Secretarie;

        $secretary->sec_name => $request->sec_name;
        $secretary->des_id=1;

        $secretary->save();*/
    }
}
