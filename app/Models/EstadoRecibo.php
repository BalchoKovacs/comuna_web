<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoRecibo extends Model
{
    use SoftDeletes;
    public $table = 'estado_recibo';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'nombre'
];
}
