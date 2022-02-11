<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PConfiguracion extends Model
{
    use SoftDeletes;
    public $table = 'p_configuracion'
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
        'dia_limite',
        'mora_pago_nopuntual',
        'mora_primer_vencido',
        'mora_segundo_vencido',
        'etiqueta_extra',
        'etiqueta_habitado',
        'id_zona_horario',
        'maximo_dias_reservas',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13'
    ];
}
