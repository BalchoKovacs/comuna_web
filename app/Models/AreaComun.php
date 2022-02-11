<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class AreaComun extends Model
{
   use SoftDeletes;
   public $table = 'area_comun_reserva';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'nombre',
    'costo',
    'id_tipo_disponibilidad'
];
}
