<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'IdUsuario';
    public $timestamps = false;

    protected $fillable = [
        'Usuario',
        'Clave',
        'Estado',
        'FechaIn',
        'FechaUp',
        'IdPersona',
    ];

    protected $hidden = [
        'Clave',
    ];

    protected $casts = [
        'FechaIn' => 'date',
        'FechaUp' => 'date',
    ];

    public function getAuthPassword()
    {
        return $this->Clave;
    }
}
