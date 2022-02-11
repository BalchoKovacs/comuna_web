<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoRol extends Model
{
    use SoftDeletes;
    public $table ='tipo_rol';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'rol'

    ];

}
