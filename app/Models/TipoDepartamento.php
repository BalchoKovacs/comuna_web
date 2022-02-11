<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDepartamento extends Model
{
    use SoftDeletes;
    public $table= 'tipo_departamento';
    protected $dates= ['deleted_at'];
    public $fillable = [
        'nombre'
    ]; 
}
