<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasajeOmnibus extends Model
{
    protected $table = 'pasajes_omnibus';
    protected $primaryKey = 'id_pasaje';
    
    protected $fillable = [
        'empresa_transporte',
        'origen',
        'destino',
        'fecha_salida',
        'fecha_llegada',
        'precio',
        'disponibilidad'
    ];

    protected $casts = [
        'fecha_salida' => 'datetime',
        'fecha_llegada' => 'datetime',
    ];
}
