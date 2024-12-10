<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    // Nombre de la tabla
    protected $table = 'ventas';

    // Clave primaria
    protected $primaryKey = 'id_venta';

    // Campos que se pueden asignar en masa
    protected $fillable = [
        'id_cliente',
        'id_usuario',
        'fecha_venta',
        'monto_total',
        'estado_pago',
    ];


    protected $hidden = [
        // Agrega aquí campos si necesitas ocultarlos.
    ];

    // Definición de tipos de datos para los campos
    protected $casts = [
        'fecha_venta' => 'datetime',
        'monto_total' => 'float',
    ];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }

    /**
     * Relación con el modelo Usuario
     * Una venta pertenece a un usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    // Definir la relación con DetalleVenta
    public function detalles()
    {
        return $this->hasOne(DetalleVenta::class, 'id_venta');
    }
}
