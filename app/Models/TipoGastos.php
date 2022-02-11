<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TipoGastos extends Model
{
    use SoftDeletes;
    public $table= 'tipo_gastos';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'nombre'
    ];
}
