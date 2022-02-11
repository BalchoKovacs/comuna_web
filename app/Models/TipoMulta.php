<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoMulta extends Model
{
    use SoftDeletes;
    public $table= 'tipo_multa';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'nombre'
    ];
}
