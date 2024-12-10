<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaqueteTuristico extends Model
{
    protected $table = 'paquetes_turisticos';
    protected $primaryKey = 'id_paquete';

    protected $fillable = [
        'nombre',
        'origen',
        'destino',
        'fecha_vuelo',
        'hora_salida',
        'estado',
        'capacidad',
        'asientos_disponibles'
    ];

    protected $casts = [
        'fecha_vuelo' => 'date',
        'hora_salida' => 'datetime',
        'capacidad' => 'integer',
        'asientos_disponibles' => 'integer'
    ];
} 