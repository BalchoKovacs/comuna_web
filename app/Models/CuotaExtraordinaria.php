<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CuotaExtraordinaria extends Model
{
    use SoftDeletes;
   public $table = 'cuota_extraordinaria';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'id_departamento',
    'monto',
    'mensaje',
    'url_imagen'
];
}
