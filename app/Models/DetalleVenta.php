<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalles_ventas';

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
        if ($this->paquete) {
            return "{$this->paquete->origen} - {$this->paquete->destino} ({$this->paquete->fecha_vuelo} {$this->paquete->hora_salida})";
        }
        return 'N/A';
    }

    public function getNombrePasajeAttribute()
    {
        if ($this->pasaje) {
            return "{$this->pasaje->empresa_transporte} - {$this->pasaje->origen} - {$this->pasaje->destino}";
        }
        return 'N/A';
    }

    public function getNombreVueloAttribute()
    {
        if ($this->vuelo) {
            return "{$this->vuelo->aerolinea} - {$this->vuelo->origen} - {$this->vuelo->destino}";
        }
        return 'N/A';
    }
}
