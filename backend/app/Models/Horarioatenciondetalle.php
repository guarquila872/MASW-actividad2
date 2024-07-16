<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarioatenciondetalle extends Model
{
    use HasFactory;

    protected $table = 'horarioatenciondetalle';
    protected $fillable = [
        'IdHorarioatenciondetalle',
        'medico_id',
        'horarioatencion_id'
    ];
}
