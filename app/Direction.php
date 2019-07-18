<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    //
    public $timestamps = false;
    protected $table = 'directions';
    protected $fillable = [
        "dir_name",
        "sec_id"
    ];

    
}
