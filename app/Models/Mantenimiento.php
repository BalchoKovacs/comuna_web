<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mantenimiento extends Model
{
    use SoftDeletes;
    public $table = 'mantenimiento';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'id_tipo_mantenimiento',
        'monto'
    ];
}
