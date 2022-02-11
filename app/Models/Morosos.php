<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Morosos extends Model
{
    use SoftDeletes;
    public $table = 'morosos';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'id_usuario',
        'id_departamento',
        'id_estado_moroso'
    ];
}
