<?php

namespace App\Http\Controllers\API;

use App\Models\Consultorio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConsultorioController extends Controller
{
    public function ListarConsultorios($codigo, $rango)
    {
        $q = Consultorio::where('Estado', 'Activo')
            ->orderBy('id', 'desc')
            ->skip($codigo)
            ->take($rango == 0 ? 1000 : $rango)
            ->get();
        $data = [
            'data' => $q,
            'mensaje' => 'Exito',
            'exito' => 200
        ];
        return response()->json($data);
    }
    public function Filtrar($tipo, $valor)
    {
        $query = Consultorio::query();

        if ($tipo == 0) {
            $query->where('Estado', $valor);
        } elseif ($tipo == 1) {
            $query->where('Ruc', strtoupper($valor))
                ->where('Estado', 'Activo');
        } elseif ($tipo == 2) {
            $query->where('Nombre', strtoupper($valor))
                ->where('Estado', 'Activo');
        } elseif ($tipo == 3) {
            $query->where('Nombre', 'like', '%' . strtoupper($valor) . '%')
                ->where('Estado', 'Activo');
        } elseif ($tipo == 4) {
            $query->where('NombreComercial', strtoupper($valor))
                ->where('Estado', 'Activo');
        } elseif ($tipo == 5) {
            $query->where('NombreComercial', 'like', '%' . strtoupper($valor) . '%')
                ->where('Estado', 'Activo');
        } else {
            $data = [
                'data' => [],
                'exito' => 400,
                'mensaje' => 'Tipo no válido'
            ];
            return response()->json($data);
        }

        $result = $query->orderBy('id')
            ->take(100)
            ->get();

        $data = [
            'data' => $result,
            'exito' => 200
        ];

        return response()->json($data);
    }
    public function BuscarId($id)
    {
        $Consultorio = Consultorio::find($id);

        if (!$Consultorio) {
            $data = [
                'message' => 'Consultorio no encontrado',
                'exito' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'Consultorio' => $Consultorio,
            'exito' => 200
        ];

        return response()->json($data, 200);
    }
    public function Agregar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:120',
            'Ruc' => 'required|max:13',
            'NombreComercial' => 'required|max:120',
            'Direccion' => 'required|max:250',
            'Telefono' => 'required|max:10',
            'PorcentajeIva' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'Logo' => 'required',
            'Correo' => 'required|email|max:50',
            'DireccionMatriz' => 'required|max:250',
            'FechaIn' => 'required|date|date_format:Y-m-d',
            'FechaUp' => 'required|date|date_format:Y-m-d',
            'Estado' => 'required|max:13',
        ]);

        if ($validator->fails()) {
            $data = [
                'data' =>  $validator->errors(),
                'message' => 'Error en la validación de los datos',
                'exito' => 400
            ];
            return response()->json($data, 400);
        }

        $Consultorio = Consultorio::create([
            'Nombre' => $request->Nombre,
            'Ruc' => $request->Ruc,
            'NombreComercial' => $request->NombreComercial,
            'Direccion' => $request->Direccion,
            'Telefono' => $request->Telefono,
            'PorcentajeIva' => $request->PorcentajeIva,
            'Logo' => $request->Logo,
            'Correo' => $request->Correo,
            'DireccionMatriz' => $request->DireccionMatriz,
            'FechaIn' => $request->FechaIn,
            'FechaUp' => $request->FechaUp,
            'Estado' => $request->Estado,
        ]);

        if (!$Consultorio) {
            $data = [
                'data' =>  '',
                'message' => 'Error al crear el estudiante',
                'exito' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'data' =>  $Consultorio,
            'message' => '',
            'exito' => 201
        ];

        return response()->json($data, 201);
    }
    public function Editar(Request $request, $id)
    {
        $Consultorio = Consultorio::find($id);

        if (!$Consultorio) {
            $data = [
                'message' => 'Consultorio no encontrado',
                'exito' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|max:120',
            'Ruc' => 'required|max:13',
            'NombreComercial' => 'required|max:120',
            'Direccion' => 'required|max:250',
            'Telefono' => 'required|max:10',
            'PorcentajeIva' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'Logo' => 'required',
            'Correo' => 'required|email|max:50',
            'DireccionMatriz' => 'required|max:250',
            'FechaIn' => 'required|date|date_format:Y-m-d',
            'FechaUp' => 'required|date|date_format:Y-m-d',
            'Estado' => 'required|max:13',
        ]);

        if ($validator->fails()) {
            $data = [
                'data' =>  $validator->errors(),
                'message' => 'Error en la validación de los datos',
                'exito' => 400
            ];
            return response()->json($data, 400);
        }

        $Consultorio->Nombre = $request->Nombre;
        $Consultorio->Ruc = $request->Ruc;
        $Consultorio->NombreComercial = $request->NombreComercial;
        $Consultorio->Direccion = $request->Direccion;
        $Consultorio->Telefono = $request->Telefono;
        $Consultorio->PorcentajeIva = $request->PorcentajeIva;
        $Consultorio->Logo = $request->Logo;
        $Consultorio->Correo = $request->Correo;
        $Consultorio->DireccionMatriz = $request->DireccionMatriz;
        $Consultorio->FechaIn = $request->FechaIn;
        $Consultorio->FechaUp = $request->FechaUp;
        $Consultorio->Estado = $request->Estado;

        $Consultorio->save();

        $data = [
            'data' =>  $Consultorio,
            'message' => 'Consultorio actualizado',
            'exito' => 200
        ];

        return response()->json($data, 200);
    }
    public function EditarParcial(Request $request)
    {
        $Consultorio = Consultorio::find($request->id);

        if (!$Consultorio) {
            $data = [
                'data' =>  '',
                'message' => 'Consultorio no encontrado',
                'exito' => 404
            ];
            return response()->json($data);
        }

        $validator = Validator::make($request->all(), [
            'Nombre' => 'max:120',
            'Ruc' => 'max:13',
            'NombreComercial' => 'max:120',
            'Direccion' => 'max:250',
            'Telefono' => 'max:10',
            'PorcentajeIva' => 'numeric|regex:/^\d+(\.\d{1,2})?$/',
            'Logo' => '',
            'Correo' => 'email|max:50',
            'DireccionMatriz' => 'max:250',
            'FechaIn' => 'date|date_format:Y-m-d',
            'FechaUp' => 'date|date_format:Y-m-d',
            'Estado' => 'max:13',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'exito' => 400
            ];
            return response()->json($data);
        }

        if ($request->has('Nombre')) {
            $Consultorio->Nombre = $request->Nombre;
        }

        if ($request->has('Ruc')) {
            $Consultorio->Ruc = $request->Ruc;
        }

        if ($request->has('NombreComercial')) {
            $Consultorio->NombreComercial = $request->NombreComercial;
        }

        if ($request->has('Direccion')) {
            $Consultorio->Direccion = $request->Direccion;
        }
        if ($request->has('Telefono')) {
            $Consultorio->Telefono = $request->Telefono;
        }

        if ($request->has('PorcentajeIva')) {
            $Consultorio->PorcentajeIva = $request->PorcentajeIva;
        }

        if ($request->has('Logo')) {
            $Consultorio->Logo = $request->Logo;
        }

        if ($request->has('Correo')) {
            $Consultorio->Correo = $request->Correo;
        }

        if ($request->has('DireccionMatriz')) {
            $Consultorio->DireccionMatriz = $request->DireccionMatriz;
        }

        if ($request->has('FechaIn')) {
            $Consultorio->FechaIn = $request->FechaIn;
        }
        if ($request->has('FechaUp')) {
            $Consultorio->FechaUp = $request->FechaUp;
        }
        if ($request->has('Estado')) {
            $Consultorio->Estado = $request->Estado;
        }

        $Consultorio->save();

        $data = [
            'message' => 'Estudiante actualizado',
            'Consultorio' => $Consultorio,
            'exito' => 200
        ];

        return response()->json($data);
    }
    
    public function Eliminar($id)
    {
        $Consultorio = Consultorio::find($id);

        if (!$Consultorio) {
            $data = [
                'message' => 'Consultorio no encontrado',
                'exito' => 404
            ];
            return response()->json($data, 404);
        }

        $Consultorio->delete();

        $data = [
            'message' => 'Consultorio eliminada',
            'exito' => 200
        ];

        return response()->json($data, 200);
    }
}
