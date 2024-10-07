<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Usuarios';
    protected $fillable = [
        'nombreUsuario',
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'correoElectronico',
        'contraseña',
        'rol',
    ];
}
