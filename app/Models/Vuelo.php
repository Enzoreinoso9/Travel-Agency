<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = 'vuelos';

    protected $fillable = [
        'aerolinea',
        'origen',
        'destino',
        'fecha_salida',
        'fecha_llegada',
        'precio',
        'disponibilidad',
    ];
}
