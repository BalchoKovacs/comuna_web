<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PMMorososAcercarseVigilancia extends Model
{
    use SoftDeletes;
    public $table ='p_m_morosos_acercarse_viligancia';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'tiempo_acercarse'

    ];
}
