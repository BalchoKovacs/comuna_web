<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprobante extends Model
{
    use SoftDeletes;
   public $table = 'comprobante';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'id_usuario',
    'nombre',
    'fecha_emitido',
    'id_tipo_pago',
    'id_estado_pago',
    'url_comprobante'];
}
