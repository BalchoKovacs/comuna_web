<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TipoSolicitud extends Model
{
    use SoftDeletes;
    public $table= 'tipo_solicitud';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'nombre'
    ];
}
