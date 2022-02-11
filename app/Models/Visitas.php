<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitas extends Model
{
    use SoftDeletes;
    public $table= 'visitas';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'id_tipo_documento',
        'nro_documento',
        'nombres',
        'apellidos',
        'id_tipo_visita',
        'id_tipo_fecha',
        'fecha',
        'max_uso',
        'max_personas',
        'nro_accesos',
        'codigo_visita',
        'url_qr'
    ];

                             
}
