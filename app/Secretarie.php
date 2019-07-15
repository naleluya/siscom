<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretarie extends Model
{
    //para evitar el error de solicitud de columnas en laravel
    public $timestamps = false;
    protected $table = 'secretaries';
}
