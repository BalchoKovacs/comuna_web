<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PConfigurarGastos extends Model
{
    use SoftDeletes;
    public $table = 'p_configurar_gastos';
    protected $dates = ['deleted_at'];
    public $fillable = [
    'id_tipo_gasto',
    'estado'
    ];
}
