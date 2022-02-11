<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PAvisoPopup extends Model
{
    use SoftDeletes;
    public $table = 'p_aviso_popup';
    protected $dates =['deleted_at'];
    public $fillable = [
        'titulo',
        'mensaje',
        'url_imagen'
    ];
}
