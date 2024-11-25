<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Nombre de la tabla
    protected $table = 'clientes';

    // Clave primaria
    protected $primaryKey = 'id_cliente';

    // atributos
    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'email',
        'telefono',
        'direccion',
    ];


    protected $hidden = [
        // Agrega campos aquí si hay alguno que quieras ocultar, como contraseñas o tokens.
    ];


    protected $casts = [
        'email_verified_at' => 'datetime', // Si tienes un campo de este tipo
    ];
}
