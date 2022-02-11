<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class URegistroPago extends Model
{
    use SoftDeletes;
    public $table= 'u_registro_pago';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'id_concepto',
        'id_cuentas_pagar',
        'id_departamento',
        'id_usuario',
        'mes_cubrir',
        'id_forma_pago',
        'fecha_contable'
    ];


                 
}
