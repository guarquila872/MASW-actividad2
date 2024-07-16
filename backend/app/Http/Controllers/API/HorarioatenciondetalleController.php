<?php

namespace App\Http\Controllers\API;

use App\Models\Horarioatenciondetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HorarioatenciondetalleController
{
    public function ListarHorarioatenciones()
    {
        $horarioatenciondetalles = Horarioatenciondetalle::all();
        $data = [
            'data' => $horarioatenciondetalles,
            'message' => 'Exito',
            'exito' => 200
        ];
        return response()->json($data, 200);
    } 
}
