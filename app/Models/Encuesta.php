<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Encuesta extends Model
{
    use SoftDeletes;
   public $table = 'encuesta';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'asunto',
    'mensaje',
    'url_foto'
];
}
