<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoPago extends Model
{
    use SoftDeletes;
    public $table = 'estado_pago';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'nombre'
];
}
