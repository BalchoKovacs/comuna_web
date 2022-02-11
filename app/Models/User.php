<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    public $table = 'users';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'id_tipo_documento',
        'nro_documento',
        'id_tipo_rol',
        'nombre',
        'apellidos',
        'telefono',
        'complejo',
        'pais',
        'estado',
        'unidades',
        'id_tipo_numeracion',
        'id_departamento',
        'url_foto',
        'url_qr',
        'email',
        'password'
    ];
}
