<?php

namespace App\Http\Controllers\API;

use App\Models\Horarioatencion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HorarioatencionController
{
    public function ListarHorarioatenciones()
    {
        $Horarioatenciones = Horarioatencion::all();
        $data = [
            'data' => $Horarioatenciones,
            'message' => 'Exito',
            'exito' => 200
        ];
        return response()->json($data, 200);
    }

    public function Agregar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:15',
            'HoraInicio' => 'required|max:5',
            'HoraFin' => 'required|max:5',
            'HoraInicioReceso' => 'required|max:5',
            'HoraFinReceso' => 'required|max:5',
        ]);

        if ($validator->fails()) {
            $data = [
                'data' =>  $validator->errors(),
                'message' => 'Error en la validación de los datos',
                'exito' => 400
            ];
            return response()->json($data, 400);
        }

        $Horarioatencion = Horarioatencion::create([
            'Nombre' => $request->Nombre,
            'HoraInicio' => $request->HoraInicio,
            'HoraFin' => $request->HoraFin,
            'HoraInicioReceso' => $request->HoraInicioReceso,
            'HoraFinReceso' => $request->HoraFinReceso,
        ]);

        if (!$Horarioatencion) {
            $data = [
                'data' =>  '',
                'message' => 'Error al crear el horario de atención',
                'exito' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'data' =>  $Horarioatencion,
            'message' => '',
            'exito' => 201
        ];

        return response()->json($data, 201);
    }

    public function BuscarId($id)
    {
        $horarioatencion = Horarioatencion::find($id);

        if (!$horarioatencion) {
            $data = [
                'message' => 'Horario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'horarioatencion' => $horarioatencion,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function Eliminar($id)
    {
        $horarioatencion = Horarioatencion::find($id);

        if (!$horarioatencion) {
            $data = [
                'message' => 'Horario de atención no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $horarioatencion->delete();

        $data = [
            'message' => 'Horario de atención eliminada',
            'status' => 200
        ];

        return response()->json($data, 200);
    }


    public function Editar(Request $request, $id)
    {
        $horarioatencion = Horarioatencion::find($id);

        if (!$horarioatencion) {
            $data = [
                'message' => 'Horario de atención no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:15',
            'HoraInicio' => 'required|max:5',
            'HoraFin' => 'required|max:5',
            'HoraInicioReceso' => 'required|max:5',
            'HoraFinReceso' => 'required|max:5',
        ]);

        if ($validator->fails()) {
            $data = [
                'data' =>  $validator->errors(),
                'message' => 'Error en la validación de los datos',
                'exito' => 400
            ];
            return response()->json($data, 400);
        }

        $horarioatencion->Nombre = $request->Nombre;
        $horarioatencion->HoraInicio = $request->HoraInicio;
        $horarioatencion->HoraFin = $request->HoraFin;
        $horarioatencion->HoraInicioReceso = $request->HoraInicioReceso;
        $horarioatencion->HoraFinReceso = $request->HoraFinReceso;
        $horarioatencion->save();

        $data = [
            'data' =>  $horarioatencion,
            'message' => 'Horario de atención actualizado',
            'exito' => 200
        ];

        return response()->json($data, 200);
    }

    public function tets()
    {
        $comments = Horarioatencion::find(1);
        return $comments;
    }

}
