<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BalanceGeneral extends Model
{
    use SoftDeletes;
   public $table = 'balance_general';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'id_ingresos',
    'id_pagos',
    'id_cuentas_cobrar',
    'id_cuentas_pagar',
    'id_multas',
    'id_mantenimiento',
    'caja'

    ];
}
