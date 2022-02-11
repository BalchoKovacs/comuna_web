<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PConfiguracionVigilante extends Model
{
    use SoftDeletes;
    public $table = 'p_cnfiguracion_vigilante';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'fotos_tomar',
        'id_tipo_registro_salida',
        'maximos_veces_fe',
        'maximo_veces_rf',
        'id_compartir_clave_codigo',
        'p9',
        'p10',
        'numero_tokens',
        'p11',
        'p12',
        'p13',
        'id_p_tipo_limitar_fecha',
        'maximo_personas',
        'p14'

    ];
}
