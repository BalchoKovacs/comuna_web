<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PTipoLimitarFecha extends Model
{
    use SoftDeletes;
    public $table = 'p_tipo_limitar_fecha';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'limite_fecha'

    ];
}
