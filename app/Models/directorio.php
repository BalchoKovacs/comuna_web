<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class directorio extends Model
{
   use SoftDeletes;
   public $table = 'directorio';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'cargo',
    'nombres',
    'telefono',
    'correo',
    'url_foto'
];
}
