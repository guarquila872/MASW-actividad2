<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $fillable = [
        'identificacion',
        'TipoIdentificacion',
        'Nombres',
        'Apellidos',
        'Genero',
        'Telefono',
        'Direccion',
        'Correo',
        'GrupoSanguineo',
        'Titulo'
    ];
}
