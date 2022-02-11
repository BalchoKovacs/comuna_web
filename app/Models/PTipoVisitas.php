<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PTipoVisitas extends Model
{
    
    use SoftDeletes;
    public $table= 'p_tipo_visitas';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'descripción',
        'visita_programada',
        'estado'
    ];
        
}
