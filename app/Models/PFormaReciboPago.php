<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PFormaReciboPago extends Model
{
    use SoftDeletes;
    public $table = 'p_forma_recibo_pago';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'url_imagen'
    ];
}
