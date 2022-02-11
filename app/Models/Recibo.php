<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Recibo extends Model
{
   use SoftDeletes;
    public $table= 'recibo';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'fecha',
        'id_concepto',
        'id_forma_pago',
        'monto',
        'id_estado_recibo',
        'url_imagen_comprobante'
    ];                
       
}
