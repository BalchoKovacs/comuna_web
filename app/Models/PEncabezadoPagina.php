<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PEncabezadoPagina extends Model
{
    use SoftDeletes;
    public $table = 'p_encabezado_pagina';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'url_encabezado'
    ];
}
