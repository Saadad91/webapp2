<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edad;
use App\Http\Resources\Edad as EdadResource;

class EdadController extends Controller
{
    //

    public function index()
    {
        //
        $datos = Edad::all();

        return EdadResource::collection($datos);
    }
}
