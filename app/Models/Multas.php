<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes

class Multas extends Model
{
    use SoftDeletes;
    public $table = 'multas';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'id_usuario',
        'titulo',
        'cantidad',
        'descripcion',
        'url_foto'
    ];
}
