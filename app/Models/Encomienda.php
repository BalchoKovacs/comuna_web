<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Encomienda extends Model
{
    use SoftDeletes;
   public $table = 'encomienda';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'id_tipo_encomienda',
    'nombres',
    'apellidos',
    'descripcion',
    'recojo',
    'fecha_recibido',
    'fecha_entregado',
    'codigo_registro',
    'url_qr',
    'estado_encomienda'
];
}
