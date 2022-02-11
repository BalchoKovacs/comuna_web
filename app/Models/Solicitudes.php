<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Solicitudes extends Model
{
    use SoftDeletes;
    public $table= 'solicitudes';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'id_tipo_solicitud',
        'fecha',
        'id_estado_solicitud',
        'asunto',
        'mensaje'
    ]; 

}
