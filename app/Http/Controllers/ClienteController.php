<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Resources\cliente as ClienteResource;

class ClienteController extends Controller
{
    //
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = cliente::all();

        return ClienteResource::collection($datos);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        try {
            Cliente::create($data);

            return [
                'sucess' => true,
                'msg' => 'Registro guardado con éxito!'
            ];
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}