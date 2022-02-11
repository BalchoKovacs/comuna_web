<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CuentasPagar extends Model
{
     use SoftDeletes;
   public $table = 'cuentas_pagar';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'acreedor',
    'descripcion',
    'monto',
    'imagen',
    'pdf',];
}
