<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PModuloEncomienda extends Model
{
    use SoftDeletes;
    public $table = 'p_modulo_encomienda';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'estado'
    ];
}
