<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use SoftDeletes;
    public $table= 'reserva';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'id_area_reserva',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'id_estado_reserva'
    ];      
                 
}
