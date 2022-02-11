<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PConfigurarSerie extends Model
{
    use SoftDeletes;
    public $table = 'p_configurar_serie';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'serie',
        'estado'
    ];
}
