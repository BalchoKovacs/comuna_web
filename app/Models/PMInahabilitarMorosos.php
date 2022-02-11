<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PMInahabilitarMorosos extends Model
{
    use SoftDeletes;
    public $table ='p_m_inahabilitar_morosos_reservaciones';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'tiempo_inhabilitado'

    ];
}
