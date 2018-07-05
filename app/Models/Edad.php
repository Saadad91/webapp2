<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edad extends Model
{
    //
    protected $table = 'edad';

    protected $fillable = [
        'nombre', 'years', 'mes', 'dia'
    ];
}
