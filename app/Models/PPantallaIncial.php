<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PPantallaIncial extends Model
{
    use SoftDeletes;
    public $table ='p_pantalla_inicial';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'url_intro'

    ];
}
