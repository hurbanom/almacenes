<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Realiza la conexión con la tabla obras
 */
class Obra extends Model
{
    /**
     * Atrinutos del modelo que pueden ser guardados masivamente
     * @var array
     */
    protected $fillable = [
        'id_obra',
        'nombre_obra',
        'fecha_inicio',
        'fecha_cierre',
        'nombre_cliente',
        'numero_contrato',
        'calle',
        'numero_exterior',
        'numero_interior',
        'colonia',
        'estado',
        'delegacion_municipio',
        'codigo_postal',
        'referencias_adicionales',
    ];
}
