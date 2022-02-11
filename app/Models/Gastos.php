<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gastos extends Model
{
    use SoftDeletes;
    public $table = 'pagos';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'fecha_contable',
    'id_tipo_gasto',
    'cantidad',
    'descripcion',
    'id_forma_pago',
    'url_imagen_gasto'
];
}
