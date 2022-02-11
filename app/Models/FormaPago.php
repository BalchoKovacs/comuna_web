<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormaPago extends Model
{
    use SoftDeletes;
    public $table = 'forma_pago';
   protected $dates = ['deleted_at'];
   public $fillable = [
    'f_pago'
];
}
