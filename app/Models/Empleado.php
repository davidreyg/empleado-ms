<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource()]
class Empleado extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadoFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'cargo',
        'telefono',
        'estado',
    ];
}
