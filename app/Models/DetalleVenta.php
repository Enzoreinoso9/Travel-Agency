<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    // Nombre de la tabla
    protected $table = 'detallesventas';

    // Clave primaria
    protected $primaryKey = 'id_detalle';

    protected $fillable = [
        'id_venta',
        'id_paquete',
        'id_pasaje',
        'id_vuelo',
    ];

    // Relación con el modelo Venta
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta', 'id_venta');
    }

    // Relación con el modelo PaqueteTuristico
    public function paquete()
    {
        return $this->belongsTo(PaqueteTuristico::class, 'id_paquete', 'id_paquete');
    }

    // Relación con el modelo PasajeOmnibus
    public function pasaje()
    {
        return $this->belongsTo(PasajeOmnibus::class, 'id_pasaje', 'id_pasaje');
    }

    // Relación con el modelo Vuelo
    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class, 'id_vuelo', 'id_vuelo');
    }
}
