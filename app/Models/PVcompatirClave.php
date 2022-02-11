<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PVcompatirClave extends Model
{
    use SoftDeletes;
    public $table = 'pv_compartir_clave_codigo';
    protected $dates = ['deleted_at'];
    public $dates = [
        'opcion'
    ];
}
