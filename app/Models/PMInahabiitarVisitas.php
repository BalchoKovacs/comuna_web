<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PMInahabiitarVisitas extends Model
{
    use SoftDeletes;
    public $table ='p_m_inahabilitar_visitas_morosos';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'tiempo_inhabilitado'

    ];
}
