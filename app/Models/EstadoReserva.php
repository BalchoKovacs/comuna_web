<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoReserva extends Model
{
    use SoftDeletes;
    public $table = 'estado_reserva';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'nombre'
];
}
