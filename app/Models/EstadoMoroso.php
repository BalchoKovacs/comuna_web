<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoMoroso extends Model
{
   use SoftDeletes
   public $table = 'nombre_tabla';
   public $fillable = [
    'nombre'
];
}
