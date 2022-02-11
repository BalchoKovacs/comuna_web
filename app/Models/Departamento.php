<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use SoftDeletes;
   public $table = 'departamento';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'id_tipo_departamento',
    'id_torre',
    'id_tipo_numeracion',
    'numero'
];
    function tipo_departamento(){
        return $this->belongsTo('App\Models\TipoDepartamento','id_tipo_departamento','id');
    }
    function torre(){
        return $this->belongsTo('App\Models\Torre','id_torre','id');
    }
    function numeracion(){
        return $this->belongsTo('App\Models\TipoNumeracion','id_tipo_numeracion','id');
    }
}
