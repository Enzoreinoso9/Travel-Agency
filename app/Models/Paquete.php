<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $table = 'paquetes_turisticos';
    protected $primaryKey = 'id_paquete';

    protected $fillable = [
        'nombre',
        'origen',
        'destino',
        'descripcion',
        'precio',
        'duracion',
        'fecha_inicio',
        'fecha_fin',
        'disponibilidad'
    ];

    protected $dates = [
        'fecha_inicio',
        'fecha_fin'
    ];

    // Relaciones si las necesitas
    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class);
    }
}
