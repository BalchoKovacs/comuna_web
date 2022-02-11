<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PMTipoDeudoresResidentes extends Model
{
    use SoftDeletes;
    public $table ='p_m_tipo_deudores_residentes';
    protected $dates = ['deleted_at'];
    public $fillable =[
        'vista_residentes'
    ];
}
