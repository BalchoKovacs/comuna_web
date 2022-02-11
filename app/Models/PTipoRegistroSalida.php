<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PTipoRegistroSalida extends Model
{
    use SoftDeletes;
    public $table= 'p_tipo_registro_salida';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'registro_salida_mediante'
    ];
}
