<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PConceptoPago extends Model
{
    use SoftDeletes;
    public $table = 'p_concepto_pago';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'concepto',
        'monto'
    ];
}
