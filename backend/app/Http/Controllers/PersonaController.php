<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PersonaController extends Controller
{
    public function ListarPersonas()
    {
        $personas = Persona::all();
        $data = [
            'data' => $personas,
            'message' => 'Exito',
            'exito' => 200
        ];
        return response()->json($data, 200);
    }

    public function Agregar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'identificacion' => 'required',
            'tipo_id' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required|email',
            'grupo_sanguineo' => 'required',
            'titulo' => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'data' =>  $validator->errors(),
                'message' => 'Error en la validación de los datos',
                'exito' => 400
            ];
            return response()->json($data, 400);
        }

        $persona = Persona::create([
            'identificacion' => $request->identificacion,
            'tipo_id' => $request->tipo_id,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'genero' => $request->genero,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'correo' => $request->correo,
            'grupo_sanguineo' => $request->grupo_sanguineo,
            'titulo' => $request->titulo,
        ]);

        if (!$persona) {
            $data = [
                'data' =>  '',
                'message' => 'Error al crear el estudiante',
                'exito' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'data' =>  $persona,
            'message' => '',
            'exito' => 201
        ];

        return response()->json($data, 201);
    }


    public function BuscarId($id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            $data = [
                'message' => 'Persona no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'persona' => $persona,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function Eliminar($id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            $data = [
                'message' => 'Persona no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $persona->delete();

        $data = [
            'message' => 'Persona eliminada',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function Editar(Request $request, $id)
    {
        $persona = persona::find($id);

        if (!$persona) {
            $data = [
                'message' => 'Persona no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'identificacion' => 'required',
            'tipo_id' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'correo' => 'required|email',
            'grupo_sanguineo' => 'required',
            'titulo' => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'data' =>  $validator->errors(),
                'message' => 'Error en la validación de los datos',
                'exito' => 400
            ];
            return response()->json($data, 400);
        }

        $persona->identificacion = $request->identificacion;
        $persona->tipo_id = $request->tipo_id;
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->genero = $request->genero;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;
        $persona->correo = $request->correo;
        $persona->grupo_sanguineo = $request->grupo_sanguineo;
        $persona->titulo = $request->titulo;

        $persona->save();
        
        $data = [
            'data' =>  $persona,
            'message' => 'Persona actualizado',
            'exito' => 200
        ];

        return response()->json($data, 200);
    }

    public function EditarParcial(Request $request, $id)
    {
        $persona = persona::find($id);

        if (!$persona) {
            $data = [
                'data' =>  '',
                'message' => 'Persona no encontrado',
                'exito' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'identificacion' => 'max:255',
            'tipo_id' => 'max:255',
            'nombres' => 'max:255',
            'apellidos' => 'max:255',
            'genero' => 'max:255',
            'telefono' => 'max:255',
            'direccion' => 'max:255',
            'correo' => 'max:255|email',
            'grupo_sanguineo' => 'in:O+,A+,A-',
            'titulo' => 'max:255',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        if ($request->has('identificacion')) {
            $persona->identificacion = $request->identificacion;
        }

        if ($request->has('tipo_id')) {
            $persona->tipo_id = $request->tipo_id;
        }

        if ($request->has('nombres')) {
            $persona->nombres = $request->nombres;
        }

        if ($request->has('apellidos')) {
            $persona->apellidos = $request->apellidos;
        }
        if ($request->has('genero')) {
            $persona->genero = $request->genero;
        }

        if ($request->has('telefono')) {
            $persona->telefono = $request->telefono;
        }

        if ($request->has('direccion')) {
            $persona->direccion = $request->direccion;
        }

        if ($request->has('correo')) {
            $persona->correo = $request->correo;
        }

        if ($request->has('grupo_sanguineo')) {
            $persona->grupo_sanguineo = $request->grupo_sanguineo;
        }

        if ($request->has('titulo')) {
            $persona->titulo = $request->titulo;
        }

        $persona->save();

        $data = [
            'message' => 'Estudiante actualizado',
            'persona' => $persona,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}
