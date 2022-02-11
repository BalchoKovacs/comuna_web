<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PCuentaBancaria extends Model
{
    use SoftDeletes;
    public $table = 'p_cuenta_bancaria';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'titular_cuenta',
        'numero_cuenta',
        'cci',
        'nombre_banco',
        'correo'
    ];
}
