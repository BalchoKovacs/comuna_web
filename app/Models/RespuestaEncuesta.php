<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RespuestaEncuesta extends Model
{
    use SoftDeletes;
    public $table= 'respuesta_encuesta';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'id_encuesta',
        'id_usuario',
        'respuesta'
    ]; 
           

}
