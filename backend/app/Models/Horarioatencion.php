<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarioatencion extends Model
{
    use HasFactory;

    protected $table = 'horarioatencion';
    protected $fillable = [
        'IdHorarioatencion',
        'Nombre',
        'HoraInicio',
        'HoraFin',
        'HoraInicioReceso',
        'HoraFinReceso'
    ];
}
