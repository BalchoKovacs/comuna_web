<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comunicado extends Model
{
    use SoftDeletes;
   public $table = 'comunicado';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'id_usuario',
    'titulo',
    'fecha',
    'fecha',
    'contenido',
    'url_imagen'];
}
