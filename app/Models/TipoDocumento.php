<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    
    public $table= 'tipo_documento';
    
    public $fillable = [
        'nombre'
    ];
}
