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

    public function menores($sec_cod)
    {
        $secre = Secretarie::all();
        $direccion = Direction::select('*')->where('sec_id',$sec_cod)->get();
        $unidades = Unit::all();
        
        
        return view('dependencias.menores', ['direccion'=>$direccion, 'unidad'=>$unidades, 'secretaria'=>$secre]);
    }

    public function create_secretarias()
    {
        //
        /*$secretary = new Secretarie;

        $secretary->sec_name => $request->sec_name;

        $secretary->save();*/
    }

    public function create_direcciones(Request $request)
    {
        //
        $direction = new Direction;
        $direction->dir_name = $request->dir_name;
        $direction->sec_id = $request->sec_id;

        $direction->save();
    }
}
