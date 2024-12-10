<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalles_ventas';

    protected $fillable = [
        'id_venta',
        'id_paquete',
        'id_pasaje',
        'id_vuelo'
    ];

    public function paquete()
    {
        return $this->belongsTo(PaqueteTuristico::class, 'id_paquete', 'id_paquete');
    }

    public function pasaje()
    {
        return $this->belongsTo(PasajeOmnibus::class, 'id_pasaje', 'id_pasaje');
    }

    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class, 'id_vuelo', 'id_vuelo');
    }


    public function getNombrePaqueteAttribute()
    {
        if ($this->id_paquete && $this->paquete) {
            $fields = array_filter([
                $this->paquete->origen,
                $this->paquete->destino,
                $this->paquete->fecha_vuelo
            ]);
            return !empty($fields) ? implode(' - ', $fields) : 'Sin detalles';
        }
        return null;
    }

    public function getNombrePasajeAttribute()
    {
        if ($this->id_pasaje && $this->pasaje) {
            $fields = array_filter([
                $this->pasaje->empresa_transporte,
                $this->pasaje->origen,
                $this->pasaje->destino
            ]);
            return !empty($fields) ? implode(' - ', $fields) : 'Sin detalles';
        }
        return null;
    }

    public function getNombreVueloAttribute()
    {
        if ($this->id_vuelo && $this->vuelo) {
            $fields = array_filter([
                $this->vuelo->aerolinea,
                $this->vuelo->origen,
                $this->vuelo->destino
            ]);
            return !empty($fields) ? implode(' - ', $fields) : 'Sin detalles';
        }
        return null;
    }
}
