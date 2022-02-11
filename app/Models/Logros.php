<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes

class Logros extends Model
{
    use SoftDeletes;
    public $table = 'logros';
    protected $dates = ['deleted_at'];
    public $fillable = [

        'titulo',
        'fecha',
        'descripcion',
        'url_imagen_logro'

    ];
}
