<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagos extends Model
{
    use SoftDeletes;
    public $table = 'pagos';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'id_folio',
        'id_tipo_pago',
        'id_departamento',
        'cantidad',
        'id_usuario',
        'mes',
        'fecha_contable'
    ];
}
